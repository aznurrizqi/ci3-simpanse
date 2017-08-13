<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Jurnal Read</h2>
        <table class="table">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Penulis</td><td><?php echo $penulis; ?></td></tr>
	    <tr><td>Abstrak</td><td><?php echo $abstrak; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Bidang</td><td><?php echo $bidang; ?></td></tr>
	    <tr><td>Tipedokumen</td><td><?php echo $tipedokumen; ?></td></tr>
	    <tr><td>Bahasaasli</td><td><?php echo $bahasaasli; ?></td></tr>
	    <tr><td>Referensi</td><td><?php echo $referensi; ?></td></tr>
	    <tr><td>Link</td><td><?php echo $link; ?></td></tr>
	    <tr><td>Penerbit</td><td><?php echo $penerbit; ?></td></tr>
	    <tr><td>Isbn</td><td><?php echo $isbn; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('jurnal') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>