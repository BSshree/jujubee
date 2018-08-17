<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contactus`.
 */
class m180817_073148_create_contactus_table extends Migration {

    /**
     * {@inheritdoc}
     */
      const CONTACTUS_TABLE = '{{%contactus}}';
      
    public function safeUp() {
        $this->createTable(self::CONTACTUS_TABLE, [
            'contactus_id' => $this->primaryKey(),
            'name' => $this->text(700)->notNull(),
            'phone' => $this->text(970)->Null(),
            'email' => $this->text(55)->Null(),
            'message' => $this->text(970)->Null(),
            'created_at' => $this->integer(11)->defaultValue(0),
            'updated_at' => $this->integer(11)->defaultValue(0),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown() {
        $this->dropTable(self::CONTACTUS_TABLE);
    }

}
