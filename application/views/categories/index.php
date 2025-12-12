<div class="card">
    <div class="card-header">
        <a href="<?= base_url('categories/add'); ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Add Category
        </a>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th>Name</th>
                    <th width="150">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($categories as $i => $c) { ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $c->name ?></td>
                        <td>
                            <a href="<?= base_url('categories/edit/' . $c->id); ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>
                            <a href="<?= base_url('categories/delete/' . $c->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete category?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
