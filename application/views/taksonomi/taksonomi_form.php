<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Taksonomi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kingdom <?php echo form_error('kingdom') ?></label>
            <input type="text" class="form-control" name="kingdom" id="kingdom" placeholder="Kingdom" value="<?php echo $kingdom; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Subkingdom <?php echo form_error('subkingdom') ?></label>
            <input type="text" class="form-control" name="subkingdom" id="subkingdom" placeholder="Subkingdom" value="<?php echo $subkingdom; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Superdivisi <?php echo form_error('superdivisi') ?></label>
            <input type="text" class="form-control" name="superdivisi" id="superdivisi" placeholder="Superdivisi" value="<?php echo $superdivisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Divisi <?php echo form_error('divisi') ?></label>
            <input type="text" class="form-control" name="divisi" id="divisi" placeholder="Divisi" value="<?php echo $divisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelas <?php echo form_error('kelas') ?></label>
            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Subkelas <?php echo form_error('subkelas') ?></label>
            <input type="text" class="form-control" name="subkelas" id="subkelas" placeholder="Subkelas" value="<?php echo $subkelas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Ordo <?php echo form_error('ordo') ?></label>
            <input type="text" class="form-control" name="ordo" id="ordo" placeholder="Ordo" value="<?php echo $ordo; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Famili <?php echo form_error('famili') ?></label>
            <input type="text" class="form-control" name="famili" id="famili" placeholder="Famili" value="<?php echo $famili; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Genus <?php echo form_error('genus') ?></label>
            <input type="text" class="form-control" name="genus" id="genus" placeholder="Genus" value="<?php echo $genus; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Spesies <?php echo form_error('spesies') ?></label>
            <input type="text" class="form-control" name="spesies" id="spesies" placeholder="Spesies" value="<?php echo $spesies; ?>" />
        </div>
	    <input type="hidden" name="idtaksonomi" value="<?php echo $idtaksonomi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('taksonomi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>