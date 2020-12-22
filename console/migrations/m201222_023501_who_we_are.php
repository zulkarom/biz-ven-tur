<?php

use yii\db\Migration;

/**
 * Class m201222_023501_who_we_are
 */
class m201222_023501_who_we_are extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
         $this->createTable('who_we_are', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'bttn_content' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('who_we_are');
    }
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201222_023501_who_we_are cannot be reverted.\n";

        return false;
    }
    */
}
