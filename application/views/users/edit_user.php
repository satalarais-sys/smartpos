<div class="card">
    <div class="card-header bg-info text-white">
        <h5>Edit User</h5>
    </div>

    <div class="card-body">
        <form method="post" action="<?= base_url('users/edit_action/'.$user->id); ?>">

            <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control" value="<?= $user->name ?>" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input name="username" class="form-control" value="<?= $user->username ?>" required>
            </div>

            <div class="form-group">
                <label>New Password (optional)</label>
                <input name="password" class="form-control">
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="admin" <?= $user->role=='admin'?'selected':'' ?>>Admin</option>
                    <option value="kasir" <?= $user->role=='kasir'?'selected':'' ?>>Kasir</option>
                </select>
            </div>

            <button class="btn btn-info">Update</button>

        </form>
    </div>
</div>
