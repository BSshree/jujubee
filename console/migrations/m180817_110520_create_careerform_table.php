<?php

use yii\db\Migration;

/**
 * Handles the creation of table `careerform`.
 */
class m180817_110520_create_careerform_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    const CAREERFORM_TABLE= '{{%careerform}}';
    public function safeUp()                                                      
    {
        $this->createTable(self::CAREERFORM_TABLE, [
            'careerform_id' => $this->primaryKey(),
             'name' => $this->text(70)->notNull(),
            'phone' => $this->text(25)->Null(),
            'email' => $this->text(55)->Null(),
            'know_by' => $this->text(55)->Null(),
            'message' => $this->text(970)->Null(),
            'resume' => $this->text(70)->Null(),
            'created_at' => $this->integer(11)->defaultValue(0),
            'updated_at' => $this->integer(11)->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::CAREERFORM_TABLE);
    }
}
