<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Diri</title>
    <!-- Sertakan stylesheet yang sama dari formdatadiri.php -->
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-image: url('Picture/bg.jpg');">
    <div class="container center-containform">
        <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
            <div class="col-lg-12 mb-1 mb-sm-1">
                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-6">
                    <div class="col-lg-6 px-xl-10">
                        <h3 class="h2 text-black mb-0">FORMULIR DATA DIRI</h3><br>
                        <?php
                        // Check if the form is submitted
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Retrieve and sanitize form data
                            $nama = htmlspecialchars($_POST["nama"]);
                            $nim = htmlspecialchars($_POST["nim"]);
                            $status = htmlspecialchars($_POST["status"]);
                            $program_studi = htmlspecialchars($_POST["program-studi"]);
                            $hobi = htmlspecialchars($_POST["hobi"]);
                            $email = htmlspecialchars($_POST["email"]);
                            $alamat = htmlspecialchars($_POST["alamat"]);
                            $no_hp = htmlspecialchars($_POST["no-hp"]);

                            // Display the submitted data in a table with the same style
                            echo '<table class="table">';
                            echo '<tr><td><strong>Nama:</strong></td><td>' . $nama . '</td></tr>';
                            echo '<tr><td><strong>NIM:</strong></td><td>' . $nim . '</td></tr>';
                            echo '<tr><td><strong>Status:</strong></td><td>' . $status . '</td></tr>';
                            echo '<tr><td><strong>Program Studi:</strong></td><td>' . $program_studi . '</td></tr>';
                            echo '<tr><td><strong>Hobi:</strong></td><td>' . $hobi . '</td></tr>';
                            echo '<tr><td><strong>Email:</strong></td><td>' . $email . '</td></tr>';
                            echo '<tr><td><strong>Alamat:</strong></td><td>' . $alamat . '</td></tr>';
                            echo '<tr><td><strong>No. Handphone:</strong></td><td>' . $no_hp . '</td></tr>';
                            echo '</table>';                            
                        } else {
                            echo "<p>No data submitted.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
