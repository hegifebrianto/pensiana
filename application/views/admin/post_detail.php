<?php $this->load->view('admin/header');?>
<?php foreach($posts as $post) {
        $id_posting=$post['id_posting'];
        $tanggal=$post['tanggal'];
        $judul = $post['judul'];
        $isi = $post['isi'];
        $path_gambar = $post['path_gambar'];
        $id_kategori = $post['id_kategori'];
        $highlight = $post['highlight'];
        $popularitas = $post['popularitas'];
        $id_user = $post['id_user'];
    }
?>
<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User
                <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="<?=base_url()?>admin/post">Post</a></li>
                <li class="active">Detail</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <i class="fa fa-text-width"></i>
                            <h3 class="box-title"><?=$judul?> Description</h3>
                        </div>
                        <div class="box-body">
                            <dl class="dl-horizontal">
                                <dt>Id_Posting</dt>
                                <dd><?=$id_posting?></dd>
                                <dt>Tanggal</dt>
                                <dd><?=$tanggal?></dd>
                                <dt>Judul</dt>
                                <dd><?=$judul?></dd>
                                <dt>Isi</dt>
                                <dd><?=$isi?></dd>
                                <dt>Path Gambar</dt>
                                <dd><?=$path_gambar?></dd>
                                <dt>Id Kategori</dt>
                                <dd><?=$id_kategori?></dd>
                                <dt>Highlight</dt>
                                <dd><?=$highlight?></dd>
                                <dt>Popularitas</dt>
                                <dd><?=$popularitas?></dd>
                                <dt>ID User</dt>
                                <dd><?=$id_user?></dd>
                            </dl>
                        </div><!-- /.box-body -->
                        <div class="box-footer with-border">
                            <a href="<?=base_url()?>admin/post" class="btn btn-sm btn-info">
                                <i class="glyphicon glyphicon-repeat"></i> Back
                            </a>
                        </div>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
    
<!-- =============================================== -->
<?php $this->load->view('admin/footer');?>