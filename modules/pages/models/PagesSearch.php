<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 03.04.19
 * Time: 12:24
 */

namespace app\modules\pages\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;

class PagesSearch extends Pages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_active', 'add_to_mainpage'], 'integer'],
            [['title', 'created_at', 'updated_at'], 'safe'],
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
        $query = Pages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id' => SORT_DESC]],
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'updated_at' => $this->updated_at,
            'is_active' => $this->is_active,
            'add_to_mainpage' => $this->add_to_mainpage
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])->andFilterWhere(['like', 'created_at', $this->created_at]);

        return $dataProvider;
    }
}