<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $stmt = $con->query($sql);
    $res = $stmt->fetch();
    if ($res != false) {
        $_SESSION = [
            'role' => $res['role'],
            'username' => $res['username']
        ];
        echo "<script type='text/javascript'>window.location.href = 'index.php?konten=admin';</script>";
        exit();
    }
}
?>
<h1 class="my-3">Login to admin page</h1>
<form action="" method="POST">
    <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" id="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control">
    </div>
    <div class="form-group">
        <button class="btn btn-outline-primary" type="submit" name="login">Login</button>
    </div>
</form>