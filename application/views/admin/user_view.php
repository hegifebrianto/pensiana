<?php $this->load->view('admin/header');?>
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
                <li class="active">User</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <p><?=$this->session->flashdata('message')?> </p>
                            <a href="<?=base_url()?>admin/user/form/add" class="btn btn-sm btn-primary">
                                <i class="glyphicon glyphicon-plus"></i> Add Data
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($users)) { ?>
                                    <tr>
                                        <td colspan="6">Data not found</td>
                                    </tr>
                                    <?php } else {
                                    foreach($users as $user){ ?>
                                    <tr>
                                        <td><?=$user['id_user']?></td>
                                        <td><?=$user['username']?></td>
                                        <td><?=$user['nama']?></td>
                                        <td><?=$user['email']?></td>
                                        <td align="center">
                                            <?php if($user['role_user'] == "1") { ?>
                                            <span class="label label-danger">Administrator</span>
                                            <?php } else { ?>
                                            <span class="label label-primary">User</span>
                                            <?php } ?>
                                        </td>
                                        <td align="center">
                                            <a href="<?=base_url()?>admin/user/form/edit/<?=$user['id_user']?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                                            <a href="<?=base_url()?>admin/user/detail/<?=$user['id_user']?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
                                            <a href="<?=base_url()?>admin/user/delete/<?=$user['id_user']?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
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