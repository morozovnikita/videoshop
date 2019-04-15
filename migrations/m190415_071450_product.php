<?php

use yii\db\Migration;

/**
 * Class m190415_071450_product
 */
class m190415_071450_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'count' => $this->integer(),
            'date' => $this->date(),
            'image' => $this->string(),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190415_071450_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_071450_product cannot be reverted.\n";

        return false;
    }
    */
}
