<?php 
$mahasiswa = [
    [
        "nama" => "Friendly Jihad Taqwana",
        "nim" => "20200040123",
        "jurusan" => "Teknik Informatika",
        "email" => "friendlyjihadtqwana123@gmail.com",
        "nilai"=> 90,
    ],
    [
        "nama" => "Dede",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "dede@gmail.com",
        "nilai"=> 62,
    ],
    [
        "nama" => "Ahmad",
        "nim" => "1234561",
        "jurusan" => "Teknik Informatika",
        "email" => "ahmad@gmail.com",
        "nilai"=> 85,
    ],
];

?>

<table border="1px">

<tr>

<th>Nama</th>

<th>NIM</th>
<th>Jurusan</th>

<th>Email</th>

<th>Nilai</th>

<th>Status</th>

</tr>


<?php
foreach ($mahasiswa as $mhs) {

        echo "<tr>";
        echo "<td>{$mhs['nama']}</td>";
        echo "<td>{$mhs['nim']}</td>";
        echo "<td>{$mhs['jurusan']}</td>";
        echo "<td>{$mhs['email']}</td>";
        echo "<td>{$mhs['nilai']}</td>";

        if ($mhs['nilai'] >= 85) {
            echo "<td>Lulus</td>";
        }
        elseif ($mhs['nilai'] >= 75) {
            echo "<td>Lulus</td>";
        }
        elseif ($mhs['nilai'] >= 65) {
            echo "<td>Lulus</td>";
        }
        else{
            echo "<td>Tidak</td>";
        }
        
        echo "</tr>";
}
?>

</table>
