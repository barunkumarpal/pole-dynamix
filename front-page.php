<?php 
 get_header();
?>
    <!-- Banner section -->
    <div class="banner-container">
      <div class="owl-carousel" id="owl1">        
        <?php 
        if( have_rows('hero_banner') ):

          // Loop through rows.
          while( have_rows('hero_banner') ) : the_row();

              // Load sub field value.
              $image = get_sub_field('image');
              $button_text = get_sub_field('button_text');
              $button_url = get_sub_field('button_url');
              $heading = get_sub_field('heading');
              $sub_heading = get_sub_field('sub_heading');
              // Do something...?>

              <div class="cstm-owl-items">
                <img class="img-fluid" src="<?php echo $image;?>">
                <div class="banner-content container">
                  <p><?php echo $sub_heading; ?> </p>
                  <h1><?php echo $heading; ?></h1>
                  <a class="btn green-button" href="<?php echo $button_url; ?>"><?php echo $button_text; ?></a>
                </div>
              </div>           

        <?php

          // End loop.
          endwhile;

       
        endif;
        ?>          
      
    </div>
    <!-- End of Banner section -->
    <!-- About Section -->
    <section class="about-section">
      <div class="container">
        <div class="row">
          <?php 
          if(get_field('after_banner')){
            $about = get_field('after_banner');
            $left_image = $about['left_image'];
            $right_heading = $about['right_heading'];
            $right_description = $about['right_description'];
            $button_text = $about['button_text'];
            $button_url = $about['button_link'];
          
          }
          ?>
          <div class="col-lg-5">
            <img class="img-fluid" src="<?php echo $left_image; ?>" alt="about-img">
          </div>
          <div class="col-lg-6 offset-lg-1">
            <?php echo $right_heading; ?>
            <?php 
            echo $right_description ;
            ?>

            <a class="btn green-button" href="<?php echo site_url().$button_url; ?>"><?php echo $button_text; ?></a>
          </div>
        </div>
      </div>
    </section>
    <!-- End of About Section -->
    <!-- Featured section -->
    <!-- <section class="featured-section">
      <div class="container" id="featured">
        <div class="main-heading-holder"><h1 class="main-heading">Featured Products</h1></div>
        <div id="owl2" class="owl-carousel">        
          <?php// echo do_shortcode("[featured_products]"); ?>      
        </div>
      </div>      
    </section> -->
    <?php 
// $args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
$args = array(
  'post_type'   => 'product',
  'posts_per_page' => 10,
  'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                      )  
                );

$the_query = new WP_Query( $args ); 

if ( $the_query->have_posts() ) : ?>
  <section class="featured-section">
      <div class="container">
        <div class="main-heading-holder"><h1 class="main-heading">Featured Products</h1></div>
        <div id="owl2" class="owl-carousel">
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
                global $product;
          ?>
          <div class="product_details">
            <div class="product_image">
				<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" class="img-fluid" alt="product" />';?>
			  </div>
            <p class="product_title"><?php the_title(); ?></p>
            <p class="price"><?php echo $product->get_price_html(); ?></p>
            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="add_to_cart">View Product</a>
            <?php //woocommerce_template_loop_add_to_cart( $the_query->post, $product ); ?>
          </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>
      </div>
    </section>
<?php endif; ?>
    <!-- End of Featured section -->
    <!-- Categories section -->
    <section class="categories-section">
      <div class="container">
        <div class="row">          
          <?php 
          if(get_field('featured_topic_1')){
            $featured_topic = get_field('featured_topic_1');
            $image = $featured_topic['image'];
            $heading = $featured_topic['heading'];
            $url = $featured_topic['url'];  
            ?>

            <div class="col-lg-6">
            <div class="ctg-img-holder">
              <a href="<?php echo esc_url(site_url('/').$url);?>">
                <img class="img-fluid ctg-img" src="<?php echo $image;?>" alt="">
                <div class="ctg-block"></div>
                <p class="ctg-name"><?php echo $heading;?></p>
              </a>
              <div class="green-overlay"></div>
            </div>            
          </div>

          <?php     
          }

          if(get_field('featured_topic_2')){
            $featured_topic = get_field('featured_topic_2');
            $image = $featured_topic['image'];
            $heading = $featured_topic['heading'];
            $url = $featured_topic['url'];  
            ?>

            <div class="col-lg-6">
              <div class="ctg-img-holder">
                <a href="<?php echo esc_url(site_url('/').$url);?>">
                  <img class="img-fluid ctg-img" src="<?php echo $image;?>" alt="">
                  <div class="ctg-block"></div>
                  <p class="ctg-name"><?php echo $heading;?></p>
                </a>
                <div class="green-overlay"></div>
              </div>            
          </div>

          <?php     
          }
          ?>
        </div>
      </div>
    </section>
    <!-- End of Categories section -->
    <!-- Offer section -->
    <section class="offer-section">
      <div class="container">
      <?php  
          if(get_field('offer_section')){
            $featured_topic = get_field('offer_section');
            $image = $featured_topic['image'];           
            $url = $featured_topic['url'];  
            ?>
          <a href="<?php echo  $url; ?>">
            <img class="img-fluid" src="<?php echo  $image; ?>" alt="">
          </a> 
          <?php     
          }
          ?>        
      </div>
    </section>
    <!-- End of offer section -->
    
    <!-- Subscribe section -->
    <?php if(get_field('subscribe_section')){
            $field = get_field('subscribe_section');
            $background_image = $field['background_image'];
            $heading = $field['heading'];
          ?>
        <section class="subscribe-section" style="background-image: url('<?php echo $background_image;?>')">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">         
                <p class="subscribe-heading"><?php echo $heading; ?></p>              
              </div>
              <div class="col-lg-5 offset-lg-1 d-flex align-items-center">
                <form class="subscribe-form">
                  <input type="text" class="form-control" placeholder="Email Address">
                  <span>
                  <label class="text-white mt-2">
                  <input type="checkbox" name="mc4wp-subscribe" value="1" />
                  Subscribe to our newsletter.	</label>
                  </span>
                  <div class="input-group-append">
                    <input class="btn btn-dark" type="submit" value="Subscribe">
                  </div>
                  <br>
                  </form>
              </div>
            </div>        
          </div>
        </section>
    <?php } ?>
    <!-- End of Subscribe section -->
   <?php get_footer(); ?>