<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_profile}}".
 *
 * @property int $pk_profile_id
 * @property int $fk_profile_user
 * @property string $profile_photo
 * @property string $profile_expertise_overview
 * @property string $profile_featured_work
 *
 * @property TblUser $fkProfileUser
 */
class TblDeduction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_profile}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_profile_user'], 'required'],
            [['fk_profile_user'], 'integer'],
            [['profile_expertise_overview', 'profile_featured_work'], 'string'],
            [['profile_photo'], 'string', 'max' => 20],
            [['fk_profile_user'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::className(), 'targetAttribute' => ['fk_profile_user' => 'pk_user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_profile_id' => Yii::t('app', 'Pk Profile ID'),
            'fk_profile_user' => Yii::t('app', 'Fk Profile User'),
            'profile_photo' => Yii::t('app', 'Profile Photo'),
            'profile_expertise_overview' => Yii::t('app', 'Profile Expertise Overview'),
            'profile_featured_work' => Yii::t('app', 'Profile Featured Work'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkProfileUser()
    {
        return $this->hasOne(TblUser::className(), ['pk_user_id' => 'fk_profile_user']);
    }

    /**
     * {@inheritdoc}
     * @return TblDeductionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblDeductionQuery(get_called_class());
    }
}
