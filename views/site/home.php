<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Fairox Services';
?>
<div class="site-index">
    <?php if(Yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-secondary">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?= Yii::$app->session->getFlash('message'); ?>
        </div>
    <?php endif; ?>
    <div class="jumbotron">
        <h1 style="color:#337ab7">Our Blog</h1>
    </div>

    <div class="row">
        <span style="margin-bottom: 20px;"><?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?></span>
    </div>

    <div class="body-content">
        <div class="row">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(count($posts) > 0): ?>
                        <?php foreach($posts as $post): ?>
                            <tr class="table-active">
                                <th scope="row"><?= $post->id; ?></th>
                                <td><?= $post->title; ?></td>
                                <td><?= $post->description; ?></td>
                                <td><?= $post->category; ?></td>
                                <td>
                                    <span><?= Html::a('View', ['view', 'id' => $post->id], ['class'=>'label label-primary']) ?></span>
                                    <span><?= Html::a('Update', ['update', 'id' => $post->id], ['class'=>'label label-success']) ?></span>
                                    <span><?= Html::a('Delete', ['delete', 'id' => $post->id], ['class'=>'label label-danger']) ?></span>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td>No Records Found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
