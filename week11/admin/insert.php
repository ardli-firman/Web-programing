<?php
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $kont = $_POST['content'];
    $sql = "INSERT INTO posts (`title`,`image`,`content`,`created_at`,`update_at`) VALUES('$title','750x300.png','$kont',CURRENT_TIMESTAMP,'0000-00-00 00:00:00.000000')";
    if ($con->exec($sql) == 1) {
        $_SESSION['alert'] = 'Terinsert !';
    } else {
        $_SESSION['alert'] = 'Gagal !';
    }
}
?>
<h1>Masukkan postingan</h1>
<form action="" method="post">
    <?php if (@$_SESSION['alert']) : ?>
        <div class="alert alert-info"><?= $_SESSION['alert'] ?></div>
        <?php unset($_SESSION['alert']) ?>
    <?php endif; ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label for="title">Content</label>
        <input type="text" class="form-control" name="content">
    </div>
    <button class="btn btn-primary" name="save"> Save post </button>
</form>