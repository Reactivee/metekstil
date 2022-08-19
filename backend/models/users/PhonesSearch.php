<?php

namespace backend\models\users;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\users\Phones;

/**
 * PhonesSearch represents the model behind the search form of `backend\models\users\Phones`.
 */
class PhonesSearch extends Phones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['phones', 'user_id'], 'safe'],
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
        $query = Phones::find()
            ->orderBy(['id' => SORT_DESC]);

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
        $query->joinWith(['user']);
        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,

        ]);

        $query->andFilterWhere(['like', 'phones.phones', $this->phones]);
        $query->andFilterWhere(['or',['like', 'users.first_name', $this->user_id],['like', 'users.second_name', $this->user_id]]);

        return $dataProvider;
    }
}
