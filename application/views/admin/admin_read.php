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
        <h2 style="margin-top:0px">Admin Read</h2>
        <table class="table">
	    <tr><td>Nmadmin</td><td><?php echo $nmadmin; ?></td></tr>
	    <tr><td>Usernameadmin</td><td><?php echo $usernameadmin; ?></td></tr>
	    <tr><td>Passwordadmin</td><td><?php echo $passwordadmin; ?></td></tr>
	    <tr><td>Ttladmin</td><td><?php echo $ttladmin; ?></td></tr>
	    <tr><td>Emailadmin</td><td><?php echo $emailadmin; ?></td></tr>
	    <tr><td>Telpadmin</td><td><?php echo $telpadmin; ?></td></tr>
	    <tr><td>Bioadmin</td><td><?php echo $bioadmin; ?></td></tr>
	    <tr><td>Fotoadmin</td><td><?php echo $fotoadmin; ?></td></tr>
	    <tr><td>Wilayah</td><td><?php echo $wilayah; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>