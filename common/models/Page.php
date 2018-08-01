<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $page_id
 * @property string $title
 * @property string $slug
 * @property string $published_on
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class Page extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'pages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['title', 'slug','published_on','status'], 'required'],
                [['title'], 'string', 'max' => 464],
                [['slug'], 'string', 'max' => 5564],
                [['content'], 'string', 'max' => 55564],
                [['published_on', 'status', 'created_at', 'updated_at'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'page_id' => 'Page ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'published_on' => 'Published',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
