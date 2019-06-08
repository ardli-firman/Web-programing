<?php
$res = $con->prepare('SELECT * FROM posts WHERE id = ' . $_GET['id']);
$res->execute();
$post = $res->fetch();
?>

<h1 class="my-4"><?= $post['title'] ?></h1>
<div class="text-muted">
    Posted on <?= date('M d, Y', strtotime($post['created_at'])) ?> by <a href="#">Admin</a>
</div>
<br>
<img src="images/<?= $post['image'] ?>" class="img-thumbnail" alt="">
<p class="mt-3">
    <?= $post['content'] ?>
</p>