<?php
if (is_string(@$_GET['delId'])) {
    $sql = "DELETE FROM posts WHERE id = {$_GET['delId']}";
    if ($con->exec($sql) == 1) {
        $_SESSION['info'] = 'Berhasil Terhapus';
    }
}
$posts = $con->prepare('SELECT * FROM posts');
$posts->execute();
?>
<?php if (@$_SESSION['alert']) : ?>
    <div class="alert alert-info"><?= $_SESSION['info'] ?></div>
    <?php unset($_SESSION['info']) ?>
<?php endif; ?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 0 ?>
        <?php while ($value = $posts->fetch()) : ?>
            <tr>
                <th scope="row"><?= ++$i; ?></th>
                <td><?= $value['title'] ?></td>
                <td><?= $value['content'] ?></td>
                <td><a href="index.php?konten=admin&delId=<?= $value['id'] ?>" class="btn btn-danger">Delete</a><a href="" class="btn btn-success">Update</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>