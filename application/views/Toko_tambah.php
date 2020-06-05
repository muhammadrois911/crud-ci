<title><?php echo $header; ?></title>

<?php echo form_open('toko/proses'); ?>

<table>
	<tr>
		<td>Merk</td>
		<td>:</td>
		<td>
			<?php echo form_input('merk', '', array('required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Model</td>
		<td>:</td>
		<td>
			<?php echo form_input('model', '', array('required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('type' => 'number', 'name' => 'stok', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Harga</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('type' => 'number', 'name' => 'harga', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); ?>
		</td>
	</tr>
</table>
<?php echo form_close(); ?>