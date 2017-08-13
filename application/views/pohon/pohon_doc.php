<!doctype html>
<html>
    <head>
        <title>Pohon | Simpanse</title>
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
        <h2>Pohon List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Pohon Umum</th>
		<th>Nama Pohon Ilmiah</th>
		<th>Nama Pohon Lokal</th>
		<th>Foto</th>
		<th>Tinggi</th>
		<th>Diameter</th>
		<th>Longitude</th>
		<th>Lattitude</th>
		<th>Wilayah</th>
		<th>Kelangkaan</th>
		<th>Genus</th>
		<th>Morfologi</th>
		<th>Deskripsi</th>
		
            </tr><?php
            foreach ($pohon_data as $pohon)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pohon->nmpohonum ?></td>
		      <td><?php echo $pohon->nmpohonil ?></td>
		      <td><?php echo $pohon->nmpohonlok ?></td>
		      <td><?php echo $pohon->foto ?></td>
		      <td><?php echo $pohon->tinggi ?></td>
		      <td><?php echo $pohon->diameter ?></td>
		      <td><?php echo $pohon->longitude ?></td>
		      <td><?php echo $pohon->lattitude ?></td>
		      <td><?php echo $pohon->wilayah ?></td>
		      <td><?php echo $pohon->kelangkaan ?></td>
		      <td><?php echo $pohon->genus ?></td>
		      <td><?php echo $pohon->morfologi ?></td>
		      <td><?php echo $pohon->deskripsi ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>