<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Jurnal List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('jurnal/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('jurnal/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('jurnal/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
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
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
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
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('jurnal/read/'.$jurnal->idjurnal),'Read'); 
			echo ' | '; 
			echo anchor(site_url('jurnal/update/'.$jurnal->idjurnal),'Update'); 
			echo ' | '; 
			echo anchor(site_url('jurnal/delete/'.$jurnal->idjurnal),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>