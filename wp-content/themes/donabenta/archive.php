<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package donabenta
 */

get_header();
?>
<?php

$category = get_the_category();
$parentcat = get_cat_name($category[0]->category_parent);
$parentID = $category[0]->parent;
$postid = get_the_ID();
$post_title = get_the_title($postid);
?>
<article id="interna" <?php post_class(); ?>>
<div class="container">


  <div class="categoria col-md-12 text-center">
      <h1><?php echo $parentcat; ?>  </h1>
  </div>

  <div class="sidebar col-md-12">
  <?php

    $thiscat = get_category( get_query_var( 'cat' ) );
    $catid = $thiscat->cat_ID;
    $parent = $thiscat->category_parent;

    $args = array( 'category' => $parentID, 'post_type' =>  'post', 'posts_per_page'   => -1 );
    $postslist = get_posts( $args );

      ?>

      <div class="subcat-list-full">
          <ul>
              <?php   foreach ($postslist as $post) :  setup_postdata($post);

              $subpost_title = get_the_title($post->ID);

               ?>

                <li>
                  <a href="<?php the_permalink(); ?>"><?php echo strtolower($subpost_title); ?></a></li>
                <?php endforeach; ?>
           </ul>
      </div>
  </div>


	</div><!-- #primary -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php

get_footer();
