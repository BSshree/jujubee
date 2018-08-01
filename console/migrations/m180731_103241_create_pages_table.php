<?php

use yii\db\Migration;

/**
 * Handles the creation of table `pages`.
 */
class m180731_103241_create_pages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   const PAGES_TABLE = '{{%pages}}';
    public function safeUp() {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable(self::PAGES_TABLE, [
            'page_id' => $this->primaryKey(),
            'title' => $this->string(464)->Null(),
            'slug' => $this->string(5564)->Null(),
            'published_on' => $this->string(55)->Null(),
            'status' => $this->string(55)->Null(),
            'created_at' => $this->string(55)->Null(),
            'updated_at' => $this->string(55)->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable(self::PAGES_TABLE);
    }
}
