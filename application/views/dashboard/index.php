<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="<?= base_url('') ?>"> Bu Kost</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="<?= base_url('dashboard') ?>">Home</a></li>
							<li><a href="<?= base_url('dashboard/hunian') ?>">Hunian</a></li>
							
							
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
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(<?= base_url('assets/luxe/') ?>images/header1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bu Kost</span></p>
		   						<h2>Reserve Room for Family Vacation</h2>
			   					<p>
			   						<a href="<?= base_url('dashboard/hunian') ?>" class="btn btn-primary btn-lg">Booking</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?= base_url('assets/luxe/') ?>images/header2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bu Kost Hunian</span></p>
		   						<h2>Make Your Vacation Comfortable</h2>
			   					<p>
			   						<a href="<?= base_url('dashboard/hunian') ?>" class="btn btn-primary btn-lg">Booking</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(<?= base_url('assets/luxe/') ?>images/header3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>Bu Kost Hunian</span></p>
		   						<h2>A Best Place To Enjoy Your Life</h2>
			   					<p>
			   						<a href="<?= base_url('dashboard/hunian') ?>" class="btn btn-primary btn-lg">Booking</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</div>

<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?= $jumlah_member ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Member</span>
				</div>
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?= $jumlah_hunian ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Hunian</span>
				</div>
				<div class="col-md-4 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="<?= $jumlah_komplain ?>" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Komplain</span>
				</div>
			</div>
		</div>
	</div>

	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Hunian</h2>
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
	

	
	