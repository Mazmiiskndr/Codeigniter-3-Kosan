
                                <br><div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Member</h3>
			            <?= anchor('admin/member/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3"> 
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Member</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/member/tambah_member_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
            
                                <div>
                                    <label class="form-control-label">Nama Member</label>
                                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama Member" class="form-control" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Email Member</label>
                                    <input type="text" id="email" name="email" placeholder="Masukan Email Member" class="form-control" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Password Member</label>
                                    <input type="password" id="password" name="password" placeholder="Masukan Password Member" class="form-control" value="<?= set_value('password') ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                 <div>
                                    <label class="form-control-label">Status Member</label>
                                    <input type="text" id="status" name="status" placeholder="Masukan Status Member" class="form-control" value="<?= set_value('status') ?>">
                                    <?= form_error('status', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">No. HP</label>
                                    <input type="text" id="no_hp" name="no_hp" placeholder="Masukan No. HP Member" class="form-control" value="<?= set_value('no_hp') ?>">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                
                                <br>

                                <div>
                                    <label class="form-control-label">Alamat Member</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">','</small>'); ?>
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