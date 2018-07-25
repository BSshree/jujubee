<?php

use yii\db\Migration;

/**
 * Handles the creation of table `seo`.
 */
class m180724_084659_create_seo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
     const SEO_TABLE = '{{%seo}}';
     
    public function safeUp()
    {
          $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable(self::SEO_TABLE, [
            'seo_id' => $this->primaryKey(),
            'url_path' => $this->string(464)->Null(),
            'meta_values' => $this->string(5564)->Null(),
            
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::SEO_TABLE);
    }
}
