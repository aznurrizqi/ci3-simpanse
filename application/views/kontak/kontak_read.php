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
        <h2 style="margin-top:0px">Kontak Read</h2>
        <table class="table">
	    <tr><td>Nmkontak</td><td><?php echo $nmkontak; ?></td></tr>
	    <tr><td>Emailkontak</td><td><?php echo $emailkontak; ?></td></tr>
	    <tr><td>Telpkontak</td><td><?php echo $telpkontak; ?></td></tr>
	    <tr><td>Pesan</td><td><?php echo $pesan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('kontak') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>