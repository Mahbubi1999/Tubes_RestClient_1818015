<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="<?= base_url('Assets/css/materialize.min.css') ?>" media="screen,projection" />
    <title>CHARACTER VALORANT</title>
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
<?php echo form_open('rental_ps/edit');?>
<?php echo form_hidden('ID_console',$datarental_ps->ID_console);?>

<table>
    
    <tr><td>Nama</td><td><?php echo form_input('Nama',$datarental_ps->Nama);?></td></tr>
    <tr><td>Pembuat</td><td><?php echo form_input('Pembuat',$datarental_ps->Pembuat);?></td></tr>
    <tr><td>Tahun_Produksi</td><td><?php echo form_input('Tahun_Produksi',$datarental_ps->Tahun_Produksi);?></td></tr>
    <tr><td>Harga_Sewa</td><td><?php echo form_input('Harga_Sewa',$datarental_ps->Harga_Sewa);?></td></tr>
    <tr><td>Kapasitas</td><td><?php echo form_input('kapasitas',$datarental_ps->kapasitas);?></td></tr>
    <tr><td>Gambar</td><td><?php echo form_input('Gambar',$datarental_ps->Gambar);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('rental_ps','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>

</div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('Assets/js/materialize.min.js') ?>"></script>
    
</body>

</html>