<?php

namespace backend\models\users;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\users\Referral;

/**
 * ReferralSearch represents the model behind the search form of `backend\models\users\Referral`.
 */
class ReferralSearch extends Referral
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ref_code', 'user', 'ref_user_id'], 'safe'],
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
        $query = Referral::find();

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
        $query->joinWith(['users']);
        $query->joinWith(['user_Ref']);

        // grid filtering conditions
        $query->andFilterWhere([
            'referral.id' => $this->id,
//            'user' => $this->user,
//            'ref_user_id' => $this->ref_user_id,
        ]);

        $query->andFilterWhere(['like', 'referral.ref_code', $this->ref_code]);
        $query->andFilterWhere(['like', 'users.first_name', $this->user]);
        $query->andFilterWhere(['like', 'users.first_name', $this->ref_user_id]);

        return $dataProvider;
    }
}
