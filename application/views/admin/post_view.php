<?php $this->load->view('admin/header');?>
<!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Post
                <small>Management</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active">Post</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <p><?=$this->session->flashdata('message')?> </p>
                            <a href="<?=base_url()?>admin/post/form/add" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-plus"></i> Add Data
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id_Posting</th>
                                        <th>Tanggal</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Path_gambar</th>
                                        <th>Id_kategori</th>
                                        <th>Highlight</th>
                                        <th>Popularitas</th>
                                        <th>Id_user</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($posts)) { ?>
                                    <tr>
                                        <td colspan="6">Data not found</td>
                                    </tr>
                                    <?php } else {
                                    foreach($posts as $post){ ?>
                                    <tr>
                                        <td><?=$post['id_posting']?></td>
                                        <td><?=$post['tanggal']?></td>
                                        <td><?=$post['judul']?></td>
                                        <td><?=$post['isi']?></td>
                                        <td><?=$post['path_gambar']?></td>
                                        <td><?=$post['id_kategori']?></td>
                                        <td><?=$post['highlight']?></td>
                                        <td><?=$post['popularitas']?></td>
                                        <td><?=$post['id_user']?></td>
                                        <!--<td id="tes"><?=$post['isi']?><a id="more" href="#">Read more </a></td>-->
                                        <td align="center">
                                            <a href="<?=base_url()?>admin/post/form/edit/<?=$post['id_posting']?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="<?=base_url()?>admin/post/detail/<?=$post['id_posting']?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="<?=base_url()?>admin/post/delete/<?=$post['id_posting']?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
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