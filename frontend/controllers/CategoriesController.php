<?php  
namespace frontend\controllers;

use yii\web\Controller;
use backend\models\Products;
use backend\models\Categories;

/**
 * 
 */
class CategoriesController extends Controller
{
	
	public function actionIndex ()
	{
		# code...
	}

	public function actionSmartphones (){
		$products = Products::find(['type' => 1])->all();

		return $this->render('smartphones', [
			'products' => $products
		]);
	}

	public function actionView ($idCat){

		$products = new Products();
		$products = $products->getProductByCatId($idCat);

		$category = Categories::findOne(['id' => $idCat]);

		$categories = Categories::find()->all();
		return $this->render('view', [
			'products' => $products,
			'category' => $category,
			'categories' => $categories
		]);
	}
}
?>
