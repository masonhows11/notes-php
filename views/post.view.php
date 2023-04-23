<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<?php dd($_SERVER); ?>

<div class="container-fluid d-flex justify-content-evenly">
    <div class="col-lg-10">

        <h1><?= htmlspecialchars($post['title'])  ?></h1>
        <p><?= htmlspecialchars($post['body']) ?></p>

    </div>
</div>
<div class="container-fluid d-flex justify-content-evenly">
    <div class="col-lg-10">
        <a href="/posts" class="text-decoration-none text-primary">Posts</a>
    </div>
</div>

<?php require('views/partials/footer.php') ?>


