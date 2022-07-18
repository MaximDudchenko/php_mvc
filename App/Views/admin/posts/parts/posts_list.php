<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Title</th>
                    <th scope="col">Created at</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($posts as $post): ?>
                    <tr>
                        <th scope="row"><?= $post->id ?></th>
                        <?php if (empty($post->image)): ?>
                            <td></td>
                        <?php else: ?>
                            <td><?= IMG_URL . $post->image ?></td>
                        <?php endif; ?>
                        <td>
                            <?php foreach ($categories as $category): ?>
                                <?php if ($category->id === $post->category_id): ?>
                                    <option value="<?= $category->id ?>"><?= $category->name ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                        <td><?= $post->title ?></td>
                        <td><?= $post->created_at ?></td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a href="<?= url("admin/posts/{$post->id}/edit") ?>" class="">
                                    <img src="<?= ROOT_URL . '/assets/img/edit_24.png' ?>" alt="Edit">
                                </a>
                                <form action="<?= url("admin/posts/{$post->id}/destroy") ?>" method="POST">
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


