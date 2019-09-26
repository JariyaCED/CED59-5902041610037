<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%update_subject}}`.
 */
class m190926_072903_create_update_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('subject', 'created_at', $this->integer());
        $this->addColumn('subject', 'created_by', $this->integer());
        $this->addColumn('subject', 'updated_at', $this->integer());
        $this->addColumn('subject', 'updated_by', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%update_subject}}');
    }
}
