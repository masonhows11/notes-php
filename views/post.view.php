<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<div class="container-fluid d-flex justify-content-evenly">
    <div class="col-lg-10">

        <h1><?= $post['title'] ?></h1>
        <p><?= $post['description'] ?></p>

    </div>
</div>
<div class="container-fluid d-flex justify-content-evenly">
    <div class="col-lg-10">
        <a href="/posts">Posts</a>
    </div>
</div>

<?php require('views/partials/footer.php') ?>

