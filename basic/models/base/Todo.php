<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property string $id
 * @property string $todo_name
 * @property integer $status
 * @property string $created_date
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['todo_name', 'status', 'created_date'], 'required'],
            [['status'], 'integer'],
            [['created_date'], 'safe'],
            [['todo_name'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'todo_name' => Yii::t('app', 'Todo Name'),
            'status' => Yii::t('app', 'Status'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }
}
