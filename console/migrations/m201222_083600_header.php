<?php

use yii\db\Migration;

/**
 * Class m201222_083600_header
 */
class m201222_083600_header extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
         $this->createTable('header', [
            'id' => $this->primaryKey(),
            'quote' => $this->string()->notNull(),
            'content' => $this->text(),
            'logo' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('header');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201222_083600_header cannot be reverted.\n";

        return false;
    }
    */
}
