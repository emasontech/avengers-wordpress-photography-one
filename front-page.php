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
  <div class="container">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;">What We Do</h1>
      </div>
    </div>
  </div>

  <?php $description = get_field('description');?>
  <div class="container service-width">
    <div class="plan left">
    <?php echo $description['we_plan'];?>
    </div>
    <div class="row service serve">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_plan_text'];?></p>
      </div>
    </div>
    <div class="plan right">
    <?php echo $description['we_shoot'];?>
    </div>
    <div class="row service serve">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_shoot_text'];?></p>
      </div>
    </div>
    <div class="plan left">
    <?php echo $description['we_retouch'];?>
    </div>
    <div class="row service serve">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_retouch_text'];?></p>
      </div>
    </div>
    <div class="plan right">
    <?php echo $description['we_finalize'];?>
    </div>
    <div class="row service serve">
      <div class="col-lg-8 mx-auto">
        <p class="lead text-justify"><?php echo $description['we_finalize_text'];?></p>
      </div>
    </div>
  </div>

  <!--Latest Shots-->
  <div class="container">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;">Latest Shots</h1>
      </div>
    </div>
  </div>

  <div class="container">
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


  <?php $customers_reviews = get_field('customers_reviews');?>
  <div class="container">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;"><?php echo $customers_reviews['review_text'];?></h1>
      </div>
    </div>
    <div class="reviews">
      <div class="first">
        <p class="lead review"><q><?php echo $customers_reviews['left_side'];?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellat reprehenderit maxime voluptatibus laborum!</q></p>
      </div>
      <div class="second">
        <p class="lead review"><q><?php echo $customers_reviews['right_side'];?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid repellat reprehenderit maxime volupatibus laborum!</q></p>      
      </div>
  </div>

  <!--Stories-->
  <div class="container">
    <div class="row text-center">
      <div class="container head">
        <h1 class="p-3" style="color: #0F2862;">Featured Stories</h1>
        <p class="lead" style="color: #091F36; font-size: 20px;">Here, you will find the stories behind the trending shoots from our studio.</p>
      </div>
    </div>
    
    <div class="story">
      <div class="stories" style="margin-left: 6%;">
        <div class="content">
          <img src="<?php bloginfo('template_directory');?>/images/Rectangle 78.png" alt="">
          <p class="lead text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi ea</p>
        </div>
        <div class="date">
          20 Nov, 2020
        </div>
      </div>
      <div class="stories" style="margin-right: 6%;">
        <div class="content">
          <img src="<?php bloginfo('template_directory');?>/images/Rectangle 79.png" alt="">
          <p class="lead text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eligendi ea</p>
        </div>
        <div class="date">
          30 Sep, 2020        
        </div>
      </div>

    </div>
  </div>

  <?php get_footer();?>