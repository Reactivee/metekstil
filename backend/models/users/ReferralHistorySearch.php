<?php

namespace backend\models\users;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\users\ReferralHistory;

/**
 * ReferralHistorySearch represents the model behind the search form of `backend\models\users\ReferralHistory`.
 */
class ReferralHistorySearch extends ReferralHistory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user', 'ref_user', 'cashback_id', 'created_at', 'updated_at'], 'integer'],
            [['percent'], 'number'],
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
        $query = ReferralHistory::find()->orderBy(['id'=>SORT_DESC]);

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
            'user' => $this->user,
            'ref_user' => $this->ref_user,
            'cashback_id' => $this->cashback_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'percent' => $this->percent,
        ]);

        return $dataProvider;
    }
}
