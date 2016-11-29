<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\modules\person\models\Person */

$this->title = Yii::t('person', 'Update {modelClass}: ', [
    'modelClass' => 'Person',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('person', 'Persons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('person', 'Update');
?>
<div class="person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>