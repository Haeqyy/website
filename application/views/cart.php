<div class="container-fluid">
	<h4>Keranjang Belanja</h4>

	<table class="table table-bordered table-striped teble-hover">
		<tr>
			<th>NO</th>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Sub-Total</th>
		</tr>

		<?php 
			$no=1;
			foreach ($this->cart->contents() as $items) :  ?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $items['name'] ?></td>
					<td><?php echo $items['qty'] ?></td>
					<td align="right">$ <?php echo number_format($items['price'], 0,',','.')?></td>
					<td align="right">$ <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
				</tr>
				
			<?php endforeach; ?>

				<tr>
					<td colspan="4"></td>
					<td align="right">$ <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
				</tr>
	</table>

	<div align="right">
		<a href="<?php echo base_url('dashboard/deleteCart') ?>"><div class="btn btn-sm btn-danger">Delete Cart</div></a>
		<a href="<?php echo base_url('dashboard') ?>"><div class="btn btn-sm btn-primary">Back</div></a>
		<a href="<?php echo base_url('dashboard/payment') ?>"><div class="btn btn-sm btn-success">Payment</div></a>
	</div>
	
</div>