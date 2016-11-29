<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\modules\person\models\Person */

$this->title = Yii::t('person', 'Create Person');
$this->params['breadcrumbs'][] = ['label' => Yii::t('person', 'Persons'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>