<div class="card">
    <div class="card-header bg-info text-white">
        <h5>Edit Produk</h5>
    </div>

    <div class="card-body">

        <form method="post" enctype="multipart/form-data" action="<?= base_url('products/edit_action/'.$product->id); ?>">

            <div class="form-group">
                <label>Nama Produk</label>
                <input name="name" class="form-control" value="<?= $product->name ?>" required>
            </div>

            <div class="form-group">
                <label>Barcode</label>
                <input name="barcode" class="form-control" value="<?= $product->barcode ?>" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input name="price" class="form-control" value="<?= $product->price ?>" type="number" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input name="stock" class="form-control" value="<?= $product->stock ?>" type="number" required>
            </div>

            <div class="form-group">
                <label>Satuan</label>
                <input name="unit" class="form-control" value="<?= $product->unit ?>" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" class="form-control">
                <br>
                <?php if($product->image){ ?>
                    <img src="<?= base_url('uploads/products/'.$product->image); ?>" width="80">
                <?php } ?>
            </div>

            <button class="btn btn-info">Update</button>

        </form>

    </div>
</div>
