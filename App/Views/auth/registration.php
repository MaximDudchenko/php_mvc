<?= \Core\View::render('layout/header')  ?>

<section id="register">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-4">
                <form class="form-control register-form" action="<?= ROOT_URL . 'auth/users/store' ?>" method="POST">
                    <h3 class="text-center">Register</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname:</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday:</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Password confirm:</label>
                        <input type="password" class="form-control" id="password-confirm" name="password-confirm" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="policy" name="policy" value="1" required>
                        <label class="form-check-label" for="policy">I agree</label>
                    </div>
                    <button type="submit" class="btn btn-outline-primary form-control my-3">Register</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= \Core\View::render('layout/footer')  ?>
