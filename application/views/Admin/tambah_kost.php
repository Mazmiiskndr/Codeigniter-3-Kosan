
                                <br><div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Hunian</h3>
			            <?= anchor('admin/kost/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3"> 
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Hunian</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/kost/tambah_kost_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Jenis Hunian</label>
                                    <select name="jenis_hunian" class="form-control">
                                            <option value="">- Pilih Jenis Hunian -</option>
                                        
                                            <option value="Kontrakan">Kontrakan</option>
                                            <option value="Kosan">Kosan</option>
    
                              
                                        </select>
                                    <?= form_error('jenis_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Nama Hunian</label>
                                    <input type="text" id="nama_hunian" name="nama_hunian" placeholder="Masukan Nama Hunian" class="form-control" value="<?= set_value('nama_hunian') ?>">
                                    <?= form_error('nama_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Harga Hunian</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="harga_hunian" value="<?php echo set_value('harga_hunian'); ?>" placeholder="Masukan Harga Hunian Produk" class="form-control" id="harga_hunian">
                                  </div>
                                    <?= form_error('harga_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                
                                
                        
                                
                                <br>
                                <div>
                                    <label class="form-control-label">Status Hunian</label>
                                    <select name="status_hunian" class="form-control">
                                            <option value="">- Pilih Status -</option>
        
                                            <option value="Available">Available</option>
                                            <option value="Sold Out">Sold Out</option>

                              
                                        </select>
                                    <?= form_error('status_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Deskripsi Hunian</label>
                                    <textarea class="form-control" id="deskripsi_hunian" name="deskripsi_hunian" rows="3"></textarea>
                                    <?= form_error('deskripsi_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Gambar Hunian</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">               
                                </div>
                                <br>
                                 <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-floppy-o fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Simpan</span>
                                     
                                    </button>
                                </div>
                            </form>
                        </div>
                        	
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>