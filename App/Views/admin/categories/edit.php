<?php Core\View::render('layout/header', ['admin' => 'true']); ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <form class="form-control login-form" action="<?= url('admin/categories/update') ?>" method="POST" enctype="multipart/form-data">
                <h3 class="text-center">Update category</h3>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $category->name ?>" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Description">
                        <?= $category->description ?>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" value="">
                </div>
                <button type="submit" class="btn btn-outline-primary form-control my-3">Update</button>
            </form>
        </div>
    </div>
</div>


<?php
Core\View::render('layout/footer');
