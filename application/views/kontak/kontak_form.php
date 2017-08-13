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
        <h2 style="margin-top:0px">Kontak <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nmkontak <?php echo form_error('nmkontak') ?></label>
            <input type="text" class="form-control" name="nmkontak" id="nmkontak" placeholder="Nmkontak" value="<?php echo $nmkontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Emailkontak <?php echo form_error('emailkontak') ?></label>
            <input type="text" class="form-control" name="emailkontak" id="emailkontak" placeholder="Emailkontak" value="<?php echo $emailkontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telpkontak <?php echo form_error('telpkontak') ?></label>
            <input type="text" class="form-control" name="telpkontak" id="telpkontak" placeholder="Telpkontak" value="<?php echo $telpkontak; ?>" />
        </div>
	    <div class="form-group">
            <label for="pesan">Pesan <?php echo form_error('pesan') ?></label>
            <textarea class="form-control" rows="3" name="pesan" id="pesan" placeholder="Pesan"><?php echo $pesan; ?></textarea>
        </div>
	    <input type="hidden" name="idkontak" value="<?php echo $idkontak; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('kontak') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>