<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tasks`.
 */
class m181021_174106_create_tasks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tasks', [
            'id' => $this->primaryKey(),
            'title' => $this->char(50)->notNull(),
            'description' => $this->string(),
            'creator_id' => $this->integer(),
            'updater_id' => $this->integer(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tasks');
    }
}
