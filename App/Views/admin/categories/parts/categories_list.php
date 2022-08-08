<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <th scope="row"><?= $category->id ?></th>

                        <td><img src="<?= IMG_URL . $category->image ?>" alt="Image"></td>
                        <td><?= $category->name ?></td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href="<?= url("admin/categories/{$category->id}/edit") ?>" class="">
                                    <img src="<?= ROOT_URL . '/assets/img/edit_24.png' ?>" alt="Edit">
                                </a>
                                <form action="<?= url("admin/categories/{$category->id}/destroy") ?>" method="POST">
                                    <a href="" onClick="this.parentNode.submit(); return false;">
                                        <img src="<?= ROOT_URL . '/assets/img/delete_24.png' ?>" alt="Delete">
                                    </a>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

