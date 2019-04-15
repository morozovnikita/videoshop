<?php


namespace app\controllers;


use app\models\Product;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Request;

class ProductController extends Controller
{
    public function actionView($id)
    {
        $data = Product::getInfoById($id);


        return $this->render('item',[
            'item' => $data
        ]);
    }


    public function actionAdd($id)
    {
        session_start();
        $_SESSION['products'][$id] = $id;
       return $this->actionView($id);
    }

    public function actionCart()
    {
        session_start();

        foreach ($_SESSION['products'] as $product){
            $itemsInCard[$product] = Product::getInfoById($product);
        }

        return $this->render('cart',[
            'items' => $itemsInCard
        ]);
    }
}