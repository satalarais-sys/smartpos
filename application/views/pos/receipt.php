<html>
<head>
<style>
body { font-family: monospace; width: 260px; }
.text-center { text-align: center; }
</style>
</head>

<body>

<div class="text-center">
    <h3>STRUK PEMBELIAN</h3>
    <small><?= $sale->invoice ?></small>
    <hr>
</div>

<?php foreach($detail as $d){ ?>
<?= $d->name ?><br>
<?= $d->qty ?> x <?= number_format($d->price) ?> =
<b><?= number_format($d->total) ?></b>
<br><br>
<?php } ?>

<hr>

Total: <b><?= number_format($sale->total) ?></b><br>
Bayar: <?= number_format($sale->paid) ?><br>
Kembali: <?= number_format($sale->change_money) ?><br>

<hr>
<div class="text-center">
    TERIMA KASIH
</div>

<script>
window.print();
</script>

</body>
</html>
