<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>



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

<?php require base_path('views/partials/footer.php') ?>