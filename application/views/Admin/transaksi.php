<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-handshake-o"></i> Data Transaksi</h3>
			           
			            
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
	                    <th>Status Hunian</th>
	                    <th>Harga Hunian</th>
	                    <th>Konfirmasi Pembayaran</th>
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
	            	
	           
	            	 	<td><?= $row->status_hunian ?></td>
	            	 	<td>Rp. <?= number_format($row->harga_hunian,0,',','.'); ?></td>
	            	 	<?php if(!$row->bukti_pembayaran ){ ?>
	            	 		<td>-</td>
	            	 	<?php }else{ ?>
	            	 	<td><a href="<?= base_url('admin/transaksi/pembayaran/').$row->id_transaksi ?>" class="btn btn-sm btn-primary">Konfirmasi Pembayaran</a></td>
	            	 	<?php } ?>
	            	 		            	
	      
	            	 	<td>
	            	 		<?= anchor('admin/transaksi/detail_transaksi/'.$row->id_transaksi,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?>
	            	 
	            	 		
	            	 		<?= anchor('admin/transaksi/hapus_transaksi/'.$row->id_transaksi,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
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