<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-shopping-cart"></i> Pesanan</h3>
			            
			    </div> 
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Nama Member</th>
	                    <th>Nama Hunian</th>
	                    <th>No. Hp</th>
	                    <th>Tanggal Mulai</th>
	                    <th>Durasi</th>
	                    <th>Status Pembayaran</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 
	            		$no = 1;
	            		foreach( $pesan as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><?= $row->nama ?></td>
	            	 	<td><?= $row->nama_hunian ?></td>
	            	 	<td><?= $row->no_hp ?></td>
	            	 	<td><?= $row->tanggal_mulai ?></td>
	            	 	<td><?= $row->durasi ?></td>
	            	 	<td><?= $row->status_pembayaran ?></td>
	            	 	<td>
	            	 		
	            	 		<?= anchor('admin/pesan/edit_pesan/'.$row->id_pesan,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            	 		
	            	 		<?= anchor('admin/pesan/hapus_pesan/'.$row->id_pesan,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
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