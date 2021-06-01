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
						<h1 class="text-center">Booking</h1>
					</div>
				</div>
			</div>
		</div>
	</div>



<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Nama Member</th>
	                    <th>Nama Hunian</th>
	                    <th>Tanggal Mulai</th>
	                    <th>Harga Booking</th>
	                  
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 
	            		$no = 1;
	            		foreach( $transaksi as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><?= $row->nama ?></td>
	            	 	<td><?= $row->nama_hunian ?></td>
	            	 	<td><?= $row->tanggal_mulai ?></td>

	         
	            	 	<td>Rp. <?= number_format($row->harga_hunian,0,',','.')  ?></td>
	            	 	<td>
	            	 		<?php if($row->status_pembayaran == "Lunas"){ ?>
	            	 			<div class="btn btn-sm btn-success"><i class="fas fa-trash"></i>Sudah Lunas</div>
	            	 		<?php }elseif($row->status_pembayaran == "Sedang Menunggu Konfirmasi"){ ?>
	            	 			<div class="btn btn-sm btn-warning"><i class="fas fa-trash"></i>Sedang Menunggu Konfirmasi</div>
	            	 		<?php }else{ ?>
	            	 			<?= anchor('transaksi/pembayaran/'.$row->id_transaksi,'<div class="btn btn-sm btn-info"><i class="fas fa-trash"></i>Pembayaran</div>') ?>
	            	 		<?php } ?>
	            	 	</td>
	            
	            	 
	            	</tr>
	            	<?php } ?>
	                  
	            </tbody>
	    	</table>


				</div>

			</div>
		</div>
	</div>
</div>