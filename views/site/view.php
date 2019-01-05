<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Aditya\'s Blog';
?>
<div class="site-index">
    <h1>View Post</h1>

    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $post->title; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $post->description; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $post->category; ?>
            </li>
        </ul>
        <div class="row">
            <a href=<?php echo  yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>
