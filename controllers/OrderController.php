<?php


namespace app\controllers;


use app\models\Order;
use app\models\Product;
use yii\helpers\Url;
use yii\web\Controller;

class OrderController extends Controller
{

    public function actionForm()
    {
        session_start();
        if (!empty($_SESSION['products'])) {
            $model = new Product();
            foreach ($_SESSION['products'] as $item) {
                $items[$item] = $model->getInfoById($item);
            }
            $model = new Order();
            $order_id = $model->finish($items);
            if ($order_id != null) {
                return $this->render('success', [
                    'order_id' => $order_id
                ]);
            }
        } else {
           return $this->renderFile('@app/views/404.html');
        }
    }

    public function actionSuccess($order_id)
    {
        return $this->render('success', [
            'order_id' => $order_id
        ]);
    }

}