<?php  
namespace frontend\widgets;

use yii\base\Widget;
use yii\helpers\Html;

class productWidget extends Widget
{
	public $item;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        return $this->render('productWidget', ['item' => $this->item]);
    }
}
?>