<?php

/* @var $this yii\web\View */


use yii\helpers\Url;
$this->title = 'qwe';
?>


    <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Категории</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <? foreach ($data as $category):?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="<?=Url::toRoute(['/category/view','id' => $category['id']],false);?>"><?=$category['title'];?></a></h4>
                                </div>
                            </div>
                        <? endforeach;?>
                    </div><!--/category-products-->


                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>
                    <? foreach($products as $product):?>
                    <div class="col-sm-4">

                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="<?=Yii::getAlias('@web');?>/images//photo.jpg" alt="" />
                                    <h2><?=$product['title'];?></h2>
                                    <p><?=mb_strimwidth($product['description'],0 ,200  ).'...';?></p>
                                    <a href="<?=Url::toRoute(['/product/view','id' => $product['id']],false);?>"  class="btn btn-default add-to-cart">Узнать больше</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <? endforeach;?>



                </div><!--features_items-->


            </div>
        </div>
    </div>
    </section><?php
