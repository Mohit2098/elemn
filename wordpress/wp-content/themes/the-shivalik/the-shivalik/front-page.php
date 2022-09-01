<?php
/**
* The main template file
*<?php
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package The_Shivalik
*/
get_header();
?>
<section class="home">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            
            <?php
            $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'breaking-news',
            'posts_per_page' => 5,
            'paged' => $paged,
            );
           $count=0;
            $arr_posts = new WP_Query( $args);
            
            if ( $arr_posts->have_posts() ) :
            
            while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();$count++;

            ?>
            <?php if($count==1):?>
            <div class="item active">
              <?php else:?>
              <div class="item">
                <?php endif;?>
                
          
                <?php
                if ( has_post_thumbnail() ) :
                the_post_thumbnail();
                endif;
                ?>
                <a href="<?php the_permalink();?>" class="carousel-inner">
                  
                  <?php the_category(); ?>
                </a>
                <h1><?php the_title();?></h1>
                
              </div>
              <?php
              endwhile;
              endif;
              ?>
            </div>
            
          </div>
          




          <!-- Latest News -->



          <div class="line">
            <div>Latest News</div>
          </div>
          <div class="row">
            
            
           
              <?php

             
 $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'DESC',
                'posts_per_page'=> 4, 
                'numberposts'=>2,
                
              );


            $arr_posts = new WP_Query( $args );
            
            if($arr_posts->have_posts()):
              while ( $arr_posts->have_posts() ):
                $arr_posts->the_post();
             ?>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="row">
                <article class="article col-md-12">
                  <div class="inner">
                    <figure>
                      <?php if(has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                      </a>
                      <?php endif; ?>
                    </figure>
                    <div class="padding">
                      <div class="detail">
                        <div class="time"><?php echo get_the_date();?></div>
                        <div class="category"><a href="<?php the_permalink(); ?>"><?php the_category();?></a></div>
                      </div>
                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php the_excerpt(); ?></p>
                      <footer>
                        <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                        <a class="btn btn-primary more" href="<?php the_permalink(); ?>">
                          <div>More</div>
                          <div><i class="ion-ios-arrow-thin-right"></i></div>
                        </a>
                      </footer>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
            
          </div>
          <div class="banner">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ads.png" alt="Sample Article">
            </a>
          </div>

<!-- Latest News End -->





          <!-- Trending tags -->

          <div class="line transparent little"></div>
          <div class="row">
            <div class="col-md-6 col-sm-6 trending-tags">
              <h1 class="title-col">Trending Tags</h1>
              <div class="body-col">
                <ol class="tags-list">
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">CSS3</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">jQuery</a></li>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">Responsive</a></li>
                  <li><a href="#">AuteIrure</a></li>
                  <li><a href="#">Voluptate</a></li>
                  <li><a href="#">Veit</a></li>
                  <li><a href="#">Reprehenderit</a></li>
                </ol>
              </div>
            </div>



<!-- Trending Tag End -->




            <!-- < Hot News-->
             <div class="col-md-6 col-sm-6">
           
              <h1 class="title-col">
              Hot News
              <div class="carousel-nav" id="hot-news-nav">
                <div class="prev">
                  <i class="ion-ios-arrow-left"></i>
                </div>
                <div class="next">
                  <i class="ion-ios-arrow-right"></i>
                </div>
              </div>
              </h1>
<div class ="body-col vertical-slider" data-max="4" data-nav="#hot-news-nav" data-item="article">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li></ol>
                

              
            
            <?php
            $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
            $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
         'category'=>'latest-news',
            'posts_per_page' => 5,
            'paged' => $paged,
            );
            $count=0;
            $arr_posts = new WP_Query( $args);
            
            if ( $arr_posts->have_posts() ) :
            
            while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post(); $count++;
            ?>


            
            <?php if($count==1):?>
            <div class="item active">
              <?php else:?>
              <div class="item">
              <?php endif;?>
  <article class ="article-mini">
              
                    <figure>
                 
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                      </a>

                    </figure>
                    <div class="padding">
                      <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                      <div class="detail">
                        <div class="category"> <a href="<?php the_permalink();?>"><?php the_category();?></a></div>
                        <div class="time"><?php echo get_the_date();?></div>
                      </div> 
                      </div></div>          
                    <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
               
                   </div>
                  </div>
             
               </article>
                 </div>
                </div>

         
                <!-- Hot News End -->
                





<!-- Just Another News -->
              
          <div class="line top">
            <div>Just Another News</div>
          </div>
          <div class="row">
               <?php

             
 $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'DESC',
                'posts_per_page'=> 4, 
                'numberposts'=>2,
                
              );


            $arr_posts = new WP_Query( $args );
            
            if($arr_posts->have_posts()):
              while ( $arr_posts->have_posts() ):
                $arr_posts->the_post();
             ?>
            <article class="col-md-12 article-list">
              <div class="inner">
                <figure>
                  <?php if(has_post_thumbnail() ) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                      
                      <?php endif;?>
                </figure>
                <div class="details">
                  <div class="detail">
                    <div class="category">
                      <a href="<?php the_permalink();?>"><?php the_category(); ?></a>
                    </div>
                    <div class="time"><?php echo get_the_date();?></div>
                  </div>
                  <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
                  
                  <footer>
                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
                    <a class="btn btn-primary more" href="single.html">
                      <div>More</div>
                      <div><i class="ion-ios-arrow-thin-right"></i></div>
                    </a>
                  </footer>
                </div>

            

        
              
            </article>

           <?php endwhile;
            endif;
            wp_reset_postdata();
            ?> 

          </div>
        </div>

<!-- End -->





        <!-- Sidebar -->



        <div class="col-xs-6 col-md-4 sidebar" id="sidebar">
          <div class="sidebar-title for-tablet">Sidebar</div>
          <aside>
            <div class="aside-body">
              <div class="featured-author">
                <div class="featured-author-inner">
                  <div class="featured-author-cover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img15.jpg');">
                    <div class="badges">
                      <div class="badge-item"><i class="ion-star"></i> Featured</div>
                    </div>
                    <div class="featured-author-center">
                      <figure class="featured-author-picture">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img01.jpg" alt="Sample Article">
                      </figure>
                      <div class="featured-author-info">
                        <h2 class="name">John Doe</h2>
                        <div class="desc">@JohnDoe</div>
                      </div>
                    </div>
                  </div>
                  <div class="featured-author-body">
                    <div class="featured-author-count">
                      <div class="item">
                        <a href="#">
                          <div class="name">Posts</div>
                          <div class="value">208</div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="name">Stars</div>
                          <div class="value">3,729</div>
                        </a>
                      </div>
                      <div class="item">
                        <a href="#">
                          <div class="icon">
                            <div>More</div>
                            <i class="ion-chevron-right"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="featured-author-quote">
                      "Eur costrict mobsa undivani krusvuw blos andugus pu aklosah"
                    </div>
                    <div class="block">
                      <h2 class="block-title">Photos</h2>
                      <div class="block-body">
                        <ul class="item-list-round" data-magnific="gallery">
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img06.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img06.jpg');"></a></li>
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img07.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img07.jpg');"></a></li>
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img08.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img08.jpg');"></a></li>
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img09.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img09.jpg');"></a></li>
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img10.jpg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/news/img10.jpg');"></a></li>
                          <li><a href="<?php echo get_template_directory_uri(); ?>/images/news/img11.jpg" style="background-image: url('images/news/img11.jpg');"></a></li>
                          <li><a href="images/news/img12.jpg" style="background-image: url('images/news/img12.jpg');"><div class="more">+2</div></a></li>
                          <li class="hidden"><a href="images/news/img13.jpg" style="background-image: url('images/news/img13.jpg');"></a></li>
                          <li class="hidden"><a href="images/news/img14.jpg" style="background-image: url('images/news/img14.jpg');"></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="featured-author-footer">
                      <a href="#">See All Authors</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <aside>
            <h1 class="aside-title">Popular <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
            <div class="aside-body">
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img07.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img14.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img09.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img11.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="<?php echo get_template_directory_uri();?>/single.html">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img06.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">neque est semper nulla, ac elementum risus quam a enim</a></h1>
                  </div>
                </div>
              </article>
              <article class="article-mini">
                <div class="inner">
                  <figure>
                    <a href="single.html">
                      <img src="<?php echo get_template_directory_uri();?>/images/news/img03.jpg" alt="Sample Article">
                    </a>
                  </figure>
                  <div class="padding">
                    <h1><a href="single.html">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
                  </div>
                </div>
              </article>
            </div>
          </aside>
          <aside>
            <div class="aside-body">
              <form class="newsletter">
                <div class="icon">
                  <i class="ion-ios-email-outline"></i>
                  <h1>Newsletter</h1>
                </div>
                <div class="input-group">
                  <input type="email" class="form-control email" placeholder="Your mail">
                  <div class="input-group-btn">
                    <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                  </div>
                </div>
                <p>By subscribing you will receive new articles in your email.</p>
              </form>
            </div>
          </aside>
          <aside>
            <ul class="nav nav-tabs nav-justified" role="tablist">
              <li class="active">
                <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                  <i class="ion-android-star-outline"></i> Recomended
                </a>
              </li>
              <li>
                <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                  <i class="ion-ios-chatboxes-outline"></i> Comments
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="recomended">
                <article class="article-fw">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="<?php echo get_template_directory_uri();?>/images/news/img16.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="details">
                      <div class="detail">
                        <div class="time">December 31, 2016</div>
                        <div class="category"><a href="category.html">Sport</a></div>
                      </div>
                      <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                      <p>
                        Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis.
                      </p>
                    </div>
                  </div>
                </article>
                <div class="line"></div>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="<?php echo get_template_directory_uri();?>/images/news/img05.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Lifestyle</a></div>
                        <div class="time">December 22, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="<?php echo get_template_directory_uri();?>/images/news/img02.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Travel</a></div>
                        <div class="time">December 21, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
                <article class="article-mini">
                  <div class="inner">
                    <figure>
                      <a href="single.html">
                        <img src="<?php echo get_template_directory_uri();?>/images/news/img10.jpg" alt="Sample Article">
                      </a>
                    </figure>
                    <div class="padding">
                      <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                      <div class="detail">
                        <div class="category"><a href="category.html">Healthy</a></div>
                        <div class="time">December 20, 2016</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="tab-pane comments" id="comments">
                <div class="comment-list sm">
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="<?php echo get_template_directory_uri();?>/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="<?php echo get_template_directory_uri();?>/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="user">
                      <figure>
                        <img src="<?php echo get_template_directory_uri();?>/images/img01.jpg" alt="User Picture">
                      </figure>
                      <div class="details">
                        <h5 class="name">Mark Otto</h5>
                        <div class="time">24 Hours</div>
                        <div class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <aside>
            <h1 class="aside-title">Videos
            <div class="carousel-nav" id="video-list-nav">
              <div class="prev"><i class="ion-ios-arrow-left"></i></div>
              <div class="next"><i class="ion-ios-arrow-right"></i></div>
            </div>
            </h1>
            <div class="aside-body">
              <ul class="video-list" data-youtube='"carousel":true, "nav": "#video-list-nav"'>
                <li><a data-youtube-id="SBjQ9tuuTJQ" data-action="magnific"></a></li>
                <li><a data-youtube-id="9cVJr3eQfXc" data-action="magnific"></a></li>
                <li><a data-youtube-id="DnGdoEa1tPg" data-action="magnific"></a></li>
              </ul>
            </div>
          </aside>
          <aside id="sponsored">
            <h1 class="aside-title">Sponsored</h1>
            <div class="aside-body">
              <ul class="sponsored">
                <li>
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri();?>/images/sponsored.png" alt="Sponsored">
                  </a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>


<!-- Sidebar End -->





  <section class="best-of-the-week">
    <div class="container">
      <h1><div class="text">Best Of The Week</div>
      <div class="carousel-nav" id="best-of-the-week-nav">
        <div class="prev">
          <i class="ion-ios-arrow-left"></i>
        </div>
        <div class="next">
          <i class="ion-ios-arrow-right"></i>
        </div>
      </div>
      </h1>
     <div class="ms">
        <?php

             
 $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'DESC',
                'posts_per_page'=> 4, 
               
                
              );


            $arr_posts = new WP_Query( $args );
            
            if($arr_posts->have_posts()):
              while ( $arr_posts->have_posts() ):
                $arr_posts->the_post();
             ?>

        <article class="article">
      

     
          <div class="inner">

           
            <figure>
    
                     
                        <?php the_post_thumbnail('medium'); ?>
                
                  
                        
                 
            </figure>
            <div class="padding">
              <div class="detail">
                 <div class="time"><?php echo get_the_date();?></div>
                <div class="category"> <a href="<?php the_permalink();?>"><?php the_category();?></a></div>
              </div>
               <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              <p><?php the_excerpt();?></p>
            </div>

          </div>

      </article>
        <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
              
      </div>

    

  </section>
  
  
  
  <?php get_sidebar();?>
  <?php get_footer();?>