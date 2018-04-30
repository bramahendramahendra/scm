<h1>Edit Akun</h1>

<h2 class="sub-header">Edit Data Akun</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>iD Pegawai</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Actions</th>
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
                <td>
                    <a href="<?php echo base_url(); ?>Admin/Editing/<?php echo $akun->id_pegawai; ?>" >
                        <button class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> </button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>