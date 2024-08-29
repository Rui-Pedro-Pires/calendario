<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
        echo Html::a('Criar Cliente', ['create'], ['class' => 'btn btn-success']);
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'], // Adds a serial number column
            'id',
            'nome',
            'telem',
            'email',
            ['class' => 'yii\grid\ActionColumn'], // Adds view, update, delete buttons
        ],
    ]); ?>

</div>
