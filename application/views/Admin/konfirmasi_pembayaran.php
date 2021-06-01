<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-check-circle"></i> Konfirmasi Pembarayan</h3>
			            <?= anchor('admin/transaksi/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Konfirmasi Pembayaran</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($pembayaran as $row) { ?>
                        	<form action="<?= base_url('admin/transaksi/cek_pembayaran') ?>" class="form-group" method="post" enctype="multipart/form-data">

                                <div>
                                    <label class="form-control-label">Konfirmasi Pembayaran</label>
                                    <input type="hidden" id="id_transaksi" name="id_transaksi" class="form-control" value="<?= $row->id_transaksi ?>">
                                    <select name="status_pembayaran" id="" class="form-control">
                                        <option value="<?= $row->status_pembayaran ?>"><?= $row->status_pembayaran ?></option>
                                        <option value="Lunas">Lunas</option>
                                        <option value="Sedang Menunggu Konfirmasi">Sedang Menunggu Konfirmasi</option>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                    </select>
                                    <?= form_error('nama_member', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <a href="<?= base_url('admin/transaksi/download_pembayaran/'.$row->id_transaksi) ?>" class="btn btn-primary">Download Bukti Pembayaran</a>
                                </div>
                                <br>
                                 <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                     
                                    </button>
                                </div>
                            </form>
                        	<?php } ?>
                        </div>
                        	
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>