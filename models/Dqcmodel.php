<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dqcmodel".
 *
 * @property int $id
 * @property string $MODEL
 *
 * @property Dqc84[] $dqc84s
 */
class Dqcmodel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dqcmodel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MODEL'], 'required'],
            [['MODEL'], 'string', 'max' => 10],
            [['MODEL'], 'unique'],
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
        ];
    }

    /**
     * Gets query for [[Dqc84s]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDqc84s()
    {
        return $this->hasMany(Dqc84::className(), ['MODEL' => 'ID']);
    }
}
