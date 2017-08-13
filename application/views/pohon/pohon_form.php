<!doctype html>
<html>
    <head>
        <title>Pohon | Simpanse</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
    </head>
    <body>
        <h2 style="margin-top:0px">Pohon <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama Pohon Umum <?php echo form_error('nmpohonum') ?></label>
            <input type="text" class="form-control" name="nmpohonum" id="nmpohonum" placeholder="Masukkan nama pohon umum" value="<?php echo $nmpohonum; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Pohon Ilmiah <?php echo form_error('nmpohonil') ?></label>
            <input type="text" class="form-control" name="nmpohonil" id="nmpohonil" placeholder="Masukkan nama pohon ilmiah" value="<?php echo $nmpohonil; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Pohon Lokal <?php echo form_error('nmpohonlok') ?></label>
            <input type="text" class="form-control" name="nmpohonlok" id="nmpohonlok" placeholder="Masukkan nama pohon lokal" value="<?php echo $nmpohonlok; ?>" />
        </div>

        <!-- edit ke upload-->
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <?php echo form_open_multipart('./upload/');?>
            <input type="file" class="form-control" id="foto" name="foto" value="<?php echo $foto; ?>"/>
        </div>
	    <div class="form-group">
            <label for="int">Tinggi (dalam m)<?php echo form_error('tinggi') ?></label>
            <input type="text" class="form-control" name="tinggi" id="tinggi" placeholder="Masukkan nilai tinggi" value="<?php echo $tinggi; ?>"/>
        </div>
	    <div class="form-group">
            <label for="int">Diameter (dalam cm)<?php echo form_error('diameter') ?></label>
            <input type="text" class="form-control" name="diameter" id="diameter" placeholder="Masukkan nilai diameter" value="<?php echo $diameter; ?>"/>
        </div>
	    <div class="form-group">
            <label for="double">Longitude (ex: 110.843868)<?php echo form_error('longitude') ?></label>
            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Masukkan nilai longitude" value="<?php echo $longitude; ?>" />
        </div>
	    <div class="form-group">
            <label for="double">Lattitude (ex: -7.554895)<?php echo form_error('lattitude') ?></label>
            <input type="text" class="form-control" name="lattitude" id="lattitude" placeholder="Masukkan nilai Lattitude" value="<?php echo $lattitude; ?>" />
        </div>

        <!-- edit ke dropdown-->
	    <div class="form-group">
            <label for="varchar">Wilayah <?php echo form_error('wilayah') ?></label>
            <input type="text" class="form-control" name="wilayah" id="wilayah" placeholder="Wilayah" value="<?php echo $wilayah; ?>" />
        </div>

        <!-- edit ke radiobutton-->
	    <div class="form-group">
            <label for="varchar">Kelangkaan <?php echo form_error('kelangkaan') ?></label>
            <input type="text" class="form-control" name="kelangkaan" id="kelangkaan" placeholder="Kelangkaan" value="<?php echo $kelangkaan; ?>" />
        </div>

	    <!-- edit ke dropdown-->
        <div class="form-group">
            <label for="varchar">Genus <?php echo form_error('genus') ?></label>
            <input type="text" class="form-control" name="genus" id="genus" placeholder="Genus" value="<?php echo $genus; ?>" />
        </div>
	    <div class="form-group">
            <label for="morfologi">Morfologi <?php echo form_error('morfologi') ?></label>
            <textarea class="form-control" rows="3" name="morfologi" id="morfologi" placeholder="Masukkan keterangan morfologi pohon"><?php echo $morfologi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="deskripsi">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Masukkan deskripsi pohon"><?php echo $deskripsi; ?></textarea>
        </div>
	    <input type="hidden" name="idpohon" value="<?php echo $idpohon; ?>" /> 
	    <button type="submit" name="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pohon') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>