<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                   <h2>Bu Kost</h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?= $this->uri->segment(2) == 'dashboard' ? 'class="active has-sub"' : '' ?>>
                            <a class="js-arrow" href="<?= base_url('admin/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'kost' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/kost') ?>">
                                <i class="fas fa-home"></i>Kost</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'komplain' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/komplain') ?>">
                                <i class="fas fa-comments"></i>Komplain</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'member' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/member') ?>">
                                <i class="fas fa-users"></i>Member</a>
                        </li>
                    
                        <li  <?= $this->uri->segment(2) == 'transaksi' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/transaksi') ?>">
                                <i class="fas fa-handshake-o"></i>Transaksi</a>
                        </li>
                        

                        <li>
                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">