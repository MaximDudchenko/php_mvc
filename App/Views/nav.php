<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="d-flex align-items-start col-md-3mb-2 mb-md-0">
            <a href="/" class="d-flex align-items-center col-md-3  text-dark text-decoration-none">
            <h3>Blog</h3>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php if (isset($admin))
        {
            include_once VIEW_DIR . '/navs/admin.php';
        } else {
            include_once  VIEW_DIR . '/navs/user.php';
        }
        ?>
        </ul>

        <div class="d-flex align-items-end justify-content-end col-md-3 text-end">

            <?php if (\App\Helpers\SessionHelper::isUserLoggedIn()): ?>
                <a href="<?= url('admin/dashboard') ?>" class="nav-link px-2 link-dark">Dashboard</a>
                <a href="<?= url('logout') ?>" class="nav-link px-2 link-dark">Logout</a>
            <?php else: ?>
                <a href="<?= url('login') ?>" class="nav-link px-2 link-dark">Login</a>
                <a href="<?= url('registration') ?>" class="nav-link px-2 link-dark">Registration</a>
            <?php endif; ?>
        </div>
    </header>
</div>
