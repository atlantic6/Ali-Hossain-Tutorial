<?php 
/**
 * this template for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?> "class="no-js">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Document</title>
</head>
<body <?php body_class(); ?> >
<div id="header_area">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href=""><img src="<?php echo get_theme_mod('ruby_logo');?> " alt=""></a> 
      </div>
       <div class="col-md-9">
        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
      
      </div>
    </div>
  </div>
</div>





<?php wp_footer(); ?>
</body>
</html>












<!-- /* body section set this nav menu and drop down menu static way */ -->


<!-- <div id="header_area">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href=""><img src="<?php echo get_theme_mod('ruby_logo');?> " alt=""></a> 
      </div>
       <div class="col-md-9">
        <ul id="nav">
          <li><a href=""> Home </a></li>
          <li><a href=""> About US </a></li>
          <li><a href=""> Media </a></li>
          <li><a href=""> Download </a></li>
          <li><a href=""> Project </a></li>
          <li><a href=""> Service </a>
          <ul>
            <li><a href="">Dropdown Menu</a></li>
            <li><a href="">Dropdown Menu</a></li>
            <li><a href="">Dropdown Menu</a>
            <ul>
              <li><a href="">Dropdown Menu</a></li>
              <li><a href="">Dropdown Menu</a></li>
              <li><a href="">Dropdown Menu</a></li>
              <li><a href="">Dropdown Menu</a></li>
              <li><a href="">Dropdown Menu</a></li>
              <li><a href="">Dropdown Menu</a></li>
          </ul>
            </li>
            <li><a href="">Dropdown Menu</a></li>
            <li><a href="">Dropdown Menu</a></li>
            <li><a href="">Dropdown Menu</a></li>
          </ul>
          </li>  
          <li><a href=""> FAQ </a></li>
          <li><a href=""> Contact US </a></li>

        </ul>
      </div>
    </div>
  </div>
</div> -->
