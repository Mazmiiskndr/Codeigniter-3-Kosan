<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?= base_url('') ?>">Bu Kost</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a  href="<?= base_url('dashboard') ?>">Home</a></li>
							<li><a  href="<?= base_url('dashboard/hunian') ?>">Hunian</a></li>
							
							

							<?php if(!$this->session->userdata('email')) { ?>

							<li><a href="<?= base_url('auth/login') ?>">Login</a></li>
						<?php }else{ ?>
							<li><a href="<?= base_url('komplain/') ?>">Komplain</a></li>
							<li><a class="active" href="<?= base_url('transaksi') ?>">Transaksi</a></li>
							<li><a href="<?= base_url('auth/login/logout') ?>">Logout</a></li>
						<?php } ?>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	

<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(<?= base_url('assets/luxe/') ?>images/header1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Invoice Pembayaran</h1>
					</div>
				</div>
			</div>
		</div>
	</div>



<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">

				<div class="card-header alert alert-success text-white">
					<h2 class="text-center">Invoice Pembayaran Anda</h2>
				</div>
				<div class="card-body">
					
					<table class="table table-hover table-bordered shadow-sm p-3 mb-5 bg-white rounded">
						<?php foreach($transaksi as $tr) { ?>
							<tr>
								<th>Nama Hunian</th>
								<td><?= $tr->nama_hunian ?></td>
							</tr>

							<tr>
								<th>Tanggal Mulai</th>
								<td><?= $tr->tanggal_mulai ?></td>
							</tr>

							<tr>
								<th>Durasi Booking</th>
								<td><?= $tr->durasi ?></td>
							</tr>

						

							<tr>
								<th>Biaya Booking/Bulan</th>
								<td>Rp. <?= number_format($tr->harga_hunian,0,',','.') ?></td>
							</tr>

							<tr>
								 <?php 

									$tgl1 =  $tr->tanggal_mulai;
									$tgl2 =  date('Y-m-d',strtotime($tr->durasi,strtotime($tgl1)));

								 ?> 
								 <!-- <?php 

									$x = strtotime($tr->tanggal_mulai);
									$y = strtotime($tr->durasi);
									$jmlHari = abs(($x - $y)/(24*24*12));

								 ?> -->
								<th>Sampai Dengan</th>
								<td><?= $tgl2 ?></td>
							</tr>

							<tr class="text-success">
								<?php 
								$string = $tr->durasi;
								$result = preg_replace("/[^0-9]/", "", $string);
								 ?> 
								
								<th>Jumlah Pembayaran</th>
								<td><button class="btn btn-sm btn-success">Rp. <?= number_format($tr->harga_hunian * $result,0,',','.') ?></button></td>
							</tr>

							 <tr>
								<td><a href="<?= base_url('transaksi/cetak_invoice/'.$tr->id_transaksi) ?>" class="btn btn-sm btn-primary">Print Invoice</a></td>

								<td><a href="<?= base_url('transaksi') ?>" class="btn btn-sm btn-danger">Kembali</a></td>
							</tr>



						
					</table>

				</div> 


				
				 <form action="<?= base_url('transaksi/pembayaran_aksi') ?>" method="POST" enctype="multipart/form-data">
					

					<div class="form-group">
						<label>Transfer Lewat Bank</label>
						
						<select name="bank" class="form-control">
                            <option value="">- Pilih Bank -</option>
                          
                            <option value="BCA">BCA</option>
                            <option value="MANDIRI">MANDIRI</option>
                            <option value="BRI">BRI</option>
                            <option value="BNI">BNI</option>
                            <option value="DANAMON">DANAMON</option>
                          
              
                        </select>
					</div>
					<div class="form-group">
						<label>Nama Rekening</label>
						<input type="hidden" name="id_transaksi" class="form-control" value="<?= $tr->id_transaksi ?>">
						<input type="hidden" name="tanggal_kembali" class="form-control" value="<?= $tgl2 ?>">
						<input type="text" name="nama_rekening" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nomor Rekening</label>
						<input type="text" name="nomor_rekening" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nominal Transfer</label>
						<input type="text" name="nominal_transfer" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Bukti Pembayaran</label>
						<input type="file" id="file-input" name="bukti_pembayaran" class="form-control-file">
					</div>

					<button class="btn btn-info " type="submit">Bayar</button>
					<a class="btn btn-danger  ml-1" href="<?= base_url('booking/transaksi') ?>">Back</a>

				</form>
				<?php } ?>
				
			</div>
		</div>
	</div>
</div>