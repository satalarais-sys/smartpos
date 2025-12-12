<div class="card">

    <div class="card-body">

        <form method="post" action="<?= base_url('products/save'); ?>">

            <input type="hidden" name="id" value="<?= isset($product) ? $product->id : '' ?>">

            <div class="form-group">
                <label>Barcode</label>
                <input type="text" name="barcode" class="form-control" 
                    value="<?= isset($product) ? $product->barcode : '' ?>" required>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="<?= isset($product) ? $product->name : '' ?>" required>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select name="category_id" class="form-control" required>
                    <option value="">-- Select --</option>
                    <?php foreach ($categories as $c) { ?>
                    <option value="<?= $c->id ?>" <?= isset($product) && $c->id == $product->category_id ? "selected":"" ?>>
                        <?= $c->name ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Unit</label>
                <select name="unit_id" class="form-control" required>
                    <option value="">-- Select --</option>
                    <?php foreach ($units as $u) { ?>
                    <option value="<?= $u->id ?>" <?= isset($product) && $u->id == $product->unit_id ? "selected":"" ?>>
                        <?= $u->name ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control"
                       value="<?= isset($product) ? $product->price : '' ?>" required>
            </div>

            <button class="btn btn-success">Save</button>
            <a href="<?= base_url('products'); ?>" class="btn btn-secondary">Back</a>

        </form>

    </div>

</div>
