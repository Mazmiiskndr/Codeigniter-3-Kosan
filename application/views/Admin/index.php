<!-- MAIN CONTENT-->
<div class="main-content">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Dashboard</h2>
            <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#controlPanel">
            <i class="fas fa-cogs"></i>Control Panel
        </button>
        </div>
    </div>
</div>
<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-case"></i>
                    </div>
                    <div class="text">
                        <h2>Hunian</h2>
 
                        <h2 class="mt-2"><?= $jumlah_hunian ?></h2>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-accounts"></i>
                    </div>
                    <div class="text">
                        <h2>Member</h2>
                        <h2 class="mt-2"><?= $jumlah_member ?></h2>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-comment"></i>
                    </div>
                    <div class="text">
                        <h2>Komplain</h2>
                        <h2 class="mt-2"><?= $jumlah_komplain ?></h2>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>Pendapatan</h2>
                        <h2 class="mt-2">Rp. 999.999</h2>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-9">
        <h2 class="title-1 m-b-25">Hunian</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Hunian</th>
                        <th>Jenis Hunian</th>
                        <th class="text-right">Harga Hunian</th>
                        <th class="text-right">Status</th>
                        
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach($kost as $row) { ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama_hunian ?></td>
                        <td><?= $row->jenis_hunian ?></td>
                        
                        <td class="text-right">Rp. <?= number_format($row->harga_hunian,0,',','.') ?></td>

                        <td class="text-right"><?= $row->status_hunian ?></td>
                        
                        <td>
                             <?= anchor('admin/kost/detail_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?>
                            <?= anchor('admin/kost/edit_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                            <?= anchor('admin/kost/hapus_kost/'.$row->id_hunian,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-3">
        <h2 class="title-1 m-b-25">Member</h2>
        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
            <div class="au-card-inner">
                <div class="table-responsive">
                    <table class="table table-top-countries">
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach( $users as $row){
                             ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama ?></td>
                                <td class="text-right">
                             <?= anchor('admin/member/edit_member/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
            
                             <?= anchor('admin/member/hapus_member/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>                                                       </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="title-1 m-b-25">Komplain</h2>
<div class="row">
    <div class="col-lg-12">

        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                 <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Member</th>
                        <th>Nama Hunian</th>
                        <th>Perihal</th>
                        <th>Isi Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach( $komplain as $row){
                     ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->nama_hunian ?></td>
                        <td><?= $row->perihal ?></td>
                        <td><?= $row->isi ?></td>
                        <td>
                            
                            <?= anchor('admin/komplain/delete_komplain/'.$row->id_komplain,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
                        </td>
                    </tr>
                    <?php } ?>
                      
                </tbody>
            </table>
        </div>
    
    </div>
</div>