<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Admin List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nmadmin</th>
		<th>Usernameadmin</th>
		<th>Passwordadmin</th>
		<th>Ttladmin</th>
		<th>Emailadmin</th>
		<th>Telpadmin</th>
		<th>Bioadmin</th>
		<th>Fotoadmin</th>
		<th>Wilayah</th>
		
            </tr><?php
            foreach ($admin_data as $admin)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $admin->nmadmin ?></td>
		      <td><?php echo $admin->usernameadmin ?></td>
		      <td><?php echo $admin->passwordadmin ?></td>
		      <td><?php echo $admin->ttladmin ?></td>
		      <td><?php echo $admin->emailadmin ?></td>
		      <td><?php echo $admin->telpadmin ?></td>
		      <td><?php echo $admin->bioadmin ?></td>
		      <td><?php echo $admin->fotoadmin ?></td>
		      <td><?php echo $admin->wilayah ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>