<?php

class Academia_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "VSF (vai ser feliz)";
    }
    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('academia_helloworld/hello');
        $block->setText("Mensagem no bloco");
        $this->getLayout()->getBlock('content')->insert($block);
        $this->renderLayout();
    }
}

}