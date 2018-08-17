<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contactus".
 *
 * @property int $contactus_id
 * @property string $name
 * @property string $phone
 * @property string $message
 * @property int $created_at
 * @property int $updated_at
 */
class Contactus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactus';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','phone','message','email'], 'required'],
            [['name', 'phone', 'message'], 'string'],
            ['email', 'email'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'contactus_id' => 'Contactus ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'message' => 'Message',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
