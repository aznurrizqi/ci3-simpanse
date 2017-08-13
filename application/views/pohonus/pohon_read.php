<!doctype html>
<html>
    <head>
        <title>Pohon | Simpanse</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Pohon Read</h2>
        <table class="table">
	    <tr><td>Nama Pohon Umum</td><td><?php echo $nmpohonum; ?></td></tr>
	    <tr><td>Nama Pohon Ilmiah</td><td><?php echo $nmpohonil; ?></td></tr>
	    <tr><td>Nama Pohon Lokal</td><td><?php echo $nmpohonlok; ?></td></tr>
	    <tr><td>Foto</td><td><img src="<?php echo $foto; ?>" width="300" height="300"></td></tr>
	    <tr><td>Diameter</td><td><?php echo $diameter; ?></td></tr>
	    <tr><td>Longitude</td><td><?php echo $longitude; ?></td></tr>
	    <tr><td>Lattitude</td><td><?php echo $lattitude; ?></td></tr>
	    <tr><td>Wilayah</td><td><?php echo $wilayah; ?></td></tr>
	    <tr><td>Kelangkaan</td><td><?php echo $kelangkaan; ?></td></tr>
	    <tr><td>Genus</td><td><?php echo $genus; ?></td></tr>
	    <tr><td>Morfologi</td><td><?php echo $morfologi; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pohon') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>