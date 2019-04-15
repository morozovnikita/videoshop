<?php

use yii\db\Migration;

/**
 * Class m190415_131836_order
 */
class m190415_131836_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%order}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->string(),
            'product_id' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190415_131836_order cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190415_131836_order cannot be reverted.\n";

        return false;
    }
    */
}
