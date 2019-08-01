<?php 

  //pull in contents of header.php
  get_header();

  //Main loop that iterates over all posts in Wordpress website
  while(have_posts()){

    the_post(); ?>
   
   <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title() ?></h1>
      <div class="page-banner__intro">
        <p>DON'T FORGET TO REPLACE ME LATER</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
      if( $theParent != 0){
    ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

    <?php
      }     
     ?>
    
    <?php  

      //get a list of pages that are children of this page - if nothing is returned
      // this value will be falsey
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));

      //test to see if this page is a parent or has a list of children pages.
      //if it fits either condition, then display the side-bar menu.
      if($theParent or $testArray) { 
    ?>

    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent) ?>"><?php echo get_the_title($theParent) ?></a></h2>
      <ul class="min-list">
        <?php 
         

          if($theParent != 0){
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          //this wordpress function creates a li items for each page in the website with some configuration given
          // by an associate array : 'title_li' tells if it should show a title in the list of pages and
          // 'child_of' tells it to only list pages that are children of a given page id
          // this list also has classes associated with it that can be formated, including 'current_page' so that we
          // can style the currently selected page
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>

    <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
     
  <?php }

  //pull in contents of footer.php
  get_footer(); 
  
?>