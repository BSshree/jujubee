<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $client_id
 * @property string $title
 * @property string $slug
 * @property string $desc
 * @property string $thumbnail
 * @property string $created_at
 * @property string $updated_at
 */
class Client extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'clients';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['title', 'slug', 'desc'], 'required'],
                [['title','slug'], 'string', 'max' => 464],
                [['thumbnail'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
                [['desc'], 'string', 'max' => 6554],
                [['created_at', 'updated_at'], 'string', 'max' => 85],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'client_id' => 'Client ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'desc' => 'Desc',
            'thumbnail' => 'Thumbnail',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
