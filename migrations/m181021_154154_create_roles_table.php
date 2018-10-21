<?php

use yii\db\Migration;

/**
 * Handles the creation of table `roles`.
 */
class m181021_154154_create_roles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('roles', [
            'id' => $this->primaryKey(),
            'role' => $this->char(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('roles');
    }
}
