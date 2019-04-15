<?php


namespace app\models;


use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Order extends ActiveRecord
{

    /**
     * Save order and update count
     * @param $items array
     * @return bool|string
     * @throws \yii\db\Exception
     */
    public function finish($items)
    {
        $rand = substr(md5(microtime()),rand(0,26),7);
        $command = Yii::$app->db->createCommand();
        foreach ($items as $item){
            $command->insert('order', [
                'id' => null,
                'order_id'=>$rand,
                'product_id'=>$item['id']
            ])->execute();
            $product = Product::findOne($item['id']);
            $product->updateCounters(['count' => -1]);
            unset($_SESSION['products'][$item['id']]);
        }

        return $rand;
    }

}