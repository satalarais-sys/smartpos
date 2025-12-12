<div class="row">

    <!-- Total Produk -->
    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $total_products ?></h3>
                <p>Total Produk</p>
            </div>
            <div class="icon"><i class="fas fa-boxes"></i></div>
        </div>
    </div>

    <!-- Total Transaksi Hari Ini -->
    <div class="col-md-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $total_sales_today ?></h3>
                <p>Transaksi Hari Ini</p>
            </div>
            <div class="icon"><i class="fas fa-shopping-cart"></i></div>
        </div>
    </div>

    <!-- Total Pendapatan Hari Ini -->
    <div class="col-md-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>Rp <?= number_format($income_today) ?></h3>
                <p>Pendapatan Hari Ini</p>
            </div>
            <div class="icon"><i class="fas fa-money-bill-wave"></i></div>
        </div>
    </div>

</div>
<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h5>Grafik Penjualan 7 Hari Terakhir</h5>
    </div>
    <div class="card-body">
        <canvas id="chartSales7"></canvas>
    </div>
</div>

<script>
var ctx = document.getElementById('chartSales7').getContext('2d');

var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [
            <?php foreach($chart as $c){ echo "'". $c->date ."',"; } ?>
        ],
        datasets: [{
            label: 'Total Penjualan',
            data: [
                <?php foreach($chart as $c){ echo $c->total .","; } ?>
            ],
            borderWidth: 2,
            fill: false
        }]
    }
});
</script>
<div class="card mt-4">
    <div class="card-header bg-secondary text-white">
        <h5>5 Transaksi Terakhir</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Invoice</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($last_transactions as $t){ ?>
                <tr>
                    <td><?= $t->invoice ?></td>
                    <td>Rp <?= number_format($t->total) ?></td>
                    <td><?= $t->created_at ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
