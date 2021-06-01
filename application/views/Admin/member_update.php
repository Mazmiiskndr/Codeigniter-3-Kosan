<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Member</h3>
			            <?= anchor('admin/member/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Member</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($users as $row) { ?>
                        	<form action="<?= base_url('admin/member/update_member_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">

                                <div>
                                    <label class="form-control-label">Nama Member</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $row->id ?>">
                                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $row->nama ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Email Member</label>
                                
                                    <input type="text" id="email" name="email" class="form-control" value="<?= $row->email ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Password Member</label>
                                
                                    <input type="password" id="password" name="password" class="form-control" value="<?= $row->password ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Status Member</label>
                                
                                    <input type="text" id="status" name="status" class="form-control" value="<?= $row->status ?>">
                                    <?= form_error('status', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">No. HP</label>
                                
                                    <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $row->no_hp ?>">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>

                                
                                <div>
                                    <label class="form-control-label">Alamat Member</label>
                                    <textarea class="form-control" id="alamat" name="alamat" rows="3"><?= $row->alamat ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger pl-3">','</small>'); ?>             
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