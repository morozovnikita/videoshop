<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Category;

class CategoryController extends Controller
{
    public function actionView($id)
    {
        $model = new Category();
        $categories = $model->getListCategories();
        $items = $model->getListItemById($id);
        return $this->render('view',[
            'data' => $categories,
            'products' => $items
        ]);
    }
}