<title><?php echo $header; ?></title>

<style type="text/css">
	table.data{
		border-collapse: collapse;
	}
	table.data th, table.data td{
		padding: 5px;
	}
</style>

<div style="margin-bottom: 20px;">
	<a href="<?php echo site_url('toko/add') ?>"><button>TAMBAH</button></a>
</div>

<table class="data" border="1">
	<tr>
		<th>No.</th>
		<th>Merk</th>
		<th>Seri</th>
		<th>Stok</th>
		<th>Harga</th>
		<th>Opsi</th>
	</tr>
	<?php 
		$no = 1;
		foreach ($toko as $b => $row) { ?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?=$row->merk; ?></td>
		<td><?=$row->model; ?></td>
		<td><?=$row->stok; ?></td>
		<td><?=$row->harga; ?></td>
		<td>
			<a href="<?php echo site_url('toko/edit/'.$row->id_hp); ?>"><button>Edit</button></a>
			<a href="<?php echo site_url('toko/del/'.$row->id_hp); ?>" onclick="return confirm('Yakin mau hapus data ini BOSSS?')"><button>Hapus</button></a>
		</td>
	</tr>
	<?php	
		 } 
	?>
</table>