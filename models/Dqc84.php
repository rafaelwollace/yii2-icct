<?php

namespace app\models;
use app\models\Dqcmodel;

use Yii;

/**
 * This is the model class for table "dqc84".
 *
 * @property int $id
 * @property int $MODEL
 * @property string $FAT_PART_NO
 * @property int $TOTAL_LOCATION
 * @property string $CREATE_DT
 * @property string $UPDATE_DT
 *
 * @property Dqc841[] $dqc841s
 * @property Dqcmodel $mODEL
 */
class Dqc84 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dqc84';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MODEL', 'FAT_PART_NO', 'TOTAL_LOCATION'], 'required'],
            [['MODEL', 'TOTAL_LOCATION'], 'integer'],
            [['CREATE_DT', 'UPDATE_DT'], 'safe'],
            [['FAT_PART_NO'], 'string', 'max' => 15],
            [['FAT_PART_NO'], 'unique'],
            [['MODEL'], 'exist', 'skipOnError' => true, 'targetClass' => Dqcmodel::className(), 'targetAttribute' => ['MODEL' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'MODEL' => 'Model',
            'FAT_PART_NO' => 'Fat  Part  No',
            'TOTAL_LOCATION' => 'Total  Location',
            'CREATE_DT' => 'Create  Dt',
            'UPDATE_DT' => 'Update  Dt',
        ];
    }

    /**
     * Gets query for [[Dqc841s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDqc841s()
    {
        return $this->hasMany(Dqc841::className(), ['FAT_PART_NO' => 'ID']);
    }

    /**
     * Gets query for [[MODEL]].
     *
     * @return \yii\db\ActiveQuery
     */

     
    public function getDqcmodel()
    {
        return $this->hasOne(Dqcmodel::className(), ['ID' => 'MODEL']);
    }
}
