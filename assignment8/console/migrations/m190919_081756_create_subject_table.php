<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subject}}`.
 */
class m190919_081756_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'deteil' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subject}}');
    }
}
