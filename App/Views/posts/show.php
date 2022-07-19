<?php Core\View::render('layout/header'); ?>

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12 text-center">
                <h2><?= $post->title ?></h2>
                <div class="col-md-4">
                    <img src="<?= IMG_URL . $post->imgage ?>" alt="Image">
                </div>
                <div class="col-md-8">
                    <p><?= $post->body ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
Core\View::render('layout/footer');
