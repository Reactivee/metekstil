<?php

namespace common\models;

use common\models\AboutIn;
use yii\base\Model;
use yii\data\ActiveDataProvider;


/**
 * AboutInSearch represents the model behind the search form of `common\models\AboutIn`.
 */
class AboutInSearch extends AboutIn
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_en', 'title_ru', 'title_uz', 'title_sub_uz', 'title_sub_ru', 'title_sub_en', 'text_sub_uz', 'text_sub_ru', 'text_sub_en', 'text_uz', 'text_en', 'text_ru', 'video', 'img', 'img_2', 'number_1', 'number_2'], 'safe'],
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
        $query = AboutIn::find();

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
        ]);

        $query->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_sub_uz', $this->title_sub_uz])
            ->andFilterWhere(['like', 'title_sub_ru', $this->title_sub_ru])
            ->andFilterWhere(['like', 'title_sub_en', $this->title_sub_en])
            ->andFilterWhere(['like', 'text_sub_uz', $this->text_sub_uz])
            ->andFilterWhere(['like', 'text_sub_ru', $this->text_sub_ru])
            ->andFilterWhere(['like', 'text_sub_en', $this->text_sub_en])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_en', $this->text_en])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'img_2', $this->img_2])
            ->andFilterWhere(['like', 'number_1', $this->number_1])
            ->andFilterWhere(['like', 'number_2', $this->number_2]);

        return $dataProvider;
    }

    public function searchSet($params)
    {
        $query = AboutSet::find();

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
        ]);


        return $dataProvider;
    }
}
