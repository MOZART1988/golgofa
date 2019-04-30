<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 02.04.19
 * Time: 15:24
 */

namespace app\modules\events\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;

class EventSearch extends Event
{
    public $categoryId;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_active', 'type'], 'integer'],
            [['title', 'create_date', 'update_date', 'categoryId', 'pub_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
        $query = Event::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'events.id' => $this->id,
            'events.updated_at' => $this->updated_at,
            'events.is_active' => $this->is_active,
            'events.type' => $this->type,
        ]);

        if (!empty($this->categoryId)) {
            $query->joinWith(['categories'])->andWhere(['categories.id' => $this->categoryId]);
        }

        $query->andFilterWhere(['like', 'events.title', $this->title])
        ->andFilterWhere(['like', 'created_at', $this->created_at])
        ->andFilterWhere(['like', 'pub_date', $this->pub_date]);

        return $dataProvider;
    }
}