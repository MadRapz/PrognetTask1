<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Formulir</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('../Picture/bg.jpg');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">DATA FORMULIR</h3><br>
                        <?php
                        include 'koneksi.php';

                        $sql = "SELECT id, Nama, Nim FROM tb_formulir";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            echo '<table class="table">';
                            echo '<tr><th>No</th><th>Nama</th><th>NIM</th><th>Action</th></tr>';
                            $counter = 1;
                            while($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $counter . '</td>';
                                echo '<td>' . $row['Nama'] . '</td>';
                                echo '<td>' . $row['Nim'] . '</td>';
                                echo '<td><a href="detail.php?id=' . $row['id'] . '"><i class="fa-solid fa-circle-info"></i></a> ';
                                echo '<a href="delete.php?id=' . $row['id'] . '"><i class="fa-regular fa-trash-can" style="color: #fa0000;"></i></a> ';
                                echo '<a href="edit.php?id=' . $row['id'] . '"><i class="fa-solid fa-pen-to-square" style="color: #000000;"></i></a></td>';
                                echo '</tr>';
                                $counter++;
                            }
                            echo '</table>';
                        } else {
                            echo "<p>No data available.</p>";
                        }

                        $conn->close();
                        ?>

                        <a href="../index.html" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>
