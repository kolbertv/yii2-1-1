<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m181021_192531_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->char(50)->notNull(),
            'password' => $this->char(20)->notNull(),
            'authkey' => $this->string(),
            'accessToken' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
