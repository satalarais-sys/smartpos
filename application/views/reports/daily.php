<div class="card">

    <div class="card-header bg-primary text-white">
        <h5>Daily Report</h5>
    </div>

    <div class="card-body">

        <form method="get" action="">
            <div class="form-group">
                <label>Select Date</label>
                <input type="date" name="date" value="<?= $date ?>" class="form-control">
            </div>
            <button class="btn btn-primary btn-block">Search</button>
        </form>

        <hr>

        <table class="table table-bordered table-sm">
            <thead>
                <tr>
                    <th>Invoice</th>
                    <th>Total</th>
                    <th>Paid</th>
                    <th>Change</th>
                    <th>Date</th>
                    <th width="100">#</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($reports as $r) { ?>
                <tr>
                    <td><?= $r->invoice ?></td>
                    <td><?= number_format($r->total) ?></td>
                    <td><?= number_format($r->paid) ?></td>
                    <td><?= number_format($r->change_amount) ?></td>
                    <td><?= $r->created_at ?></td>
                    <td>
                        <a href="<?= base_url('reports/detail/'.$r->id); ?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>

    </div>

</div>
