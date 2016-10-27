<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = Html::encode($this->title);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>
    <p>
<?php $escapedUsername = Html::encode($model->username); ?>
        <?= 'Username: ' . $escapedUsername; ?>
    </p>
    <p>
        <?= 'Key: ' . $key; ?>
    </p>
    <p>
        <?php $encodedUsername = Yii::$app->security->encryptByPassword(
                $escapedUsername, $key);
        ?>
        <?= 'Username: ' . $encodedUsername; ?>
    </p>
    <p>
    <?php $decodedUsername = Yii::$app->security->decryptByPassword(
            $encodedUsername, $key);
    ?>
    <?= 'Username: ' . $decodedUsername; ?>
    </p>
    <?php
    // cache table with variations of $model->id, means with model id change cache exchange
    if($this->beginCache('user_detail', ['variations'=>$model->id])){
        echo DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'username',
                'auth_key',
                'password_hash',
                'password_reset_token',
                'email:email',
                'status',
                'created_at',
                'updated_at',
            ],
        ]);
        // show message in log for the first time cache store
        Yii::trace('Store user details table log');        
        $this->endCache();
    }
    ?>

</div>
