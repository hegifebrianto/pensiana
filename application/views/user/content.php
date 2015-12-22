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
