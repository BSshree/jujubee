<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "careerform".
 *
 * @property int $careerform_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $know_by
 * @property string $message
 * @property string $resume
 * @property int $created_at
 * @property int $updated_at
 */
class CareerForm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public $designation;
    public static function tableName()
    {
        return 'careerform';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            //[['name', 'phone', 'email', 'know_by', 'message'], 'required'],
            [['name', 'phone', 'email', 'know_by', 'message'], 'string'],
            ['email', 'email'],
            [['resume'], 'file', 'extensions' => 'pdf, doc'],
            [['created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'careerform_id' => 'Careerform ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'know_by' => 'Know By',
            'message' => 'Message',
            'resume' => 'Resume',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
