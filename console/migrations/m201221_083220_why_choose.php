<?php

use yii\db\Migration;

/**
 * Class m201221_083220_why_choose
 */
class m201221_083220_why_choose extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
         $this->createTable('why_choose', [
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
        $this->dropTable('why_choose');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201221_083220_why_choose cannot be reverted.\n";

        return false;
    }
    */
}
