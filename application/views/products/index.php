<div class="card">
    <div class="card-header bg-primary text-white">
        <h5>Data Produk</h5>
    </div>

    <div class="card-body">

        <a href="<?= base_url('products/add'); ?>" class="btn btn-success mb-3">
            Tambah Produk
        </a>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Barcode</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($products as $p){ ?>
                <tr>
                    <td>
                        <?php if($p->image){ ?>
                            <img src="<?= base_url('uploads/products/'.$p->image); ?>" width="50">
                        <?php } ?>
                    </td>

                    <td><?= $p->name ?></td>
                    <td><?= $p->barcode ?></td>
                    <td>Rp <?= number_format($p->price) ?></td>
                    <td><?= $p->stock ?></td>
                    <td><?= $p->unit ?></td>

                    <td>
                        <a href="<?= base_url('products/edit/'.$p->id); ?>" class="btn btn-info btn-sm">Edit</a>
                        <a onclick="return confirm('Hapus produk?')" href="<?= base_url('products/delete/'.$p->id); ?>" class="btn btn-danger btn-sm">Del</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>
