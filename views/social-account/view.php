<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SocialAccount */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Social Account', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-account-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= 'Social Account'.' '. Html::encode($this->title) ?></h2>
        </div>
        <div class="col-sm-3" style="margin-top: 15px">
            
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'user.username',
            'label' => 'User',
        ],
        'provider',
        'client_id',
        'data:ntext',
        'code',
        'created_at',
        'email:email',
        'username',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>