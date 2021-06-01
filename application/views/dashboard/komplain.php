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
							<li><a class="active" href="<?= base_url('komplain/') ?>">Komplain</a></li>
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
						<h1 class="text-center">Komplain</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

<div id="fh5co-hotel-section">
		<div class="container">
			<div class="row">
			
			
				<form action="<?= base_url('komplain/komplain_aksi') ?>" method="POST">
					
					<div class="form-group">
						<label>Perihal</label>
						<input type="hidden" name="id_member" value="<?= $this->session->userdata('id') ?>">
						<input type="hidden" name="id_hunian" value="<?= $id_hunian ?>">
						
						<input type="text" name="perihal" class="form-control" >
					</div>
					<div class="form-group">
						<label>Masalah</label>
					
						
						<input type="text" name="isi" class="form-control" >
					</div>

					<!-- <?php 
							$d = $dt->durasi;
							$tanggal1 = $dt->tangal_mulai;
							$tanggal2 = date('Y-m-d', strtotime($d,strtotime($tanggal1)));						
					?> -->

				

					<button class="btn btn-primary btn-sm" type="submit">Komplain</button>
					<a class="btn btn-danger btn-sm ml-1" href="<?= base_url('') ?>">Back</a>

				</form>

	
				

			</div>
		</div>
	</div>
</div>