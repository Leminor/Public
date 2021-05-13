<?php

use models\entities\CommentEntity;

/**
 * @var CommentEntity $comment
 */

?>

<form action="messages/update?id=<?= $comment->id ?>" method="post">
    <div class="mt-3">
        <b> Add your comment:</b>
    </div>
    <div class="form-floating mt-3">
        <textarea
            name="comment"
            class="form-control"
            placeholder="Leave a comment here"
            id="floatingTextarea2"
            style="height: 100px" required><?= $comment->comment ?></textarea>
        <label for="floatingTextarea2">Comment</label>
    </div>
    <div class="input-group mb-3">
        <label for="floatingTextarea2"></label>
    </div>
    <button type="submit" class="btn btn-success input-group mb-3">Update comment</button>
</form>
