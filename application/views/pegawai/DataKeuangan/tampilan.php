<h1>Data Keuangan</h1>

<h2 class="sub-header">Tabel Keuangan</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Pemasukan</th>
        </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach ($grocery AS $barang): ?>
                    <td> <?php echo $barang->grocery_name; ?> </td>
                <?php endforeach; ?>

                <?php foreach ($pemasukan AS $uang): ?>
                    <td> <?php echo $uang->pemasukan; ?> </td>
                <?php endforeach; ?>
            </tr>
        </tbody>
    </table>
</div>