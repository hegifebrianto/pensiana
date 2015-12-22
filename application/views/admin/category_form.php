<?php $this->load->view('admin/header'); ?>
<?php if($action == 'action_add') {
    $category_id="";
    $category_name="";
} elseif ($action == 'action_edit') {
    foreach($categories as $category) {
        $category_id=$category['id_kategori'];
        $category_name=$category['nama_kategori'];
    }
} ?>
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
                <li><a href="<?=base_url()?>admin/category">Category</a></li>
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
                        <form class="form-horizontal" action="<?=base_url()?>admin/category/form/<?=$action?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama Kategori</label>
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="category_name" value="<?=$category_name?>" placeholder="Nama Kategori"/>
                                    </div>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <input type="hidden" name="category_id" class="form-control" value="<?=$category_id?>">
                                <input type="submit" class="btn btn-primary" value="Save">
                                <input type="button" class="btn btn-default" value="Cancel" onclick="window.location.href='<?=base_url()?>admin/category'">
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
<!-- =============================================== -->
<?php $this->load->view('admin/footer');?>