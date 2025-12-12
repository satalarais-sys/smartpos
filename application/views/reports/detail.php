<div class="card">

    <div class="card-header bg-info text-white">
        <h5>Sales Detail - <?= $sales->invoice ?></h5>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-sm">
            <tr><th>Invoice</th><td><?= $sales->invoice ?></td></tr>
            <tr><th>Total</th><td><?= number_format($sales->total) ?></td></tr>
            <tr><th>Paid</th><td><?= number_format($sales->paid) ?></td></tr>
            <tr><th>Change</th><td><?= number_format($sales->change_amount) ?></td></tr>
            <tr><th>Date</th><td><?= $sales->created_at ?></td></tr>
        </table>

        <hr>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($details as $d) { ?>
                <tr>
                    <td><?= $d->name ?></td>
                    <td><?= number_format($d->price) ?></td>
                    <td><?= $d->qty ?></td>
                    <td><?= number_format($d->total) ?></td>
                </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>

</div>
