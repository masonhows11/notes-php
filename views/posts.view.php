<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<div class="container-fluid">
    <div class="row d-flex flex-column">
        <div class="col-lg-5">
            <ul class="list-unstyled ms-3">
                <?php foreach ($posts as $post) : ?>
                    <li>
                        <a href="/post?id=<?= $post['id'] ?>" class="text-decoration-none text-dark">
                            <?= $post['title'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-lg-5">
            <p>
                <a href="/post/create" class="ms-3 text-decoration-none">Create Post</a>
            </p>
        </div>
    </div>

</div>

<?php require('views/partials/footer.php') ?>

