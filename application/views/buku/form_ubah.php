<form action="<?php echo base_url('buku/update');?>" method="post">
     <label>Judul</label>
     <input type="text" name="judul" value="<?php echo $judulbuku?>">
     <div>
     <label>Penerbit</label>
     <input type="text" name="penerbit" value="<?php echo $penerbit?>">
     <div>
     <div>
     <label>Pengarang</label>
     <input type="text" name="pengarang" value="<?php echo $pengarang?>">
     <div>
     <input type="hidden" name="id" value="<?php echo $id?>">
     <input type="submit" name="simpan" value="Simpan">
</form>
     
