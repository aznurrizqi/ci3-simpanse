<!doctype html>
<html>
    <head>
        <title>Pohon | Simpanse</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pohon List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pohon/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pohon/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('pohon/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Pohon Umum</th>
		    <th>Tinggi</th>
		    <th>Diameter</th>
		    <th>Longitude</th>
		    <th>Lattitude</th>
		    <th>Wilayah</th>
		    <th>Genus</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pohon_data as $pohon)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pohon->nmpohonum ?></td>
		    <td><?php echo $pohon->tinggi ?></td>
		    <td><?php echo $pohon->diameter ?></td>
		    <td><?php echo $pohon->longitude ?></td>
		    <td><?php echo $pohon->lattitude ?></td>
		    <td><?php echo $pohon->wilayah ?></td>
		    <td><?php echo $pohon->genus ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('pohon/read/'.$pohon->idpohon),'Read'); 
			echo ' | '; 
			echo anchor(site_url('pohon/update/'.$pohon->idpohon),'Update'); 
			echo ' | '; 
			echo anchor(site_url('pohon/delete/'.$pohon->idpohon),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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