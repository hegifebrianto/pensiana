<?php $this->load->view('admin/header');?>
<?php foreach($categories as $category) {
        $category_id=$category['id_kategori'];
        $category_name=$category['nama_kategori'];
    }
?>
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
                            <h3 class="box-title"><?=$category_name?> Description</h3>
                        </div>
                        <div class="box-body">
                            <dl class="dl-horizontal">
                                <dt>Id</dt>
                                <dd><?=$category_id?></dd>
                                <dt>Nama Kategori</dt>
                                <dd><?=$category_name?></dd>
                            </dl>
                        </div><!-- /.box-body -->
                        <div class="box-footer with-border">
                            <a href="<?=base_url()?>admin/category" class="btn btn-sm btn-info">
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