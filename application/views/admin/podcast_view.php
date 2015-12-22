<?php $this->load->view('admin/header');?>
<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Category
                <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Category</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <p><?=$this->session->flashdata('message')?> </p>
                            <a href="<?=base_url()?>admin/podcast/form/add" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-plus"></i> Add Data
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id_Podcast</th>
                                        <th>Judul Podcast</th>
                                        <th>File Podcast</th>
                                        <th>Tanggal Podcast</th>
                                        <th>Deskripsi Podcast</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($podcast)) { ?>
                                    <tr>
                                        <td colspan="6">Data not found</td>
                                    </tr>
                                    <?php } else {
                                    foreach($podcast as $podcast){ ?>
                                    <tr>
                                        <td><?=$podcast['id_podcast']?></td>
                                        <td><?=$podcast['judul_podcast']?></td>
                                        <td align="center">
                                            <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php }} ?>
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
      
<!-- =============================================== -->
<?php $this->load->view('admin/footer');?>