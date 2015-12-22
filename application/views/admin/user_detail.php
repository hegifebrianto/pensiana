<?php $this->load->view('admin/header');?>
<?php foreach($users as $user) {
        $user_id = $user['id_user'];
        $user_role = $user['role_user'];
        $user_name = $user['username'];
        $user_password = $user['password'];
        $user_fullname = $user['nama'];
        $user_email = $user['email'];
        $user_phone = $user['telepon'];
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
                <li><a href="<?=base_url()?>admin/category">Category</a></li>
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
                            <h3 class="box-title"><?=$user_name?> Description</h3>
                        </div>
                        <div class="box-body">
                            <dl class="dl-horizontal">
                                <dt>Id</dt>
                                <dd><?=$user_id?></dd>
                                <dt>Role</dt>
                                <dd>
                                    <?php if($user['role_user'] == "1") { ?>
                                    Administrator
                                    <?php } else { ?>
                                    User
                                    <?php } ?>
                                </dd>
                                <dt>Username</dt>
                                <dd><?=$user_name?></dd>
                                <dt>Password</dt>
                                <dd><?=$user_password?></dd>
                                <dt>Nama Lengkap</dt>
                                <dd><?=$user_fullname?></dd>
                                <dt>Email</dt>
                                <dd><?=$user_email?></dd>
                                <dt>Telepon</dt>
                                <dd><?=$user_phone?></dd>
                            </dl>
                        </div><!-- /.box-body -->
                        <div class="box-footer with-border">
                            <a href="<?=base_url()?>admin/user" class="btn btn-sm btn-info">
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