<form action="<?php echo base_url('anggota/update');?>" method="post">
     <label>Anggota</label>
     <input type="text" name="anggota" value="<?php echo $anggota?>">
     <input type="hidden" name="idanggota" value="<?php echo $idanggota?>">

     <div>
     <label>Alamat</label>
     <input type="text" name="alamat" value="<?php echo $alamat?>">
     <div>
     <input type="submit" name="simpan" value="Simpan">
</form>
     
