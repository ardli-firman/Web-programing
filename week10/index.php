<?php
require_once 'koneksi.php';
$posts = $dbh->query('SELECT * FROM posts');
$posts->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="my-4">Page Heading <small>Secondary Text</small></h1>
                <?php while ($value = $posts->fetch()) : ?>
                    <div class="card mb-4">
                        <img src="images/<?= $value['image'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $value['title'] ?></h5>
                            <p class="card-text"><?= $value['content'] ?></p>
                            <a href="" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on <?= date('M d, Y', strtotime($value['created_at'])) ?> by <a href="#">Admin</a>
                        </div>
                    </div>
                <?php endwhile;
            $posts->closeCursor(); ?>

            </div>


            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary">Go</button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a href="#">HTML</a>
                                    </li>
                                    <li>
                                        <a href="#">Freebies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="#">Javascript</a>
                                    </li>
                                    <li>
                                        <a href="#">CSS</a>
                                    </li>
                                    <li>
                                        <a href="#">Tutorial</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card my-4">
                    <h5 class="card-header">
                        Side widget
                    </h5>
                    <div class="card-body">ini side widget</div>
                </div>

            </div>

        </div>

    </div>

    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; ArdliBlog 2019</p>
        </div>
    </footer>

    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>