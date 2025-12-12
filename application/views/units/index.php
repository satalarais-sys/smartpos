<div class="card">
    <div class="card-header">
        <a href="<?= base_url('units/add'); ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Add Unit
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
                <?php foreach ($units as $i => $u) { ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $u->name ?></td>
                        <td>
                            <a href="<?= base_url('units/edit/' . $u->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('units/delete/' . $u->id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete unit?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
