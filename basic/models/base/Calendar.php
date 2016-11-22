<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "calendar".
 *
 * @property integer $id
 * @property string $startDate
 * @property string $endDate
 * @property string $schedule
 * @property integer $isWorking
 * @property integer $employeeId
 */
class Calendar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'calendar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['startDate', 'endDate'], 'safe'],
            [['schedule', 'isWorking', 'employeeId'], 'required'],
            [['isWorking', 'employeeId'], 'integer'],
            [['schedule'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'startDate' => Yii::t('app', 'Start Date'),
            'endDate' => Yii::t('app', 'End Date'),
            'schedule' => Yii::t('app', 'Schedule'),
            'isWorking' => Yii::t('app', 'Is Working'),
            'employeeId' => Yii::t('app', 'Employee ID'),
        ];
    }
}
