<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "dayoff".
 *
 * @property integer $id
 * @property string $day_off
 * @property integer $morning
 * @property integer $afternoon
 * @property integer $employeeId
 * @property string $createtime
 */
class Dayoff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dayoff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day_off', 'morning', 'afternoon', 'employeeId', 'createtime'], 'required'],
            [['day_off', 'createtime'], 'safe'],
            [['morning', 'afternoon', 'employeeId'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'day_off' => Yii::t('app', 'Day Off'),
            'morning' => Yii::t('app', 'Morning'),
            'afternoon' => Yii::t('app', 'Afternoon'),
            'employeeId' => Yii::t('app', 'Employee ID'),
            'createtime' => Yii::t('app', 'Createtime'),
        ];
    }
}
