<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblSupportAdmin;

/**
 * SupportAdminSearch represents the model behind the search form of `app\models\tblSupportAdmin`.
 */
class SupportAdminSearch extends tblSupportAdmin
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_support_admin_id'], 'integer'],
            [['support_admin_fname', 'support_admin_email', 'support_admin_phone', 'support_admin_username', 'support_admin_password'], 'safe'],
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
        $query = tblSupportAdmin::find();

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
            'pk_support_admin_id' => $this->pk_support_admin_id,
        ]);

        $query->andFilterWhere(['like', 'support_admin_fname', $this->support_admin_fname])
            ->andFilterWhere(['like', 'support_admin_email', $this->support_admin_email])
            ->andFilterWhere(['like', 'support_admin_phone', $this->support_admin_phone])
            ->andFilterWhere(['like', 'support_admin_username', $this->support_admin_username])
            ->andFilterWhere(['like', 'support_admin_password', $this->support_admin_password]);

        return $dataProvider;
    }
}
