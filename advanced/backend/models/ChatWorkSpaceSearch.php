<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblChatWorkSpace;

/**
 * ChatWorkSpaceSearch represents the model behind the search form of `app\models\tblChatWorkSpace`.
 */
class ChatWorkSpaceSearch extends tblChatWorkSpace
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pk_wksp_chat_id', 'fk_wksp_chat_workspace', 'fk_wksp_chat_employer', 'fk_wksp_chat_user'], 'integer'],
            [['wksp_chat_message', 'wksp_chat_time_sent', 'wksp_chat_sender', 'wksp_chat_status', 'wksp_chat_time_read'], 'safe'],
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
        $query = tblChatWorkSpace::find();

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
            'pk_wksp_chat_id' => $this->pk_wksp_chat_id,
            'fk_wksp_chat_workspace' => $this->fk_wksp_chat_workspace,
            'fk_wksp_chat_employer' => $this->fk_wksp_chat_employer,
            'fk_wksp_chat_user' => $this->fk_wksp_chat_user,
        ]);

        $query->andFilterWhere(['like', 'wksp_chat_message', $this->wksp_chat_message])
            ->andFilterWhere(['like', 'wksp_chat_time_sent', $this->wksp_chat_time_sent])
            ->andFilterWhere(['like', 'wksp_chat_sender', $this->wksp_chat_sender])
            ->andFilterWhere(['like', 'wksp_chat_status', $this->wksp_chat_status])
            ->andFilterWhere(['like', 'wksp_chat_time_read', $this->wksp_chat_time_read]);

        return $dataProvider;
    }
}
