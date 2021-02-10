<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cards}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%users}}`
 */
class m210210_004607_create_cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cards}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'body' => $this->text()(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),
            'created_by' => $this->integer(11),
        ]);

        // creates index for column `created_by`
        $this->createIndex(
            '{{%idx-cards-created_by}}',
            '{{%cards}}',
            'created_by'
        );

        // add foreign key for table `{{%users}}`
        $this->addForeignKey(
            '{{%fk-cards-created_by}}',
            '{{%cards}}',
            'created_by',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%users}}`
        $this->dropForeignKey(
            '{{%fk-cards-created_by}}',
            '{{%cards}}'
        );

        // drops index for column `created_by`
        $this->dropIndex(
            '{{%idx-cards-created_by}}',
            '{{%cards}}'
        );

        $this->dropTable('{{%cards}}');
    }
}
