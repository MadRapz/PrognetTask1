<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('../Picture/bg.jpg');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">Detail Data</h3><br>
                        <?php
                        include 'koneksi.php';

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM tb_formulir WHERE id = $id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<table class="table">';
                                echo '<tr><td><strong>Nama:</strong></td><td>' . $row['Nama'] . '</td></tr>';
                                echo '<tr><td><strong>NIM:</strong></td><td>' . $row['Nim'] . '</td></tr>';
                                echo '<tr><td><strong>Status:</strong></td><td>' . $row['Status'] . '</td></tr>';
                                echo '<tr><td><strong>Program Studi:</strong></td><td>' . $row['Program_Studi'] . '</td></tr>';
                                echo '<tr><td><strong>Hobi:</strong></td><td>' . $row['Hobi'] . '</td></tr>';
                                echo '<tr><td><strong>Email:</strong></td><td>' . $row['Email'] . '</td></tr>';
                                echo '<tr><td><strong>Alamat:</strong></td><td>' . $row['Alamat'] . '</td></tr>';
                                echo '<tr><td><strong>No. Handphone:</strong></td><td>' . $row['No_HP'] . '</td></tr>';
                                echo '</table>';
                            } else {
                                echo "<p>Data not found.</p>";
                            }
                        } else {
                            echo "<p>Invalid request.</p>";
                        }

                        $conn->close();
                        ?>

                    <a href="showform.php" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
