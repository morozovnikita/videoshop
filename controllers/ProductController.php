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

        if(empty($data)){
            return $this->renderFile('@app/views/404.html');
        }
        return $this->render('item',[
            'item' => $data
        ]);
    }


    public function actionAdd($id)
    {
        session_start();
        $_SESSION['products'][$id] = $id;
        return $this->redirect('/');
    }

    public function actionDelete($id)
    {
        session_start();
        if($_SESSION['products'][$id] == $id) {
            unset($_SESSION['products'][$id]);
            return $this->actionCart($id);
        } else {
            return $this->renderFile('@app/views/404.html');
        }

    }

    public function actionCart()
    {
        session_start();

        if(!empty($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $product) {
                $itemsInCard[$product] = Product::getInfoById($product);
            }
        }

        return $this->render('cart',[
            'items' => $itemsInCard
        ]);
    }


}