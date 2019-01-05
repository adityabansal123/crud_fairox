<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Aditya\'s Blog';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color:#337ab7">Aditya's Blog</h1>
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
                        <span><?= Html::a('View') ?></span>
                        <span><?= Html::a('Update') ?></span>
                        <span><?= Html::a('Delete') ?></span>
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
