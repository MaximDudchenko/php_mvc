<?php Core\View::render('layout/header'); ?>

<section id="login">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-4">
                <form class="form-control login-form" action="<?= ROOT_URL . '/auth/verify' ?>" method="POST">
                    <h3 class="text-center">Sign In</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary form-control my-3">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php Core\View::render('layout/footer'); ?>

