<div class="card">

    <div class="card-body">

        <form method="post" action="<?= base_url('categories/save'); ?>">

            <input type="hidden" name="id" value="<?= isset($category) ? $category->id : ''; ?>">

            <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="name" class="form-control" 
                       value="<?= isset($category) ? $category->name : ''; ?>" required>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="<?= base_url('categories'); ?>" class="btn btn-secondary">Back</a>

        </form>

    </div>
</div>
