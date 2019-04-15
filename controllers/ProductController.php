<?php


namespace app\controllers;


use app\models\Product;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionView($id)
    {
        $data = Product::getInfoById($id);
        return $this->render('item',[
            'item' => $data
        ]);
    }
}