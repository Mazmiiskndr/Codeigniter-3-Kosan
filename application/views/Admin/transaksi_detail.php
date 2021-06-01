
<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1 ml-2"><i class="fas fa-sm fa-eye"></i> Detail Transaksi</h3>
			            <?= anchor('admin/transaksi/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            
			    </div> 
			</div> 
			<?php foreach($detail as $dt) { ?>
			<div class="col-md-12">
			  <img src="<?= base_url(). 'assets/uploads/bukti_pembayaran/'.$dt->bukti_pembayaran ?>" class="img-fluid rounded float-right" alt="..." style="width: 35rem; height: 30rem; padding: 10px;">
			<div class="card mb-3">
			  <div class="card-body">
			   <table class="table table-borderless table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Nama Hunian</th>
				      <th scope="col">:</th>
				      <th scope="col"><?= $dt->nama_hunian ?></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Jenis Hunian</td>
				      <td>:</td>
				      <td><?= $dt->jenis_hunian ?></td>
				    </tr>
				    <tr>
				      <td>Tanggal Mulai</td>
				      <td>:</td>
				      <td><?= $dt->tanggal_mulai ?></td>
				    </tr>
				    <tr>
				    	<?php if($dt->tanggal_kembali == "0000-00'00"){ ?>
				    	<td>Tanggal Kembali</td>
				      <td>:</td>
				      <td>-</td>
				    	<?php }else{ ?>
				    		<td>Tanggal Kembali</td>
				      <td>:</td>
				      <td><?= $dt->tanggal_kembali ?></td>
				    	<?php } ?>
				      
				    </tr>
				    <tr>
				      <td>Harga</td>
				      <td>:</td>
				      <td>Rp. <?= number_format($dt->harga_hunian,0,',','.'); ?></td>
				    </tr>

				    <tr>
				     <td>Status</td>
				      <td>:</td>
				      <td><?php echo ($dt->status_hunian == "Lunas") ? '<b class="text-success">Lunas</b>' : '<b class="text-danger">Belum Selesai</b>'; ?></td>
				    </tr>
				     <tr>
				     <td>Status Pembayaran</td>
				      <td>:</td>
				      <td><?= $dt->status_pembayaran ?></td>
				    </tr>
				     <tr>
				      <td>Durasi Booking</td>
				      <td>:</td>
				      <td><?= $dt->durasi ?></td>
				    </tr>
				    <?php if(!$dt->bank || !$dt->nama_rekening || !$dt->nomor_rekening || !$dt->nominal_transfer ) { ?>
				    	<tr>
					      <td>Bank</td>
					      <td>:</td>
					      <td>-</td>
					    </tr>
					    <tr>
					      <td>Nama Rekening</td>
					      <td>:</td>
					      <td>-</td>
					    </tr>
					    <tr>
					      <td>Nomor Rekening</td>
					      <td>:</td>
					      <td>-</td>
					    </tr>
					    <tr>
					      <td>Nominal Transferr</td>
					      <td>:</td>
					      <td>-</td>
					    </tr>
				    <?php }else{ ?>

				     <tr>
				      <td>Bank</td>
				      <td>:</td>
				      <td><?= $dt->bank ?></td>
				    </tr>
				    <tr>
				      <td>Nama Rekening</td>
				      <td>:</td>
				      <td><?= $dt->nama_rekening ?></td>
				    </tr>
				    <tr>
				      <td>Nomor Rekening</td>
				      <td>:</td>
				      <td><?= $dt->nomor_rekening ?></td>
				    </tr>
				    <tr>
				      <td>Nominal Transferr</td>
				      <td>:</td>
				      <td><?= $dt->nominal_transfer ?></td>
				    </tr>
				    <?php } ?>


				  </tbody>
				</table>
			    <br>
			    <hr>
			    <?= anchor('admin/transaksi/download_pembayaran/'.$dt->id_transaksi,'<div class="btn btn-sm btn-primary"><i class="fas fa-download"></i> Download Bukti Pembayaran</div>') ?>
	            
	            <?= anchor('admin/transaksi/hapus_transaksi/'.$dt->id_transaksi,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
			  </div>
			</div>
	    <?php } ?>
		</div>

			</div>
		</div>
	</div>
</div>

<!-- <div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-lg-6 ">
			<?php foreach($detail as $dt) { ?>
			<div class="col-md-12">
			  <img src="<?= base_url(). 'assets/img/upload/'.$dt->image ?>" class="img-fluid rounded float-right" alt="..." style="width: 18rem; height: 31rem; padding: 10px;">
			<div class="card mb-3">
			  <div class="card-body">
			   <table class="table table-borderless table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Judul Buku</th>
				      <th scope="col">:</th>
				      <th scope="col"><?= $dt->judul_buku ?></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Pengaran</td>
				      <td>:</td>
				      <td><?= $dt->pengarang ?></td>
				    </tr>
				    <tr>
				      <td>Penerbit</td>
				      <td>:</td>
				      <td><?= $dt->penerbit?></td>
				    </tr>
				    <tr>
				      <td>Stok</td>
				      <td>:</td>
				      <td><?= $dt->stok ?></td>
				    </tr>
				    <tr>
				     <td>ISBN</td>
				      <td>:</td>
				      <td><?= $dt->isbn ?></td>
				    </tr>

				    <tr>
				     <td>Tahun Terbit</td>
				      <td>:</td>
				      <td><?= $dt->tahun_terbit ?></td>
				    </tr>
				    <tr>
				     <td>Dipinjam</td>
				      <td>:</td>
				      <td><?= $dt->dipinjam ?></td>
				    </tr>
				    <tr>
				     <td>Dibooking</td>
				      <td>:</td>
				      <td><?= $dt->dibooking ?></td>
				    </tr>
				  </tbody>
				</table>
			    <br>
			    <hr>
	             <?= anchor('admin/produk/edit_produk/'.$dt->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/produk/hapus_produk/'.$dt->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?> -->
<!-- 			  </div>
			</div>
	    <?php } ?>
		</div>
	</div>
</div>  -->