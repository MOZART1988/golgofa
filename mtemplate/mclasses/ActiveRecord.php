<?php

namespace mtemplate\mclasses;

use app\modules\gallery\models\Gallery;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use Yii;


class ActiveRecord extends \yii\db\ActiveRecord
{

    protected $allValidationRules = [];
    protected $allAttributeLabels = [];

    public static function getDropdownList(
        $title = 'title',
        $key = 'id',
        $condition = [],
        $order = ['title' => SORT_ASC]
    ) {
        $query = static::find();

        if (!empty($condition)) {
            $query->andWhere($condition);
        }
        $result = $query->orderBy($order)->all();

        $list = ArrayHelper::map($result, $key, $title);

        return $list;
    }

    public static function getMenuDropdown($title = 'title', $key = 'id')
    {
        $data = static::find()->select([$key, $title])->asArray()->all();

        $items = [];
        foreach ($data as $item) {
            $items[] = [
                'label' => $item[$title],
                'url' => Url::to(['/' . \Yii::$app->requestedRoute, 'lang' => $item[$key]])
            ];
        }

        return $items;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        if ($this->hasAttribute('create_date') && $this->hasAttribute('update_date')) {
            $behaviors['timestamp'] = [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['create_date', 'update_date'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['update_date']
                ],
                'value' => new Expression('NOW()'),
            ];
        }

        if ($this->hasAttribute('sefname')) {
            $behaviors['sluggable'] = [
                'class' => SluggableBehavior::className(),
                'attribute' => ['id', 'title'],
                'slugAttribute' => 'sefname',
                'immutable' => true,
                'ensureUnique' => true,
            ];
        }

        return $behaviors;
    }

    public function getFormattedText()
    {
        if (!isset($this->text)) {
            return false;
        }

        preg_match_all('/\[gallery=(?P<galleryId>\d+)\]/', $this->text, $matches);

        if (!empty($matches['galleryId'])) {

            $patterns = [];
            $views = [];

            foreach ($matches['galleryId'] as $item) {
                $gallery = Gallery::findOne($item);

                if (!empty($gallery)) {
                    $result = \Yii::$app->getView()->renderFile(Yii::getAlias('@app') . '/modules/gallery/front/components/views/gallery.php',
                        ['gallery' => $gallery]);

                    $patterns[] = '[gallery='.$item.']';
                    $views[] = $result;
                }
            }
        }

        if (!empty($patterns) && !empty($views)) {
            $text = str_replace($patterns, $views, $this->text);
        }

        return !empty($text)  ? $text : $this->text;
    }

    public function getViewUrl()
    {
        return Url::to(["/{$this->tableName()}/default/update", 'id' => $this->id]);
    }

    /**
     * Perform a global regular expression match
     * and calls the callback for each match.
     */
    public static function preg_match_all_callback($pattern, $subject, callable $callback) {
        $r = preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
        foreach($matches ?? [] as $match)
            $callback($match);
        return $r;
    }
}
