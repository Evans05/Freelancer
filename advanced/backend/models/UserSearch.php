<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tbluser;

/**
 * UserSearch represents the model behind the search form of `app\models\tbluser`.
 */
class UserSearch extends tbluser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_user_id'], 'integer'],
            [['user_id_number', 'user_full_name', 'user_email', 'user_phone', 'user_county', 'user_gender', 'user_date_of_birth', 'user_balance', 'user_username', 'user_password'], 'safe'],
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
        $query = tbluser::find();

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
            'pk_user_id' => $this->pk_user_id,
        ]);

        $query->andFilterWhere(['like', 'user_id_number', $this->user_id_number])
            ->andFilterWhere(['like', 'user_full_name', $this->user_full_name])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'user_phone', $this->user_phone])
            ->andFilterWhere(['like', 'user_county', $this->user_county])
            ->andFilterWhere(['like', 'user_gender', $this->user_gender])
            ->andFilterWhere(['like', 'user_date_of_birth', $this->user_date_of_birth])
            ->andFilterWhere(['like', 'user_balance', $this->user_balance])
            ->andFilterWhere(['like', 'user_username', $this->user_username])
            ->andFilterWhere(['like', 'user_password', $this->user_password]);

        return $dataProvider;
    }
}
