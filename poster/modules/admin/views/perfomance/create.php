<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Perfomance */

$this->title = 'Create Perfomance';
$this->params['breadcrumbs'][] = ['label' => 'Perfomances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfomance-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
