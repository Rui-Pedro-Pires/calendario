<?php
use yii\helpers\Html;

/** @var app\models\Tarefa $model */

?>
<div class="tarefa-item">
    <a href="<?php echo \yii\helpers\Url::to(['tarefa/view', 'id' => $model->id]) ?>">
        <h3 class="mb-2 mt-3"><?php echo \yii\helpers\Html::encode($model->nome) ?></h3>     
    </a>
    <p class="mb-2"><?= Html::encode($model->descrição) ?></p>
    <p class="mb-2"><strong>Data Começo:</strong> <?= Html::encode($model->data_começo) ?></p>
    <p class="mb-2"><strong>Data Fim:</strong> <?= Html::encode($model->data_fim) ?></p>
</div>