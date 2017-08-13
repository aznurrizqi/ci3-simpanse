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
        <h2>Taksonomi List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kingdom</th>
		<th>Subkingdom</th>
		<th>Superdivisi</th>
		<th>Divisi</th>
		<th>Kelas</th>
		<th>Subkelas</th>
		<th>Ordo</th>
		<th>Famili</th>
		<th>Genus</th>
		<th>Spesies</th>
		
            </tr><?php
            foreach ($taksonomi_data as $taksonomi)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $taksonomi->kingdom ?></td>
		      <td><?php echo $taksonomi->subkingdom ?></td>
		      <td><?php echo $taksonomi->superdivisi ?></td>
		      <td><?php echo $taksonomi->divisi ?></td>
		      <td><?php echo $taksonomi->kelas ?></td>
		      <td><?php echo $taksonomi->subkelas ?></td>
		      <td><?php echo $taksonomi->ordo ?></td>
		      <td><?php echo $taksonomi->famili ?></td>
		      <td><?php echo $taksonomi->genus ?></td>
		      <td><?php echo $taksonomi->spesies ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>