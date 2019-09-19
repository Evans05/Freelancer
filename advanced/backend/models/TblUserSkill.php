<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_user_skill}}".
 *
 * @property int $pk_skill_id
 * @property int $fk_skill_user_id
 * @property string $user_skill_name
 *
 * @property TblUser $fkSkillUser
 */
class TblUserSkill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_user_skill}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_skill_user_id', 'user_skill_name'], 'required'],
            [['fk_skill_user_id'], 'integer'],
            [['user_skill_name'], 'string'],
            [['fk_skill_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::className(), 'targetAttribute' => ['fk_skill_user_id' => 'pk_user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_skill_id' => Yii::t('app', 'Pk Skill ID'),
            'fk_skill_user_id' => Yii::t('app', 'Fk Skill User ID'),
            'user_skill_name' => Yii::t('app', 'User Skill Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkSkillUser()
    {
        return $this->hasOne(TblUser::className(), ['pk_user_id' => 'fk_skill_user_id']);
    }

    /**
     * {@inheritdoc}
     * @return TblUserSkillQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblUserSkillQuery(get_called_class());
    }
}
