<?php Core\View::render('layout/header', ['admin' => 'true']); ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <form class="form-control login-form" action="<?= url('admin/posts/store') ?>" method="POST" enctype="multipart/form-data">
                <h3 class="text-center">Create post</h3>
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="" required>
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category:</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="Post text"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" value="">
                </div>
                <button type="submit" class="btn btn-outline-primary form-control my-3">Create</button>

            </form>
        </div>
    </div>
</div>


<?php
Core\View::render('layout/footer');
