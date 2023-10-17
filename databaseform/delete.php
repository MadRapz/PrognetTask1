<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete Data</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('Picture/bg.jpg');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">Hapus Data</h3><br>
                        <?php
                        include 'koneksi.php';

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'Yes') {
                                // Proses penghapusan data
                                $sql = "DELETE FROM tb_formulir WHERE id = $id";

                                if ($conn->query($sql) === TRUE) {
                                    echo "Data berhasil dihapus.";
                                    echo '<script>window.location = "showform.php";</script>';
                                } else {
                                    echo "Error: " . $sql . "<br>" . $conn->error;
                                }
                            } else if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['confirm']) && $_POST['confirm'] == 'No') {
                                // Jika pengguna memilih "No", arahkan kembali ke showform.php
                                echo '<script>window.location = "showform.php";</script>';
                            } else {
                                // Menampilkan konfirmasi
                                echo '<p>Apakah Anda yakin ingin menghapus data ini?</p>';
                                echo '<form method="POST">';
                                echo '<input type="submit" name="confirm" value="Yes" class="btn btn-danger"> ';
                                echo '<input type="submit" name="confirm" value="No" class="btn btn-primary">';
                                echo '</form>';
                            }
                        } else {
                            echo "<p>Invalid request.</p>";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
