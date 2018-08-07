<?php

namespace frontend\widgets; // your App class

use yii\base\Widget;
use yii\helpers\Html;

class Blockcode extends Widget {

    public $title; // this parameter will be overwritten by 8 

    public function run() {
     $block =   \common\models\Block::findOne(['block_title'=> $this->title]);
     if($block){
         return $block->block_content;
     }
    }

}


?>
