<?php 
require_once "koneksi.php";
// panggil fungsi untuk format tanggal
include "fungsi_tanggal.php";


header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("content-disposition: attachment;filename=DATA-BUKU.xls");
?>

<!-- Buat Table saat di Export Ke Excel -->
<center>
    <h3>DATA NOVEL ANGGARA</h3>
</center>

<table border='1'>
    <h3>
        <thead>
            <tr>
                <th align="center" valign="middle"><center>No</center></th>
                <th align="center" valign="middle"><center>ID Buku</center></th>
                <th align="center" valign="middle"><center>Jenis Kertas</center></th>
                <th align="center" valign="middle"><center>Jumlah Halaman</center></th>
                <th align="center" valign="middle"><center>Jenis Warna</center></th>
                                
            </tr>
        </thead>
    </h3>

    <tbody>
    <?php  
    //$no = 1;
    // fungsi query untuk menampilkan data dari tabel lensa
    //$result = $con->query("SELECT * FROM databuku ORDER BY jenis_kertas ASC")
    //or die('Ada kesalahan pada query tampil data buku: '.$con->error);
    //$rows = $result->num_rows;
    // jika data ada, tampilkan data
    //if ($rows > 0) {
       // while ($data = $result->fetch_assoc()) { ?>
            
        <?php
           
    //    }
    // jika data tidak ada, tampilkan tabel kosong
    //} else { ?>
        <tr>
            <td align="center" valign="top"></td>
            <td align="center" valign="top"></td>
            <td valign="top"></td>
            <td valign="top"></td>
            <td align="center" valign="top"></td>
            <td align="center" valign="top"></td>
            <td valign="top"></td>
            <td align="center" valign="top"></td>
            <td align="center" valign="top"></td>
        </tr>
    <?php
    //}
    ?>
    </tbody>
</table>

<div style="text-align: right">
    <h4>Bandung, <?php echo tgl_eng_to_ind(date("d-m-Y")); ?></h4>
</div>