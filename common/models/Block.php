<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blocks".
 *
 * @property int $block_id
 * @property string $block_title
 * @property string $block_content
 * @property int $block_status
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blocks';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['block_title'], 'required'],
            [['block_title'], 'unique'],
            [['block_status'], 'string'],
            [['block_title'], 'string', 'max' => 464],
            [['block_content'], 'string', 'max' => 56464],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'block_id' => 'Block ID',
            'block_title' => 'Title',
            'block_content' => 'Content',
            'block_status' => 'Status',
        ];
    }
}
