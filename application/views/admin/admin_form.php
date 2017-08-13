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
        <h2 style="margin-top:0px">Admin <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nmadmin <?php echo form_error('nmadmin') ?></label>
            <input type="text" class="form-control" name="nmadmin" id="nmadmin" placeholder="Nmadmin" value="<?php echo $nmadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Usernameadmin <?php echo form_error('usernameadmin') ?></label>
            <input type="text" class="form-control" name="usernameadmin" id="usernameadmin" placeholder="Usernameadmin" value="<?php echo $usernameadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Passwordadmin <?php echo form_error('passwordadmin') ?></label>
            <input type="text" class="form-control" name="passwordadmin" id="passwordadmin" placeholder="Passwordadmin" value="<?php echo $passwordadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Ttladmin <?php echo form_error('ttladmin') ?></label>
            <input type="text" class="form-control" name="ttladmin" id="ttladmin" placeholder="Ttladmin" value="<?php echo $ttladmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Emailadmin <?php echo form_error('emailadmin') ?></label>
            <input type="text" class="form-control" name="emailadmin" id="emailadmin" placeholder="Emailadmin" value="<?php echo $emailadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Telpadmin <?php echo form_error('telpadmin') ?></label>
            <input type="text" class="form-control" name="telpadmin" id="telpadmin" placeholder="Telpadmin" value="<?php echo $telpadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="bioadmin">Bioadmin <?php echo form_error('bioadmin') ?></label>
            <textarea class="form-control" rows="3" name="bioadmin" id="bioadmin" placeholder="Bioadmin"><?php echo $bioadmin; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Fotoadmin <?php echo form_error('fotoadmin') ?></label>
            <input type="text" class="form-control" name="fotoadmin" id="fotoadmin" placeholder="Fotoadmin" value="<?php echo $fotoadmin; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Wilayah <?php echo form_error('wilayah') ?></label>
            <input type="text" class="form-control" name="wilayah" id="wilayah" placeholder="Wilayah" value="<?php echo $wilayah; ?>" />
        </div>
	    <input type="hidden" name="idadmin" value="<?php echo $idadmin; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('admin') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>