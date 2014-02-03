<?php

class DefaultController extends CController
{
    
    public function actionIndex()
    {
        
        $testModel = new TestModel();
        
        echo $this->getModule()->name.'::'.get_class($this);
        $this->render('index');
    }
    
}
