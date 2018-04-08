<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package donabenta
 */

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

  <div class="sidebar col-md-2">
  <?php

    $thiscat = get_category( get_query_var( 'cat' ) );
    $catid = $thiscat->cat_ID;
    // $parent = $thiscat->category_parent;

    $args = array( 'category' => $parentID, 'post_type' =>  'post', 'posts_per_page'   => -1 );
    $postslist = get_posts( $args );

      ?>

      <div class="subcat-list">
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

<div class="col-md-offset-1 col-md-9">
    <div class="col-md-12">
      <h1 class="entry-title"><?php echo $post_title?></h1>

      <h3><?php the_field('nome_do_prato', $postid); ?></h3>

    </div>
    <div class="col-md-6">
        <?php if( get_field('ingredientes', $postid) ): ?>

          <div class="ingredientes">
            <h2>Ingredientes:</h2>
            <?php the_field('ingredientes', $postid); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <?php if( get_field('modo_de_preparo', $postid) ): ?>

          <div class="modo_de_preparo">
            <h2>Modo de Preparo:</h2>
            <?php the_field('modo_de_preparo', $postid); ?>
          </div>
        <?php endif; ?>
    </div>
    <div class="col-md-12">
        <div class="exta_content">
          <?php the_content(); ?>
        </div>
    </div>
</div>
</article><!-- #post-<?php the_ID(); ?> -->
