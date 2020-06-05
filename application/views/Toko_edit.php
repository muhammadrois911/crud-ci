<title><?php echo $header; ?></title>

<?php echo form_open('toko/proses', '', array('id' => $toko->id_hp)); ?>

<table>
	<tr>
		<td>Merk</td>
		<td>:</td>
		<td>
			<?php echo form_input('merk', $toko->merk, array('required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Model</td>
		<td>:</td>
		<td>
			<?php echo form_input('model', $toko->model, array('required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('type' => 'number', 'name' => 'stok', 'value' => $toko->stok, 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('type' => 'number', 'name' => 'harga', 'value' => $toko->harga, 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<?php echo form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Simpan perubahan')); ?>
		</td>
	</tr>
</table>
<?php echo form_close(); ?>