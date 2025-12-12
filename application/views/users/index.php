<div class="card">
    <div class="card-header bg-primary text-white">
        <h5>User Management</h5>
    </div>

    <div class="card-body">
        <a href="<?= base_url('users/add'); ?>" class="btn btn-success mb-3">Add User</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th width="150">#</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($users as $u) { ?>
                <tr>
                    <td><?= $u->name ?></td>
                    <td><?= $u->username ?></td>
                    <td><?= $u->role ?></td>
                    <td>
                        <a href="<?= base_url('users/edit/'.$u->id); ?>" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Delete user?')" href="<?= base_url('users/delete/'.$u->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
