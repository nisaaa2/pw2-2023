<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Siswa</title>
</head>

<body>

    <?php
    // variable untuk menampung data
    $nama_siswa = $_POST['nama nama_lengkap'];
    $mata_kuliah = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai nilai_tugas'];

    $total_nilai = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);
    






    
</body>

</html> 