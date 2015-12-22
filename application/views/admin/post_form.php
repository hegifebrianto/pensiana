<?php $this->load->view('admin/header'); ?>
<?php if($action == 'action_add') {
    $id_posting="";
    $tanggal="";        
    $judul = "";
    $isi = "";
    $path_gambar = "";
    $id_kategori = "";
    $highlight = "";
    $popularitas = "";
    $id_user = "";
} elseif ($action == 'action_edit') {
    foreach($posts as $post) {
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
} ?>
<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Posting
                <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="<?=base_url()?>admin/post">Post</a></li>
                <li class="active">Form</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <p><?=$this->session->flashdata('message')?> </p>
                        </div>
                        <form class="form-horizontal" action="<?=base_url()?>admin/post/form/<?=$action?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tanggal</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="user_name" value="<?=$tanggal?>" placeholder="Tanggal Posting"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Judul</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="Judul" value="<?=$judul?>" placeholder="Judul Posting"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Isi</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="isi" value="<?=$isi?>" placeholder="isi"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Path Gambar</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="path_gambar" value="<?=$path_gambar?>" placeholder="path gambar"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">ID_kategori</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="id_kategori" value="<?=$id_kategori?>" placeholder="id_kategori"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Highlight</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="highlight" value="<?=$highlight?>" placeholder="highlight"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Popularitas</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="popularitas" value="<?=$popularitas?>" placeholder="Popularitas"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Id_user</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="id_user" value="<?=$id_user?>" placeholder="id user"/>
                                    </div>
                                </div>    

                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="id_posting" class="form-control" value="<?=$id_posting?>">
                                <input type="submit" class="btn btn-primary" value="Save">
                                <input type="button" class="btn btn-default" value="Cancel" onclick="window.location.href='<?=base_url()?>admin/post'">
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
<!-- =============================================== -->
<?php $this->load->view('admin/footer');?>