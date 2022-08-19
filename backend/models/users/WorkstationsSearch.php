<?php

namespace backend\models\users;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\users\Workstations;

/**
 * WorkstationsSearch represents the model behind the search form of `backend\models\users\Workstations`.
 */
class WorkstationsSearch extends Workstations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'director_user_id', 'created_at', 'updated_at'], 'integer'],
            [['description', 'title', 'label'], 'safe'],
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
        $query = Workstations::find();

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
            'director_user_id' => $this->director_user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'label', $this->label]);

        return $dataProvider;
    }
}
