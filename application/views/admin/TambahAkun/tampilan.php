<div class="col-lg-5 col-lg-offset-2">

    <h1>Tambah Akun</h1>
    <p>Fill in the details to register on our website!!</p>

    <!-- untuk mengcontrol successs apa tidak -->
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?> </div>
        <?php
    } ?>

    <!-- Untuk mengecek apakah table username, email, password dan no hp udah diisi apa belum -->
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="name" >Nama:</label>
            <input class="form-control" name="name" id="name" type="text">
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>



        <div class="form-group">
            <label for="password" >Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password" >Confirm Password:</label>
            <input class="form-control" name="password2" id="password" type="password">
        </div>

        <div >
            <button class="btn btn-primary" name="register">Register</button>
        </div>
    </form>
</div>
