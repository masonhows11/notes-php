<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<div class="container-fluid d-flex justify-content-evenly">
    <div class="col-lg-10 ">
        <ul>
        <?php foreach ($posts as $post) :?>
            <li>
                <a href="/post?id=<?= $post['id'] ?>" class="">
                    <?= $post['title']  ?>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php require('views/partials/footer.php') ?>

