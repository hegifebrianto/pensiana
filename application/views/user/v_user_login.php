<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PENSIANA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url();?>"><strong>PENSIANA</strong></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="">POSTING</a>
                    </li>
					<li>
                        <a href="#">TERBARU</a>
                    </li>
                    <li>
                        <a href="#">HIGHLIGHT</a>
                    </li>
                    <li>
                        <a href="#">TERPOPULER</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">KATEGORI<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php foreach($categories as $category) { ?>
                            <li>
                                <a href="#"><?php echo $category->nama_kategori?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PODCAST</a>
                    </li>
                    <li>
                        <a href="#">LANGGANAN</a>
                    </li>
					<li>
                        <a href="#">LOGOUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $max = findMax($posts->result_array());
            foreach ($posts->result_array() as $post) {
                if ($post['id_posting'] == $max) { ?>
            <div class="item active">
                <div class="fill" style="background-image:url('<?php echo base_url($post['path_gambar']); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php echo $post['judul']; ?></h2>
                </div>
            </div>
                <?php } else { ?>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo base_url($post['path_gambar']); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php echo $post['judul']; ?></h2>
                </div>
            </div>
                <?php } ?>
            <?php } ?>
            <!--<div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>-->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">

          <div class="col-md-3">
            <div class="col-lg-12">
                <h1 class="page-header">
                   HIGHLIGHT
                </h1>
            </div>
            <?php foreach ($highlights->result_array() as $highlight) { ?>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div><center></center></div>
                        <h4><i class=""></i><center><?php echo $highlight['judul']; ?></center></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo "Oleh ".$highlight['nama']; ?></p>
                        <a href="<?=base_url();?>article?id=<?php echo $highlight['id_posting'] ?>" class="btn btn-default">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>

          <div class="col-md-9">
            <div class="col-lg-12">
                <h1 class="page-header">
                   ARTIKEL TERBARU
                </h1>
            </div>
            <?php foreach ($posts->result_array() as $post) { ?>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div><center></center></div>
                        <h4><i class=""></i><center><?php echo $post['judul']; ?></center></h4>
                        <h5><i class=""></i><center><?php echo $post['tanggal']." oleh ".$post['nama']; ?></center></h5>
                    </div>
                    <div class="panel-body">
                        <p><?php echo excerpts($post['isi'])." ..."; ?></p>
                        <a href="<?=base_url();?>article?id=<?php echo $post['id_posting'] ?>" class="btn btn-default">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <!-- /.row -->


        <!-- Portfolio Section -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <!--<div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.2.0</strong>
                    </li>
                    <li>jQuery v1.11.0</li>
                    <li>Font Awesome v4.1.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <!--<div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.js');?>" ></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" ></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>

</body>

</html>

<?php
    function excerpts($content, $word_limit = 30)
    {
        $words = explode(" ",$content);
        return implode(" ",array_splice($words,0,$word_limit));
    }

    function findMax($arr)
    {
      $max = -9999999;
      $found_item = null;

      foreach($arr as $k=>$v)
      {
        if($v['id_posting']>$max)
        {
           $max = $v['id_posting'];
           $found_item = $v;
        }
      }

      return $max;
    }
?>
