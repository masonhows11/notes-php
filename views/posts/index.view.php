<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="container-fluid">

    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <ul class="list-unstyled ms-3">
                <?php foreach ($posts as $post) : ?>
                <li>
                    <a href="/post?id=<?= $post['id'] ?>" class="text-decoration-none text-dark">
                        <?= htmlspecialchars($post['title']) ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10">
            <p>
                <a href="/post/create" class="ms-3 text-decoration-none">Create Post</a>
            </p>
        </div>
    </div>

</div>

<?php require base_path('views/partials/footer.php') ?>