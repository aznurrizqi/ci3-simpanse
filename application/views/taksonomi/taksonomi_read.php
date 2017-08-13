<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Taksonomi Read</h2>
        <table class="table">
	    <tr><td>Kingdom</td><td><?php echo $kingdom; ?></td></tr>
	    <tr><td>Subkingdom</td><td><?php echo $subkingdom; ?></td></tr>
	    <tr><td>Superdivisi</td><td><?php echo $superdivisi; ?></td></tr>
	    <tr><td>Divisi</td><td><?php echo $divisi; ?></td></tr>
	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
	    <tr><td>Subkelas</td><td><?php echo $subkelas; ?></td></tr>
	    <tr><td>Ordo</td><td><?php echo $ordo; ?></td></tr>
	    <tr><td>Famili</td><td><?php echo $famili; ?></td></tr>
	    <tr><td>Genus</td><td><?php echo $genus; ?></td></tr>
	    <tr><td>Spesies</td><td><?php echo $spesies; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('taksonomi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>