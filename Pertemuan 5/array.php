<?php
$mobil = array ("Xenia", "Alphard","BMW");
//var_dump($mobil)
//menampilkan Array berdasarlkan nilai array
// echo $mobil[0];

//menghitung jumlah Array
//echo count ($mobil);
?>

<table border="1" style ="border-collapse : collapes">
    <tr>
        <th>No</th>
        <th>Nama Mobil</th>
    </tr>

    <tr>
        <td>1</td>
        <td><?= $mobil[0]?></td>
    </tr>
    
    <tr>
        <td>2</td>
        <td><?= $mobil[1]?></td>
    </tr>

    <tr>
        <td>3</td>
        <td><?= $mobil[2]?></td>
    </tr>
</table>
<p> Saya Suka Mobil <?= $mobil[0]?> dan saya suka mobil <?= $mobil[1]?>, tetapi saya tidak suka mobil <?= $mobil[2]?></p>