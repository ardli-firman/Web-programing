<?php
$posts = $con->prepare('SELECT * FROM posts');
$posts->execute();
?>
<h1 class="my-4">Page Heading <small>Secondary Text</small></h1>
<?php while ($value = $posts->fetch()) : ?>
    <div class="card mb-4">
        <img src="images/<?= $value['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $value['title'] ?></h5>
            <p class="card-text"><?= $value['content'] ?></p>
            <a href="?konten=post&id=<?= $value['id'] ?>" class="btn btn-primary">Read More</a>
        </div>
        <div class="card-footer text-muted">
            Posted on <?= date('M d, Y', strtotime($value['created_at'])) ?> by <a href="#">Admin</a>
        </div>
    </div>
<?php endwhile;
$posts->closeCursor(); ?>