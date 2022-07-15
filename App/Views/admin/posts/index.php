<?php Core\View::render('layout/header', ['admin' => 'true']); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (!empty($posts)) {
                include_once VIEW_DIR . '/admin/posts/parts/posts_list.php';
            } else {
                echo "<h1>There are no posts yet</h1>";
            }
            ?>
        </div>
    </div>
</div>


<?php
Core\View::render('layout/footer');