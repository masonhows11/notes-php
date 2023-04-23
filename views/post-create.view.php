<?php require('views/partials/head.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>

<div class="container-fluid d-flex justify-content-center">
    <div class="col-lg-5">

        <form  method="post" >

            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" name="title" class="form-control" id="title">

                <?php if(isset($errors['title'])) : ?>
                    <div class="alert alert-danger">
                        <?php echo $errors['title'] ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Example textarea</label>
                <textarea class="form-control" name="body" id="body" rows="3">
                </textarea>

                <?php if(isset($errors['body'])) : ?>
                <div class="alert alert-danger">
                    <?php echo $errors['body'] ?>
                </div>
                <?php endif; ?>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


<?php require('views/partials/footer.php') ?>
