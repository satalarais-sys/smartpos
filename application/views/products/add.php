<div class="card">
    <div class="card-header bg-success text-white">
        <h5>Tambah Produk</h5>
    </div>

    <div class="card-body">

        <form method="post" enctype="multipart/form-data" action="<?= base_url('products/add_action'); ?>">

            <div class="form-group">
                <label>Nama Produk</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Barcode</label>
                <input name="barcode" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input name="price" class="form-control" required type="number">
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input name="stock" class="form-control" required type="number">
            </div>

            <div class="form-group">
                <label>Satuan</label>
                <input name="unit" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
        </form>

    </div>
</div>
