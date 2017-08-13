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
        <h2>Jurnal List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Judul</th>
		<th>Penulis</th>
		<th>Abstrak</th>
		<th>Tahun</th>
		<th>Bidang</th>
		<th>Tipedokumen</th>
		<th>Bahasaasli</th>
		<th>Referensi</th>
		<th>Link</th>
		<th>Penerbit</th>
		<th>Isbn</th>
		
            </tr><?php
            foreach ($jurnal_data as $jurnal)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $jurnal->judul ?></td>
		      <td><?php echo $jurnal->penulis ?></td>
		      <td><?php echo $jurnal->abstrak ?></td>
		      <td><?php echo $jurnal->tahun ?></td>
		      <td><?php echo $jurnal->bidang ?></td>
		      <td><?php echo $jurnal->tipedokumen ?></td>
		      <td><?php echo $jurnal->bahasaasli ?></td>
		      <td><?php echo $jurnal->referensi ?></td>
		      <td><?php echo $jurnal->link ?></td>
		      <td><?php echo $jurnal->penerbit ?></td>
		      <td><?php echo $jurnal->isbn ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>