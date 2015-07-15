<?php

use yii\db\Schema;
use yii\db\Migration;

class m150715_082950_nav extends Migration
{
    const tlb_name = '{{%nav}}';
    
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(self::tlb_name, [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . '(32) NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'flag' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 1',
            'href' => Schema::TYPE_STRING,
            'user' => Schema::TYPE_STRING . '(20) NOT NULL',
            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'sort' => Schema::TYPE_INTEGER . ' NOT NULL DEFAULT 0 ',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
        
    }

    public function safeDown()
    {
        $this->dropTable(self::tlb_name);
    }
}
