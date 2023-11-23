<a href="<?php echo base_url('anggota/tambah');?>"> Tambah anggota Baru</a>

<TABLE>
    <th>ANGGOTA</th>
    <th>ALAMAT</th>
    <th>UBAH</th>
    <th>HAPUS</th>
    <?php foreach($anggota as $a): ?>
    <TR>     
        <TD><?php echo $a['anggota']?></TD>
        <TD><?php echo $a['alamat']?></TD>
        <TD><a href="<?php echo site_url('anggota/get_edit/'.$a['idanggota']);?>"> UBAH </a></TD>
        <TD><a href="<?php echo site_url('anggota/hapus/'.$a['idanggota']);?>"> HAPUS </a></TD>
    </TR>
    <?php endforeach;?>
</TABLE>