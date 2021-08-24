<!doctype html>
<html lang="en">

<?php
include('head.php');
include('config.php');

if (isset($_POST['btn-update-list'])) {
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $paket = $_POST['paket'];
    $bayar = $_POST['bayar'];
    $tanggal = $_POST['tanggal'];

    $sql = mysqli_query($koneksi, "UPDATE user SET email='$email', nomor = '$nomor', paket = '$paket', bayar = '$bayar', tanggal = '$tanggal' WHERE nomor = '$nomor' ") or die(mysqli_error($koneksi));

    if ($sql) {
        header("Location: list.php");
        exit();
    } else {
        echo "<script> alert('Gagal memperbaharui data') </script>";
    }
}

if (isset($_POST['btn-delete-list'])) {
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $paket = $_POST['paket'];
    $bayar = $_POST['bayar'];
    $tanggal = $_POST['tanggal'];

    $sql = mysqli_query($koneksi, "DELETE FROM user WHERE nomor = '$nomor'") or die(mysqli_error($koneksi));

    if ($sql) {
        header("Location: list.php");
        exit();
    } else {
        echo "<script> alert('Gagal menghapus data') </script>";
    }
}
?>

<body style="background-color: #000000;">
    <style>
        .table {
            color: aliceblue;
        }
    </style>
    <div class="container">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Paket Kuota Data</th>
                        <th scope="col">Pembayaran</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));
                    while ($data = mysqli_fetch_assoc($sql)) {
                        echo '
                <tr style="color: #ff1966;">
                    <td>' . $data['email'] . '</td>
                    <td>' . $data['nomor'] . '</td>
                    <td>' . $data['paket'] . '</td>
                    <td>' . $data['bayar'] . '</td>
                    <td>' . $data['tanggal'] . '</td>
                    <td>
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal' . $data['nomor'] . '">
                        Edit Data
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1' . $data['nomor'] . '">
                        Delete
                    </button>
                    </td>
                </tr>
                ';
                    ?>

                        <!-- Modal Update -->
                        <div class="modal fade" id="exampleModal<?= $data['nomor'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="hidden" name="email" value="<?= $data['email'] ?>">
                                                <input type="email" name="email" class="form-control" value="<?= $data['email'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <input type="text" name="nomor" class="form-control" value="<?= $data['nomor'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Paket Kuota Data</label>
                                                <input type="text" name="paket" class="form-control" value="<?= $data['paket'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Pembayaran</label>
                                                <input type="text" name="bayar" class="form-control" value="<?= $data['bayar'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Pembelian</label>
                                                <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="btn-update-list" class="btn btn-primary">Update Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Update -->

                        <!-- Modal Delete -->
                        <div class="modal fade" id="exampleModal1<?= $data['nomor'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="container border p-2 rounded"><?= $data['email'] ?></div>
                                                <input type="hidden" name="email" class="form-control" value="<?= $data['email'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Nomor Telepon</label>
                                                <div class="container border p-2 rounded"><?= $data['nomor'] ?></div>
                                                <input type="hidden" name="nomor" class="form-control" value="<?= $data['nomor'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Paket Kuota Data</label>
                                                <div class="container border p-2 rounded"><?= $data['paket'] ?></div>
                                                <input type="hidden" name="paket" class="form-control" value="<?= $data['paket'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Pembayaran</label>
                                                <div class="container border p-2 rounded"><?= $data['bayar'] ?></div>
                                                <input type="hidden" name="bayar" class="form-control" value="<?= $data['bayar'] ?>" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Tanggal Pembelian</label>
                                                <div class="container border p-2 rounded"><?= $data['tanggal'] ?></div>
                                                <input type="hidden" name="tanggal" class="form-control" value="<?= $data['tanggal'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="btn-delete-list" class="btn btn-primary">Delete Data</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Delete -->

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

</body>