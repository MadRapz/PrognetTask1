<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST["nama"]);
    $nim = htmlspecialchars($_POST["nim"]);
    $status = htmlspecialchars($_POST["status"]);
    $program_studi = htmlspecialchars($_POST["program-studi"]);
    $hobi = htmlspecialchars($_POST["hobi"]);
    $email = htmlspecialchars($_POST["email"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $no_hp = htmlspecialchars($_POST["no-hp"]);

    $sql = "UPDATE tb_formulir SET 
            Nama = '$nama', 
            Nim = '$nim', 
            Status = '$status', 
            Program_Studi = '$program_studi', 
            Hobi = '$hobi', 
            Email = '$email', 
            Alamat = '$alamat', 
            No_HP = '$no_hp'
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Data berhasil diupdate');
        window.location.href = 'detail.php?id=" . $id . "';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
