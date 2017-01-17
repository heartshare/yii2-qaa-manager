<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vekqaam\models\base\QaaMainBase */

$this->title = Yii::t('vekqaam', 'Update {modelClass}: ', [
    'modelClass' => 'Qaa Main Base',
]) . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('vekqaam', 'Qaa Main Bases'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('vekqaam', 'Update');
?>
<div class="qaa-main-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
