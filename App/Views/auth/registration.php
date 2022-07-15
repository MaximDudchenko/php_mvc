<?= \Core\View::render('layout/header')  ?>

<section id="register">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
            <div class="col-lg-6">
                <form class="form-control register-form" action="<?= ROOT_URL . '/users/store' ?>" method="POST">
                    <h3 class="text-center">Registration</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= !empty($data['name']) ? $data['name'] : '' ?>" required>
                        <?php if (!empty($name)) : ?>
                            <div class="alert alert-danger"><?= $name ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Surname:</label>
                        <input type="text" class="form-control" id="surname" name="surname" value="<?= !empty($data['surname']) ? $data['surname'] : '' ?>" required>
                        <?php if (!empty($surname)) : ?>
                        <div class="alert alert-danger"><?= $surname ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthday:</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= !empty($data['birthdate']) ? $data['birthdate'] : '' ?>" required>
                        <?php if (!empty($birthdate)) : ?>
                            <div class="alert alert-danger"><?= $birthdate ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?= !empty($data['email']) ? $data['email'] : '' ?>" required>
                        <?php if (!empty($email)) : ?>
                            <div class="alert alert-danger"><?= $email ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-outline-primary form-control my-3">Create an account</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= \Core\View::render('layout/footer')  ?>
