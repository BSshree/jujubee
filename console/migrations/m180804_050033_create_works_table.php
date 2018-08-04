<?php

use yii\db\Migration;

/**
 * Handles the creation of table `works`.
 */
class m180804_050033_create_works_table extends Migration {

    /**
     * {@inheritdoc}
     */
    const WORKS_TABLE = '{{%works}}';

    public function safeUp() {
        $this->createTable(self::WORKS_TABLE, [
            'work_id' => $this->primaryKey(),
            'category' => $this->string(185)->Null(),
            'title' => $this->string(185)->Null(),
            'slug' => $this->string(64)->Null(),
            'project_date' => $this->string(5564)->Null(),
            'project_type' => $this->string(5564)->Null(),
            'link' => $this->string(564)->Null(),
            'thumbnail' => $this->string(564)->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable(self::WORKS_TABLE);
    }

}
