<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Hunian</h3>
			            <?= anchor('admin/kost/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Hunian</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($kost as $row) { ?>
                        	<form action="<?= base_url('admin/kost/update_kost_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Kategori</label>
                                     <input type="hidden" id="id_hunian" name="id_hunian" class="form-control" value="<?= $row->id_hunian ?>">
                                    <select name="jenis_hunian" class="form-control">
                                            <option value="<?= $row->jenis_hunian  ?>"><?= $row->jenis_hunian ?></option>
                                           
                                            <option value="Kontrakan">Kontrakan</option>
                                            <option value="Kosan">Kosan</option>
                                            
                              
                                        </select>
                                    <?= form_error('jenis_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Nama Hunian</label>
                                    <input type="text" id="nama_hunian" name="nama_hunian" class="form-control" value="<?= $row->nama_hunian ?>">
                                    <?= form_error('nama_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Harga Hunian</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="harga_hunian" value="<?= $row->harga_hunian ?>" class="form-control" id="harga_hunian">
                                  </div>
                                    <?= form_error('harga_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                
                                
                                
                                <br>
                                <div>
                                    <label class="form-control-label">Status Hunian</label>
                                    <select name="status_hunian" class="form-control">
                                            <option value="<?= $row->status_hunian  ?>"><?= $row->status_hunian ?></option>
                                            <option value="Available">Available</option>
                                            <option value="Sold Out">Sold Out</option>
                              
                                        </select>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="form-control-label">Deskripsi Hunian</label>
                                    <textarea class="form-control" id="deskripsi_hunian" name="deskripsi_hunian" rows="3"><?= $row->deskripsi_hunian ?></textarea>
                                    <?= form_error('deskripsi_hunian', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                    <label class="mt-2 form-control-label">Upload Photo</label>
                                    <input type="file" id="file-input" name="userfile" class="form-control-file" value="<?= $row->gambar ?>">               
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