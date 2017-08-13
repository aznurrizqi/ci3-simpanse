<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Taksonomi List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('taksonomi/create'), 'Create', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('taksonomi/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('taksonomi/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
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
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
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
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('taksonomi/read/'.$taksonomi->idtaksonomi),'Read'); 
			echo ' | '; 
			echo anchor(site_url('taksonomi/update/'.$taksonomi->idtaksonomi),'Update'); 
			echo ' | '; 
			echo anchor(site_url('taksonomi/delete/'.$taksonomi->idtaksonomi),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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