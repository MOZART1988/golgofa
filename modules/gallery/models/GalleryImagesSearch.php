<?php

namespace app\modules\gallery\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\gallery\models\GalleryImages;

/**
 * GalleryImagesSearch represents the model behind the search form about `app\modules\gallery\models\GalleryImages`.
 */
class GalleryImagesSearch extends GalleryImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'gallery_id', 'position', 'is_active'], 'integer'],
            [['title', 'description', 'created_at', 'update_at'], 'safe'],
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
        $query = GalleryImages::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'gallery_id' => $this->gallery_id,
            'position' => $this->position,
            'is_active' => $this->is_active,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
