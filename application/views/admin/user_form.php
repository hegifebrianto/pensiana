<?php $this->load->view('admin/header'); ?>
<?php if($action == 'action_add') {
    $user_id = "";
    $user_role = "2";
    $user_name = "";
    $user_password = "";
    $user_fullname = "";
    $user_email = "";
    $user_phone = "";
} elseif ($action == 'action_edit') {
    foreach($users as $user) {
        $user_id = $user['id_user'];
        $user_role = $user['role_user'];
        $user_name = $user['username'];
        $user_password = $user['password'];
        $user_fullname = $user['nama'];
        $user_email = $user['email'];
        $user_phone = $user['telepon'];
    }
} ?>
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
                <li><a href="<?=base_url()?>admin/user">User</a></li>
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
                        <form class="form-horizontal" action="<?=base_url()?>admin/user/form/<?=$action?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="user_name" value="<?=$user_name?>" placeholder="Username"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="password" name="user_password" value="<?=$user_password?>" placeholder="Password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Lengkap</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="user_fullname" value="<?=$user_fullname?>" placeholder="Nama Lengkap"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="email" name="user_email" value="<?=$user_email?>" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Telepon</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="user_phone" value="<?=$user_phone?>" placeholder="Telepon"/>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="user_id" class="form-control" value="<?=$user_id?>">
                                <input type="hidden" name="user_role" class="form-control" value="<?=$user_role?>">
                                <input type="submit" class="btn btn-primary" value="Save">
                                <input type="button" class="btn btn-default" value="Cancel" onclick="window.location.href='<?=base_url()?>admin/user'">
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
    
<!-- =============================================== -->
<?php $this->load->view('admin/footer');?>