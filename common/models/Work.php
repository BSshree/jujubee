<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "works".
 *
 * @property int $work_id
 * @property string $category
 * @property string $title
 * @property string $slug
 * @property string $project_date
 * @property string $project_type
 * @property string $link
 * @property string $thumbnail
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'works';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'title'], 'string', 'max' => 185],
            [['slug'], 'string', 'max' => 64],
            [['thumbnail','project_image'], 'file', 'extensions' => 'png, jpg, jpeg'],
            [['project_date', 'project_type'], 'string', 'max' => 5564],
            [['link'], 'string', 'max' => 564],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'work_id' => 'Work ID',
            'category' => 'Category',
            'title' => 'Title',
            'slug' => 'Slug',
            'project_date' => 'Project Date',
            'project_type' => 'Project Type',
            'link' => 'Link',
            'thumbnail' => 'Thumbnail',
            'project_image' => 'Project Image',
        ];
    }
}
