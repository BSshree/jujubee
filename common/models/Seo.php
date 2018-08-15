<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property int $seo_id
 * @property string $url_path
 * @property string $meta_values
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $meta_title;
    public $meta_desc;
    public $meta_keyword;

    public static function tableName()
    {
        return 'seo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
           // [['url_path','meta_values'], 'required'],
            [['url_path'], 'string', 'max' => 464],
            [['meta_values'], 'string', 'max' => 5564],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'seo_id' => 'Seo ID',
            'url_path' => 'URL',
            'meta_values' => 'Meta Values',
            'meta_title' => 'Title',
            'meta_desc' => 'Description',
            'meta_keyword' => 'Keyword',
        ];
    }

    public function afterFind(){

        parent::afterFind();
        $this->meta_values = json_decode($this->meta_values, true);

        $this->meta_title = $this->meta_values['meta_title'];
        $this->meta_keyword = $this->meta_values['meta_keyword'];
        $this->meta_desc = $this->meta_values['meta_desc'];
    }

    public static function findMetaTags($url = '*')
    {
        $model = Seo::findOne(['url_path' => $url]);
        if(null === $model){
            $model = Seo::findOne(['url_path' => '*']);
        }

        return (object) $model->meta_values;
    }
}
