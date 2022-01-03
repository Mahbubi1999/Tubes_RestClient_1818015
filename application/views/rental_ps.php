<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('Assets/css/materialize.min.css') ?>" media="screen,projection" />
    <title>PLAYSTATION</title>
</head>

<body>
<div class="navbar-fixed ">
        <nav class="#f57f17 yellow darken-4">
            <div class="nav-wrapper container ">
                <a href="#" class="brand-logo">PLAYSTATION</a>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="topnav right hide-on-med-and-down">
                    <li><a href="<?= base_url('rental_ps') ?>">Tampilan Playstation</a></li>
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="container">
        
<font color="orange">
    
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<br>
<div>
<a class="#00e676 green accent-3 btn" href="<?= base_url('rental_ps/create') ?>"> TAMBAH DATA</a>
</div>
<br>


<table class="centered" border="1">
   <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Pembuat</th>
        <th>TahunProduksi</th>
        <th>HargaSewa</th>
        <th>Kapasitas</th>
        <th>Gambar</th>
    </tr>

    <?php
    foreach ($datarental_ps as $rental){
         echo "<tr>
              <td>$rental->ID_console</td>
              <td>$rental->Nama</td>
              <td>$rental->Pembuat</td>
              <td>$rental->Tahun_Produksi</td>
              <td>$rental->Harga_Sewa</td>
              <td>$rental->kapasitas</td>
              
              <td><img src=".$rental->Gambar." width='200' height='100'></td>
              
              <td>".anchor('rental_ps/edit/'.$rental->ID_console,'Edit')."
                ".anchor('rental_ps/delete/'.$rental->ID_console,'Delete')."
                </td>
              </tr>";
             
    } 
    ?>
</table>
<script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
</body>

</html>