<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Form Pendaftaran</h2>
                    <form method="POST" action="<?= base_url('auth/register') ?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nama Lengkap</label>
                                    <input class="input--style-4" type="text" name="nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>

                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Status</label>
                                    <input class="input--style-4" type="text" name="status">
                                    <?= form_error('status', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                    <?= form_error('email', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                    <?= form_error('password', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No. HP</label>
                                    <input class="input--style-4" type="text" name="no_hp">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                </div>
                            </div>
                        </div>
                     
                        
                        <div class="input-group">
                            <label class="label">Alamat</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <input class="input--style-4" type="text" name="alamat">
                                <?= form_error('alamat', '<small class="text-danger pl-3" style="color: red;">','</small>'); ?>
                                
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                            <br>
                          
                        </div>
 					<a href="<?= base_url('auth/login') ?>" class="p-t-15">Sudah punya akun?</a>
                    </form>

                </div>

            </div>
        </div>
    </div>