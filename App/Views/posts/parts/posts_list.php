<div class="container">
    <div class="row d-flex justify-content-center">
        <?php foreach($posts as $post): ?>
            <div class="col-lg-12 text-center mb-3">
                <h3><?= $post->title ?></h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-4">
                        <img src="<?= IMG_DIR . $post->image ?>" alt="Image">
                    </div>
                    <div class="col-lg-8">
                        <p><?= $post->body ?></p>
                        <a href="<?= url("posts/{$post->id}") ?>">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
