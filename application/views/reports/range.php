<div class="card">

    <div class="card-header bg-success text-white">
        <h5>Report by Date Range</h5>
    </div>

    <div class="card-body">

        <form method="get" action="">
            <div class="row">

                <div class="col-md-5">
                    <label>From</label>
                    <input type="date" class="form-control" name="from" value="<?= $from ?>">
                </div>

                <div class="col-md-5">
                    <label>To</label>
                    <input type="date" class="form-control" name="to" value="<?= $to ?>">
                </div>

                <div class="col-md-2">
                    <label>.</label><br>
                    <button class="btn btn-success btn-block">Search</button>
                </div>

            </div>
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
