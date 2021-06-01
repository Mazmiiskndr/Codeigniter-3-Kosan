<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-home"></i> Kost</h3>
						<?= $this->session->flashdata('pesan'); ?>
			            <?= anchor('admin/kost/tambah_kost','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Kost
			            </button>') ?>
			            
			    </div> 
			</div> 
			<?php foreach($kost as $row) { ?>
			<div class="ml-3 card shadow-sm" style="width: 20rem;">
			  <img src="<?= base_url(). 'assets/uploads/kost/'.$row->gambar ?>" class="card-img-top">
			  <div class="card-body">
			    <h5 class="card-title"><?= $row->nama_hunian ?></h5>
			    <h6 class="card-text">Jenis Hunian : <?= $row->jenis_hunian ?></h6>
			    <br>
			   
			    <p class="card-text">Rp. <?=number_format($row->harga_hunian,0,',','.'); ?></p>
			    <p class="card-text"><?= ($row->status_hunian == "Available") ? '<p class="text-success">Available</p>' : '<p class="text-danger">Sold out</p>'; ?></p>
			    <br>
			    <hr>
			    <?= anchor('admin/kost/detail_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?>
	            <?= anchor('admin/kost/edit_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/kost/hapus_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>

			  </div>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>