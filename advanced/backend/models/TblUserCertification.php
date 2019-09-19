<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_user_certification}}".
 *
 * @property int $pk_certification_id
 * @property int $fk_certification_user_id
 * @property string $certification_name
 *
 * @property TblUser $fkCertificationUser
 */
class TblUserCertification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tbl_user_certification}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_certification_user_id', 'certification_name'], 'required'],
            [['fk_certification_user_id'], 'integer'],
            [['certification_name'], 'string', 'max' => 10],
            [['fk_certification_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::className(), 'targetAttribute' => ['fk_certification_user_id' => 'pk_user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pk_certification_id' => Yii::t('app', 'Pk Certification ID'),
            'fk_certification_user_id' => Yii::t('app', 'Fk Certification User ID'),
            'certification_name' => Yii::t('app', 'Certification Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFkCertificationUser()
    {
        return $this->hasOne(TblUser::className(), ['pk_user_id' => 'fk_certification_user_id']);
    }

    /**
     * {@inheritdoc}
     * @return TblUserCertificationQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblUserCertificationQuery(get_called_class());
    }
}
