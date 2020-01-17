<?php foreach ($comments as $comment):?>
    <div class="comment <?= $comment->user_id == Yii::$app->user->id ? ' comment-my' : ' comment-strangers' ?>">
        <div class="comment-header">
            <span class="comment-name"><?= $comment->user->name ?></span>
            <span class="comment-date"><?= date('H:i d.m.y', $comment->created_at) ?></span>
        </div>
        <div class="comment-body"><?= $comment->comment ?></div>
    </div>
<?php endforeach;?>

