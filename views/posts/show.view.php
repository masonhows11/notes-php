<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>



<div class="container d-flex flex-column">

    <div class="col-lg-10">
        <a href="/posts" class="text-decoration-none text-primary">Posts</a>
    </div>

    <div class="col-lg-10">

        <h1><?= htmlspecialchars($post['title'])  ?></h1>
        <p><?= htmlspecialchars($post['body']) ?></p>

    </div>

    <div class="col-lg-10">

        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value=" <?= htmlspecialchars($post['id']) ?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>



</div>


<?php require base_path('views/partials/footer.php') ?>