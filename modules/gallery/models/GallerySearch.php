<?php

namespace app\modules\gallery\models;

use app\modules\pages\models\Pages;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\gallery\models\Gallery;

/**
 * GallerySearch represents the model behind the search form about `app\modules\gallery\models\Gallery`.
 */
class GallerySearch extends Gallery
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_active'], 'integer'],
            [['title', 'create_date', 'update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Gallery::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['created_at' => SORT_DESC]],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'is_active' => $this->is_active,
            'create_date' => $this->create_date,
            'update_date' => $this->update_date,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }

    public function updateUserIds()
    {
        foreach(Gallery::find()->all() as $gallery){
            if(is_null($gallery->user_id) ){
                $page = Pages::find()
                    ->where(['id'=>$gallery->page_id])->one();
                if(isset($page) && !is_null($page)){
                    $gallery->user_id = $page->user_id;
                    $gallery->save(false,['user_id']);
                }

            }
        }
        return true;
    }
}
