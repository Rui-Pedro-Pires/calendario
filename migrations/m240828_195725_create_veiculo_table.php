<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%veiculo}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%cliente}}`
 */
class m240828_195725_create_veiculo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%veiculo}}', [
            'id' => $this->primaryKey(),
            'cliente_id' => $this->integer(),
            'matricula' => $this->string()->notNull(),
            'marca' => $this->string()->notNull(),
            'modelo' => $this->string()->notNull(),
            'km' => $this->integer()->notNull(),
            'ano' => $this->integer()->notNull(),
        ]);

        // creates index for column `cliente_id`
        $this->createIndex(
            '{{%idx-veiculo-cliente_id}}',
            '{{%veiculo}}',
            'cliente_id'
        );

        // add foreign key for table `{{%cliente}}`
        $this->addForeignKey(
            '{{%fk-veiculo-cliente_id}}',
            '{{%veiculo}}',
            'cliente_id',
            '{{%cliente}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%cliente}}`
        $this->dropForeignKey(
            '{{%fk-veiculo-cliente_id}}',
            '{{%veiculo}}'
        );

        // drops index for column `cliente_id`
        $this->dropIndex(
            '{{%idx-veiculo-cliente_id}}',
            '{{%veiculo}}'
        );

        $this->dropTable('{{%veiculo}}');
    }
}
