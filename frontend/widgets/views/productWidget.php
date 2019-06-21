<?php  
use yii\helpers\Html;
?>

<div class="product">
    <div class="product-img">
        <div class="product-label">
            <span class="sale">-30%</span>
            <span class="new">NEW</span>
        </div>
    </div>
    <div class="product-body">
        <h3 class="product-name">
            <?php echo Html::a($item->name, ['/product/view', 'slug'=>$item['slug']]); ?>
            <!-- <a href="#"><?php echo $item->name ?></a> -->
        </h3>
        <h4 class="product-price"><?php echo number_format($item->price)?> đ</h4>
        <div class="product-rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
        <div class="product-btns">
            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to
            wishlist</span></button>
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to
            compare</span></button>
            <button class="quick-view"><a href="product.html"><i class="fa fa-eye"></i></a><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
    </div>
</div>