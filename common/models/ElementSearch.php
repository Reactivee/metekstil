<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Element;

/**
 * ElementSearch represents the model behind the search form of `common\models\element`.
 */
class ElementSearch extends Element
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'created_at', 'updated_at'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'desc_en', 'desc_uz', 'desc_ru', 'img', 'slug'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Element::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'desc_en', $this->desc_en])
            ->andFilterWhere(['like', 'desc_uz', $this->desc_uz])
            ->andFilterWhere(['like', 'desc_ru', $this->desc_ru])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
