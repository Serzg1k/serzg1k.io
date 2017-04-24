<?php

namespace app\controllers;
use app\models\Perfomance;

class PerfomanceController extends \yii\web\Controller
{

	
    
    public function actionIndex()
    {
    	$perf = Perfomance::find()->with('artist')->all();
    	$perfplace = Perfomance::find()->with('place')->all();
    	
        return $this->render('index', compact('perf', 'perfplace'));
    }

}
