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
						<h1 class="text-center">Booking</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
				<?php foreach( $detail as $dt) { ?>

				<form action="<?= base_url('booking/tambah_aksi_booking') ?>" method="POST">
					
					<div class="form-group">
						<label>Harga Sewa / Bulan</label>
						<input type="text" name="harga_hunian" class="form-control" value="<?= $dt->harga_hunian ?>" readonly>
					</div>
					<div class="form-group">
						<label>Nama Hunian</label>
						<input type="hidden" name="id_hunian" value="<?= $dt->id_hunian ?>">
						<input type="hidden" name="id_member" value="<?= $this->session->userdata('id') ?>">
						<input type="text" name="harga" class="form-control" value="<?= $dt->nama_hunian ?>" readonly>
						
					</div>

					<div class="form-group">
						<label>Tanggal Mulai</label>
						<input type="date" name="tanggal_mulai" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Durasi</label>

						<select class="form-control" name="durasi" >
					      <option value="+1 month">1 Bulan</option>
					      <option value="+2 month">2 Bulan</option>
					      <option value="+3 month">3 Bulan</option>
					      <option value="+4 month">4 Bulan</option>
					      <option value="+5 month">5 Bulan</option>
					      <option value="+6 month">6 Bulan</option>
					      <option value="+12 month">12 Bulan</option>
					      
					    </select>
					</div>

					<!-- <?php 
							$d = $dt->durasi;
							$tanggal1 = $dt->tangal_mulai;
							$tanggal2 = date('Y-m-d', strtotime($d,strtotime($tanggal1)));						
					?> -->

				

					<button class="btn btn-primary btn-sm" type="submit">Booking</button>
					<a class="btn btn-danger btn-sm ml-1" href="<?= base_url('') ?>">Back</a>

				</form>

			<?php } ?>
				

			</div>
		</div>
	</div>
</div>