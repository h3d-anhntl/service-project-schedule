<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $name
 * @property string $dateOfBirth
 * @property string $address
 * @property string $phoneNumber
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dateOfBirth', 'address', 'phoneNumber'], 'required'],
            [['dateOfBirth'], 'safe'],
            [['phoneNumber'], 'string'],
            [['name'], 'string', 'max' => 200],
            [['address'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'dateOfBirth' => Yii::t('app', 'Date Of Birth'),
            'address' => Yii::t('app', 'Address'),
            'phoneNumber' => Yii::t('app', 'Phone Number'),
        ];
    }
}
