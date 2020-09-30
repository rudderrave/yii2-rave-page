<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model ravesoft\page\models\Page */

$this->title = Yii::t('rave/page', 'Create Page');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rave/page', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">
    <h3 class="lte-hide-title"><?= Html::encode($this->title) ?></h3>
    <?= $this->render('_form', compact('model')) ?>
</div>
