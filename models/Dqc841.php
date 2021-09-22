<?php

namespace app\models;
use app\models\Dqc84;
use Yii;

/**
 * This is the model class for table "dqc841".
 *
 * @property int $id
 * @property string $PARTS_NO
 * @property int $UNT_USG
 * @property string $DESCRIPTION
 * @property string|null $REF_DESIGNATOR
 * @property string $UPDATE_DT
 * @property int $FAT_PART_NO
 *
 * @property Dqc84 $fATPARTNO
 */
class Dqc841 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dqc841';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PARTS_NO', 'UNT_USG', 'DESCRIPTION', 'FAT_PART_NO'], 'required'],
            [['UNT_USG', 'FAT_PART_NO'], 'integer'],
            [['DESCRIPTION', 'REF_DESIGNATOR'], 'string'],
            [['UPDATE_DT'], 'safe'],
            [['PARTS_NO'], 'string', 'max' => 15],
            [['FAT_PART_NO'], 'exist', 'skipOnError' => true, 'targetClass' => Dqc84::className(), 'targetAttribute' => ['FAT_PART_NO' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'PARTS_NO' => 'Parts  No',
            'UNT_USG' => 'Unt  Usg',
            'DESCRIPTION' => 'Description',
            'REF_DESIGNATOR' => 'Ref  Designator',
            'UPDATE_DT' => 'Update  Dt',
            'FAT_PART_NO' => 'Fat  Part  No',
        ];
    }

    /**
     * Gets query for [[FATPARTNO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDqc84()
    {
        return $this->hasOne(Dqc84::className(), ['ID' => 'FAT_PART_NO']);
    }
}
