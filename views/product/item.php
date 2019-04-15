<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="<?=Yii::getAlias('@web');?>/images/product-details/1.jpg" alt="" />
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <h2><?=$item['title'];?></h2>
                            <span>
									<a type="button" class="btn btn-fefault cart">
										Add to cart
									</a>
								</span>
                            <p><b>Count:</b><?=$item['count'];?></p>
                            <p><b>Description:</b> <br><?=$item['description'];?></p>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->




            </div>
        </div>
    </div>
</section>
