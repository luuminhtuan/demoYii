<?php  

use yii\helpers\Html;
use backend\models\Categories;

?>
<?php $categories = Categories::find()->all(); ?>
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li><?php echo Html::a('Home', ['site/index']) ?></li>

                <?php foreach($categories as $item) : ?>
                    <li><?php echo Html::a($item->name, ['categories/view', 'idCat' => $item->id]) ?></li>
                <?php endforeach; ?>
                <li><?php echo Html::a('Contact', ['/lien-he']) ?></li>
                <li><?php echo Html::a('About', ['/gioi-thieu']) ?></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>