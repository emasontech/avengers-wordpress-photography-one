<?php get_header();?>


   <?php $hero = get_field('hero');?>

  <!--Jumbotron-->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container text-white" style="padding-top: 220px;">
      <h1 class="display-4"><?php echo $hero['main_title'];?></h1>
      <div class="container new pt-3">
        <h3 class="text-center"><?php echo $hero['small_title'];?></h3>
      </div>
    </div>
  </div>
  <header class="header mobile text-center ">
    <div class="container">
        <div class="heading row pt-5">
          <h1 class="display-4"><?php echo $hero['main_title'];?></h1>
        </div>
        <p><?php echo $hero['small_title'];?></p>

        <div>
            <p class="py-3 container">
                iCapture is a Photography Studio based in
                New York.
                We are a team of photographers who
                
                take photographs with creativity, concept
                and passion.
            </p>

            <div class="wedo container text-right">
                <span class="item">We Plan</span>
                <span class="item">We Shoot</span>
                <span class="item">We Retouch</span>
                <span class="item">We Finailze</span>
            </div>
        </div>
    </div>
</header>

  <?php $intro_text = get_field('intro_text');?>
  <!--Intro text-->
  <div class="container">
    <div class="row my-5">
      <div class="col-lg">
        <p class="text-center lead" style="color: #081320; font-size: 25px; line-height: 1;"><?php echo $intro_text;?></p>   
      
      </div>
    </div>    
  </div>

  <!--Services-->
  <div class="container", id="content-desktop">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;">What We Do</h1>
      </div>
    </div>
  </div>

  <?php $description = get_field('description');?>
  <div class="container service-width", id="content-desktop">
    <div class="plan left">
    <?php echo $description['we_plan'];?>
    </div>
    <div class="row service serve", id="content-desktop">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_plan_text'];?></p>
      </div>
    </div>
    <div class="plan right">
    <?php echo $description['we_shoot'];?>
    </div>
    <div class="row service serve", id="content-desktop">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_shoot_text'];?></p>
      </div>
    </div>
    <div class="plan left">
    <?php echo $description['we_retouch'];?>
    </div>
    <div class="row service serve", id="content-desktop">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_retouch_text'];?></p>
      </div>
    </div>
    <div class="plan right">
    <?php echo $description['we_finalize'];?>
    </div>
    <div class="row service serve", id="content-desktop">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_finalize_text'];?></p>
      </div>
    </div>
  </div>

  <!--Latest Shots-->
  <div class="container shots_desktop">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;">Latest Shots</h1>
      </div>
    </div>
  </div>

  <!-- Desktop View of Latest Shots -->
  <div class="container shots_desktop">
    <div class="row">
      <div class="col-lg-2 offset-lg-1">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 48.png" alt="">
      </div>
      <div class="col-lg-8">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 49.png" alt="" id="pic2">
      </div>
      <div class="col-lg-8">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 51 (1).png" alt="" id="pic3">
      </div>
      <div class="col-lg-8">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 52 (1).png" alt="" id="pic5">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 50 (1).png" alt="" id="pic4">
      </div>
      <div class="col-lg-8">
        <img src="<?php bloginfo('template_directory');?>/images/Rectangle 53 (1).png" alt="" id="pic6">
      </div>
    </div>
  </div>
  <!-- Mobile View of Latest Shots -->
  <!-- IMAGE CAROUSEL -->
  <section class="mobile">
    <!-- HEADING -->
        <h2 class="heading-2 showcase_heading">Latest Shots</h2>
        <p class="para-1">Check out some of our latest photoshoot
            collections.</p>

    <div class="container">
        <div class="image_showcase text-center ">
            <!-- CAROUSEL -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <!-- INDICATORS -->
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <!-- IMAGE ONE -->
                  <div class="carousel-item active">
                    <h1 class="heading-2 carousel-caption">1/10</h1>
                    <a href="assets/images/image1.png">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Rectangle 48.png" class="img-fluid" alt="Image One">
                    </a>
                  </div>
                  <!-- IMAGE TWO -->
                  <div class="carousel-item">
                    <h1 class="heading-2 carousel-caption">2/10</h1>
                    <a href="assets/images/image2.jpg">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Rectangle 51 (1).png" class="img-fluid"  alt="Image two">
                    </a>
                  </div>
                  <!-- IMAGE THREE -->
                  <div class="carousel-item">
                    <h1 class="heading-2 carousel-caption">3/10</h1>
                    <a href="assets/images/image3.jpg">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Rectangle 50 (1).png" class="img-fluid" alt="Image Three">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <h1 class="heading-2 carousel-caption">4/10</h1>
                    <a href="assets/images/image3.jpg">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Rectangle 53 (1).png" class="img-fluid" alt="Image Three">
                    </a>
                  </div>
                  <div class="carousel-item">
                    <h1 class="heading-2 carousel-caption">5/10</h1>
                    <a href="assets/images/image3.jpg">
                        <img class="d-block w-100" src="<?php bloginfo('template_directory');?>/images/Rectangle 49.png" class="img-fluid" alt="Image Three">
                    </a>
                  </div>
                </div>
            </div>  
        </div>

        <!-- CAROUSEL CONTROLS -->
        <div class="container mt-2">
            <div class="row ">
                <a class="col btn btn-square  bg-secondary mr-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span  aria-hidden="true">PREVIOUS</span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class=" col btn btn-square" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span  aria-hidden="true">NEXT</span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
  </section>

  <!-- REVIEWS SECTION FOR DESKTOP DEVICE-->

  <?php $customers_reviews = get_field('customers_reviews');?>
  <div class="container review-desktop">
    <div class="row">
      <div class="container head ">
        <h1 class="p-3 showcase_heading" style="color: #0F2862;"><?php echo $customers_reviews['review_text']</h1>
      </div>
    </div>
    <div class="reviews row">
      <div class="first  col-lg-6">
        <p class="lead review" style="color: #0F2862;"><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellat reprehenderit maxime!</q></p>
        <span class="d-block reviewer">Eva c.</span>    
      </div>
      <div class="second col-lg-6">
        <p class="lead review" style="color: #0F2862;"><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellat reprehenderit maxime v!</q></p>  
        <span class="d-block reviewer">mary c.</span>    
      </div>
    </div>
  </div>
    <!-- REVIEWS FOR SMALL DEVICE -->
  <section class="my-5 small-device">
    <h2 class="heading-2 showcase_heading">Customer's Review</h2>
    <p class="para-1">See what some of our customers have to say about their experience with us.</p>
    <div class="container">
        <!-- FIRST REVIEWER -->
        <div class="row mb-3 ">
            <!-- PS: text-local-primary applies a color of dark blue to a text. -->
            <blockquote class="col text-center text-local-primary font-weight-bold align-self-center">
                <img src="<?php bloginfo('template_directory');?>/assets/images/quote-begin.png" class="img-fluid " alt="">
                Lorem ipsum, dolor sit amet consectetur adipisicing.
                <img src="<?php bloginfo('template_directory');?>/assets/images/quote-end.png" class="img-fluid " alt="">
                <footer class="reviewer">
                    EVA S.
                </footer>
            </blockquote>
            <div class="col yellow-bg "></div>
        </div>
        <!-- SECOND REVIEWER -->
        <div class="row ">
            <div class="col yellow-bg"></div>
            <blockquote class="col text-center text-local-primary font-weight-bold  align-self-center">
                <img src="<?php bloginfo('template_directory');?>/assets/images/quote-begin.png" class="img-fluid " alt="">
                 ipsum, dolor sit amet consectetur aconetestant.
                <img src="<?php bloginfo('template_directory');?>/assets/images/quote-end.png" class="img-fluid " alt="">
                <footer class="reviewer">MARY C.</footer>
            </blockquote>
        </div>
    </div>
  </section>
 <!-- FEATURED STORIES FOR DESKTOP DEVICE-->
 <div class="container feature-desktop">
    <div class="row text-center">
      <div class="container head">
        <h1 class="py-3 showcase_heading" style="color: #0F2862;">Featured Stories</h1>
        <p class="lead" style="color: #091F36;">Here, you will find the stories behind the trending shoots from our studio.</p>
      </div>
    </div>
    
    <div class="story row">
      <div class="stories  col-lg-6">
        <div class="content">
          <img src="<?php bloginfo('template_directory');?>/images/Rectangle 78.png"  class="img-fluid" alt="">
          <p class="lead text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi ea</p>
        </div>
        <div class="date">
          20 Nov, 2020
        </div>
      </div>

      <div class="stories  col-lg-6">
        <div class="content">
          <img src="<?php bloginfo('template_directory');?>/images/Rectangle 79.png" class="img-fluid" alt="">
          <p class="lead text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi ea</p>
        </div>
        <div class="date">
          30 Sep, 2020        
        </div>
      </div>

    </div>
  </div>
</div>
   <!-- FEATURED STORIES FOR SMALL DEVICE-->
   <section class="my-5 small-device">
    <!-- HEADING -->
    <h2 class="heading-2 showcase_heading">Featured Stories</h2>
    <p class="para-1">Here, you will find the stories behind the
        trending shoots from our studio.</p>

    <div class="container text-primary">
        <div class="row mb-3 story-card">
            <!--STORY ONE -->
            <div class="col p-0">
                <img src="<?php bloginfo('template_directory');?>/images/person1.png" class="img-thumbnail" alt="">
            </div>
            <div class="col ">
                <time datetime="2020-11-20"><small> 20 Nov, 2020</small></time> 
                <p>
                    Lorem ipsum, dolor sit amet consectetur .
                </p>
                <a href="#">see more &raquo;</a>
            </div>
        </div>
        <!-- STORY TWO -->
        <div class="row story-card">
            <div class="col p-0">
                <img src="<?php bloginfo('template_directory');?>/images/person2.png" class="img-thumbnail" alt="">
            </div>
            <div class="col align-self-center">
                <time datetime="2020-09-18"><small>18 Sep, 2020</small></time>
                <p>
                    ipsum dolor sit amet consectetur lorem.
                </p>
                <a href="#">see more &raquo;</a>
            </div>
        </div>
    </div>
</section>

  <?php get_footer();?>