<div class="row">

    <!-- LEFT: Barcode Input -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Scan Barcode
            </div>
            <div class="card-body">

                <form action="<?= base_url('pos/scan'); ?>" method="post">
                    <input autofocus name="barcode" class="form-control" placeholder="Scan barcode disini...">
                </form>

            </div>
        </div>
    </div>

    <!-- RIGHT: Cart -->
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-success text-white">
                Keranjang
            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th width="80">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $grand = 0; foreach ($cart as $c) { $grand += $c->total; ?>
                        <tr>
                            <td><?= $c->name ?></td>
                            <td><?= number_format($c->price) ?></td>
                            <td><?= $c->qty ?></td>
                            <td><?= number_format($c->total) ?></td>
                            <td>
                                <a href="<?= base_url('pos/delete_item/'.$c->id); ?>" class="btn btn-danger btn-sm">Del</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <hr>

                <h3>Total: <b>Rp <?= number_format($grand) ?></b></h3>

                <form action="<?= base_url('pos/process_payment'); ?>" method="post">

                    <input type="hidden" name="total" value="<?= $grand ?>">

                    <label>Bayar</label>
                    <input type="number" name="paid" class="form-control" required>

                    <button class="btn btn-primary mt-3">Proses Pembayaran</button>
                </form>

            </div>
        </div>
    </div>

</div>
