<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblDeduction;

/**
 * DeductionSearch represents the model behind the search form of `app\models\tblDeduction`.
 */
class DeductionSearch extends tblDeduction
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_profile_id', 'fk_profile_user'], 'integer'],
            [['profile_photo', 'profile_expertise_overview', 'profile_featured_work'], 'safe'],
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
        $query = tblDeduction::find();

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
            'pk_profile_id' => $this->pk_profile_id,
            'fk_profile_user' => $this->fk_profile_user,
        ]);

        $query->andFilterWhere(['like', 'profile_photo', $this->profile_photo])
            ->andFilterWhere(['like', 'profile_expertise_overview', $this->profile_expertise_overview])
            ->andFilterWhere(['like', 'profile_featured_work', $this->profile_featured_work]);

        return $dataProvider;
    }
}
