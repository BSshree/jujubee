<?php

use yii\db\Migration;

/**
 * Handles the creation of table `blocks`.
 */
class m180803_101152_create_blocks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    const BLOCKS_TABLE = '{{%blocks}}';
    public function safeUp()
    {
       $this->createTable(self::BLOCKS_TABLE, [
            'block_id' => $this->primaryKey(),
             'block_title' => $this->string(464)->Null(),
             'block_content' => $this->string(56464)->Null(),
             'block_status' => $this->string(33)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::BLOCKS_TABLE);
    }
}
