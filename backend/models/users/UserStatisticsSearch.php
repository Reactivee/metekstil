<?php

namespace backend\models\users;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\users\UserStatistics;

/**
 * UserStatisticsSearch represents the model behind the search form of `backend\models\users\UserStatistics`.
 */
class UserStatisticsSearch extends UserStatistics
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'success_orders', 'refund_orders'], 'integer'],
            [['total_price'], 'number'],
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
        $query = UserStatistics::find();

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
            'user_id' => $this->user_id,
            'success_orders' => $this->success_orders,
            'refund_orders' => $this->refund_orders,
            'total_price' => $this->total_price,
        ]);

        return $dataProvider;
    }
}
