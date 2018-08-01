<?php

use yii\db\Migration;

/**
 * Handles the creation of table `clients`.
 */
class m180731_103411_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
   const CLIENTS_TABLE = '{{%clients}}';
    public function safeUp() {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable(self::CLIENTS_TABLE, [
            'client_id' => $this->primaryKey(),
            'title' => $this->string(464)->Null(),
            'slug' => $this->string(5564)->Null(),
            'desc' => $this->string(55)->Null(),
            'thumbnail' => $this->string(55)->Null(),
            'created_at' => $this->string(55)->Null(),
            'updated_at' => $this->string(55)->Null(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable(self::CLIENTS_TABLE);
    }
}
