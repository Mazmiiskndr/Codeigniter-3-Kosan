<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<head>
	<link rel="shortcut icon" href="<?= base_url()?>/assets/assets_shop/img/iconcar3.png" type="image/x-icon" />
	<title><?= $title; ?></title>
</head>
<div class="container mt-5 mb-5 mx-auto">
	<div class="row">
 
		<div class="col-md-8">

			<div class="card mx-auto" style="margin-top: 100px;">

				<div class="card-header alert bg-secondary text-danger">
					<h5 class="text-center">Invoice Pembayaran Anda</h5>
				</div>

				<div class="card-body"> 
					
					<table class="table table-hover table-bordered shadow-sm p-3 mb-5 bg-white rounded">
						<?php foreach($transaksi as $tr) { ?>
							<tr>
								<th>Nama Customer</th>
								<td><?= $tr->nama ?></td>
							</tr>

							<tr>
								<th>Nama Hunian</th>
								<td><?= $tr->nama_hunian ?></td>
							</tr>

							<tr>
								<th>Tanggal Mulai</th>
								<td><?= $tr->tanggal_mulai ?></td>
							</tr>

							<tr>
								<th>Tanggal Selesai</th>
								<td><?= $tr->tanggal_kembali ?></td>
							</tr>

							<tr>
								<th>Biaya Sewa/Bulan</th>
								<td>Rp. <?= number_format($tr->harga_hunian,0,',','.') ?></td>
							</tr>

							<tr>
								

								
								
							</tr>

							<tr>
								<th>Status Pembayaran</th>
								<td>
									<?php if($tr->status_pembayaran == 'Belum Lunas'){
										echo "<p class='text-denger'>Belum Lunas</p>";
									}else{
										echo "<p class='text-success'>Lunas</p>";
									} ?>				
								</td>
							</tr>
							<tr>
								<th>Nama Rekening</th>
								<td><?= $tr->nama_rekening ?></td>
							</tr>

							<tr>
								<th>Nomor Rekening</th>
								<td><?= $tr->nomor_rekening ?></td>
							</tr>

							<tr class="text-success">
								
								<th>Jumlah Pembayaran</th>
								<?php 

								$string = $tr->durasi;
								$result = preg_replace("/[^0-9]/", "", $string);
								 ?> 
								<td>Rp. <?= number_format($tr->harga_hunian * $result,0,',','.') ?></td>
							</tr>


						<?php } ?>
					</table>
<script>
	window.print();
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
