<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblEmployerCompany;

/**
 * EmployerCompanySearch represents the model behind the search form of `app\models\tblEmployerCompany`.
 */
class EmployerCompanySearch extends tblEmployerCompany
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_company_id', 'fk_company_employer'], 'integer'],
            [['company_name', 'employer_industry'], 'safe'],
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
        $query = tblEmployerCompany::find();

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
            'pk_company_id' => $this->pk_company_id,
            'fk_company_employer' => $this->fk_company_employer,
        ]);

        $query->andFilterWhere(['like', 'company_name', $this->company_name])
            ->andFilterWhere(['like', 'employer_industry', $this->employer_industry]);

        return $dataProvider;
    }
}
