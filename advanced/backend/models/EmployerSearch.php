<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblEmployer;

/**
 * EmployerSearch represents the model behind the search form of `app\models\tblEmployer`.
 */
class EmployerSearch extends tblEmployer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_emp_id'], 'integer'],
            [['emp_name', 'emp_email', 'emp_phone', 'emp_balance'], 'safe'],
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
        $query = tblEmployer::find();

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
            'pk_emp_id' => $this->pk_emp_id,
        ]);

        $query->andFilterWhere(['like', 'emp_name', $this->emp_name])
            ->andFilterWhere(['like', 'emp_email', $this->emp_email])
            ->andFilterWhere(['like', 'emp_phone', $this->emp_phone])
            ->andFilterWhere(['like', 'emp_balance', $this->emp_balance]);

        return $dataProvider;
    }
}
