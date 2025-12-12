<div class="card">
    <div class="card-header bg-success text-white">
        <h5>Add User</h5>
    </div>

    <div class="card-body">
        <form method="post" action="<?= base_url('users/add_action'); ?>">

            <div class="form-group">
                <label>Name</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>
                </select>
            </div>

            <button class="btn btn-success">Save</button>

        </form>
    </div>
</div>
