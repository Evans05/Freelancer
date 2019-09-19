<?php
namespace app\controllers;
use yii\web\Controller;

class AnimalController extends Controller
{

    public function actionChe(){
        $msg= "Hello";
        return $this->render($msg);
    }
}
?>