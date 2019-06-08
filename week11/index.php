<?php
require_once 'core/koneksi.php';
use core\konek\Koneksi as con;

$con = new con();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once '_partials/header.php'; ?>

<body>
    <?php require_once '_partials/navigation.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php switch (@$konten = $_GET['konten']) {
                    case 'admin':
                        require_once 'admin/index.php';
                        break;
                    case 'post':
                        require_once 'konten/post.php';
                        break;
                    case 'login':
                        require_once 'admin/login.php';
                        break;
                    default:
                        require_once 'konten/dashboard.php';
                        break;
                } ?>
            </div>
            <div class="col-md-4">
                <?php require_once '_partials/sidebar.php'; ?>
            </div>

        </div>
    </div>
    <?php require_once '_partials/footer.php'; ?>
    <?php require_once '_partials/script.php'; ?>
</body>

</html>