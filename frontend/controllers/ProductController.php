<?php  
namespace frontend\controllers;

use yii\web\Controller;
use backend\models\Products;

/**
 * 
 */
class ProductController extends Controller
{
	
	public function actionIndex ()
	{
		# code...
	}

	public function actionView ($slug){
		$product = Products::findOne(['slug' => $slug]);

		// print_r($product);die;
		return $this->render('view', [
			'product' => $product
		]);
	}
}
?>
