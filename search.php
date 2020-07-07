<?php get_header(); ?>

<div class="result">
<?php 
if(have_posts()){ ?>
<div class="container-fluid">     
<?php
   while(have_posts()){
    the_post(); ?>
    
        <div class="row text-center justify-content-center">
            <div class="title">                
                <h2>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>                
            </div>
            <div class="content">
               <?php //the_excerpt();?>
            </div>
        </div>    
<?php    
   }
   ?>
</div>
<?php } else{ ?>
 
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 justify-content-center">
            <h2 class="text-center">No Results Found</h2>
        </div>
    </div>
 </div>    
 <?php }
?>
</div>
<?php get_footer(); ?>
<style>
    body{
        height: 100vh !important;
    };
    header{
        margin-bottom: 100px !importantss;
    }
    div.result{
        height: 100vh !important;
        margin-top: 200px;
    }
</style>