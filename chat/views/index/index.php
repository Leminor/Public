<?php

use models\entities\CommentEntity;

/**
 * @var CommentEntity[] $comments
 */


?>

<form action="messages/create" method="post">
    <div class="mt-3">
        <b> Add your comment:</b>
    </div>
    <div class="form-floating mt-3">
        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
        <label for="floatingTextarea2">Comment</label>
    </div>
    <div class="input-group mb-3">
        <label for="floatingTextarea2"></label>
    </div>
    <button type="submit" class="btn btn-success input-group mb-3">Send comment</button>
</form>
<div>
    <?php foreach ($comments as $comment) :?>
        <figure class="form-control">
            <blockquote class="blockquote">
                <p><?= nl2br ($comment->comment) ?></p>
            </blockquote>
            <figure class="text-end ">
                <figcaption class="blockquote-footer">
                    User #<?= $comment->user_id, "<br>" ?>
                    <?= $comment->created_at ?>
                </figcaption>
                <a href="/messages/update?id=<?= $comment->id ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="/messages/delete?id=<?= $comment->id ?>" class="btn btn-sm btn-danger">Delete</a>
            </figure>
        </figure>

    <?php endforeach; ?>

</div>