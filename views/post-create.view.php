<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="col-lg-5">

        <form  method="post" >
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Example textarea</label>
                <textarea class="form-control" name="description" id="desc" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php require('views/partials/footer.php') ?>
