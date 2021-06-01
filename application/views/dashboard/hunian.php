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
							<li><a class="active" href="<?= base_url('dashboard/hunian') ?>">Hunian</a></li>
						
							

							<?php if(!$this->session->userdata('email')) { ?>

							<li><a href="<?= base_url('auth/login') ?>">Login</a></li>
						<?php }else{ ?>
							<li><a href="<?= base_url('komplain/') ?>">Komplain</a></li>
							<li><a href="<?= base_url('transaksi') ?>">Transaksi</a></li>
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
						<h1 class="text-center">Pilih Hunian Anda</h1>
					</div> 
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
					
						<?= $this->session->flashdata('pesan'); ?>
					</div>
				</div>
			</div>
		</div>

<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
				<?php foreach($kost as $row) { ?>
				<div class="col-md-6">
					<div class="hotel-content">
						<div class="hotel-grid" style="background-image: url(<?= base_url(). 'assets/uploads/kost/'.$row->gambar ?>);">
							<div class="price"><?= ($row->status_hunian == "Available") ? '<small>Available</small>' : '<small>Sold out</small>'; ?><span style="font-size: 13px">Rp. <?=number_format($row->harga_hunian,0,',','.'); ?> / Bulan</span ></div>
							<?php if($row->status_hunian == "Sold Out"){ ?>
								<button type="submit" class=" text-center btn-danger" ><i class="ti-calendar "></i> Sold Out</button>
							<?php }else{ ?>
								<a class="book-now text-center" href="<?= base_url('booking/tambah_booking/').$row->id_hunian ?>"><i class="ti-calendar"></i> Booking</a>
							<?php } ?>
							
						</div>
						<div class="desc">
							<h3><a href="<?= base_url('booking/tambah_booking/').$row->id_hunian ?>"><?= $row->nama_hunian ?></a></h3>
							<p><?= $row->deskripsi_hunian ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
				

			</div>
		</div>
	</div>
</div>