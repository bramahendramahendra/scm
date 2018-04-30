<h1>Data Barang</h1>

<h2 class="sub-header">Tabel Bareang</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>iD</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $i = 0;
        foreach ($grocery AS $barang): ?>
        <tr>
            <td> <?php echo ++$i; ?> </td>
            <td> <?php echo $barang->grocery_name; ?> </td>
            <td> <?php echo $barang->price; ?> </td>
            <td> <?php echo $barang->stock; ?> </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>