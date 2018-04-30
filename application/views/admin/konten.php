<h1 class="page-header"> ADMIN </h1>

<h2 class="sub-header">Tabel Data Akun</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>iD Pegawai</th>
            <th>Nama</th>
            <th>Username</th>
        </tr>
        </thead>

        <tbody>
        <?php
        $i = 0;
        foreach ($admin AS $akun): ?>
            <tr>
                <td> <?php echo ++$i; ?> </td>
                <td> <?php echo $akun->name; ?> </td>
                <td> <?php echo $akun->username; ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>