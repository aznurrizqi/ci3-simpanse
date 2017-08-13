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
        <h2 style="margin-top:0px">Jurnal <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penulis <?php echo form_error('penulis') ?></label>
            <input type="text" class="form-control" name="penulis" id="penulis" placeholder="Penulis" value="<?php echo $penulis; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Abstrak <?php echo form_error('abstrak') ?></label>
            <input type="text" class="form-control" name="abstrak" id="abstrak" placeholder="Abstrak" value="<?php echo $abstrak; ?>" />
        </div>
	    <div class="form-group">
            <label for="year">Tahun <?php echo form_error('tahun') ?></label>
            <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bidang <?php echo form_error('bidang') ?></label>
            <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Bidang" value="<?php echo $bidang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Tipedokumen <?php echo form_error('tipedokumen') ?></label>
            <input type="text" class="form-control" name="tipedokumen" id="tipedokumen" placeholder="Tipedokumen" value="<?php echo $tipedokumen; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bahasaasli <?php echo form_error('bahasaasli') ?></label>
            <input type="text" class="form-control" name="bahasaasli" id="bahasaasli" placeholder="Bahasaasli" value="<?php echo $bahasaasli; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Referensi <?php echo form_error('referensi') ?></label>
            <input type="text" class="form-control" name="referensi" id="referensi" placeholder="Referensi" value="<?php echo $referensi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Link <?php echo form_error('link') ?></label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Link" value="<?php echo $link; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Penerbit <?php echo form_error('penerbit') ?></label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit" value="<?php echo $penerbit; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Isbn <?php echo form_error('isbn') ?></label>
            <input type="text" class="form-control" name="isbn" id="isbn" placeholder="Isbn" value="<?php echo $isbn; ?>" />
        </div>
	    <input type="hidden" name="idjurnal" value="<?php echo $idjurnal; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('jurnal') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>