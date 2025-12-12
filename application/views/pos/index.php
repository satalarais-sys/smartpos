<div class="row">

    <!-- LEFT: SCAN AREA -->
    <div class="col-md-4">

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5>Scan Barcode</h5>
            </div>

            <div class="card-body">
                <input type="text" id="barcode" class="form-control" placeholder="Scan here..." autofocus>
            </div>
        </div>

        <script>
        let buffer = "";

        document.addEventListener('keypress', function(e){
            if (e.key === "Enter") {
                submitBarcode(buffer);
                buffer = "";
            } else {
                buffer += e.key;
            }
        });

        function submitBarcode(code){
            $.post("<?= base_url('pos/scan'); ?>", { barcode: code }, function(res){
                let r = JSON.parse(res);
                if (r.status) {
                    location.reload();
                } else {
                    alert("Barcode not found");
                }
            });
        }
        </script>

    </div>

    <!-- RIGHT: CART -->
    <div class="col-md-8">
        <div class="card">

            <div class="card-header bg-success text-white">
                <h5>Cart</h5>
            </div>

            <div class="card-body">

                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th width="70">#</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($this->cart->contents() as $c) { ?>
                        <tr>
                            <td><?= $c['name'] ?></td>
                            <td><?= $c['qty'] ?></td>
                            <td><?= number_format($c['price']) ?></td>
                            <td><?= number_format($c['subtotal']) ?></td>
                            <td>
                                <a href="<?= base_url('pos/remove/'.$c['rowid']); ?>" class="btn btn-danger btn-sm">X</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <h4>Total: <b><?= number_format($this->cart->total()) ?></b></h4>

                <!-- Checkout -->
                <form method="post" action="<?= base_url('pos/checkout'); ?>">
                    <div class="form-group">
                        <label>Paid (Bayar)</label>
                        <input type="number" name="paid" class="form-control" required>
                    </div>

                    <button class="btn btn-success btn-block">Checkout</button>
                    <a href="<?= base_url('pos/reset'); ?>" class="btn btn-danger btn-block">Reset</a>
                </form>

            </div>

        </div>
    </div>

</div>
