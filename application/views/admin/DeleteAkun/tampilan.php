<h1>Delete Akun</h1>

<h2 class="sub-header">Delete Data Akun</h2>
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
                    <a href="<?php echo base_url(); ?>Admin/Delete/<?php echo $akun->id_pegawai; ?>" >
                        <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>