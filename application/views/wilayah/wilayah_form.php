<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Wilayah <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nmwilayah <?php echo form_error('nmwilayah') ?></label>
            <input type="text" class="form-control" name="nmwilayah" id="nmwilayah" placeholder="Nmwilayah" value="<?php echo $nmwilayah; ?>" />
        </div>
	    <input type="hidden" name="idwilayah" value="<?php echo $idwilayah; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('wilayah') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>