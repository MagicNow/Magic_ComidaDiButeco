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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="categoria">
      <h1><?php echo $parentcat; ?>  </h1>
  </div>

  <div class="sidebar">
  <?php

    $thiscat = get_category( get_query_var( 'cat' ) );
    $catid = $thiscat->cat_ID;
    $parent = $thiscat->category_parent;

    $args = array( 'category' => $parentID, 'post_type' =>  'post', 'posts_per_page'   => -1 );
    $postslist = get_posts( $args );

      ?>

      <div class="subcat-list">
          <ul>
              <?php   foreach ($postslist as $post) :  setup_postdata($post); ?>

                <li>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; ?>
           </ul>
      </div>
  </div>
	<header class="entry-header">
		<h1 class="entry-title"><?php echo $post_title?></h1>

<?php
		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
        <h3><?php the_field('nome_do_prato', $postid); ?></h3>
				<?php
				// donabenta_posted_on();
				// donabenta_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php //donabenta_post_thumbnail(); ?>

	<div class="entry-content">

    <?php if( get_field('ingredientes', $postid) ): ?>
      <h2>Ingredientes:</h2>
      <div class="ingredientes">
        <?php the_field('ingredientes', $postid); ?>
      </div>
    <?php endif; ?>

    <?php if( get_field('modo_de_preparo', $postid) ): ?>
      <h2>Modo de Preparo:</h2>
      <div class="modo_de_preparo">
        <?php the_field('modo_de_preparo', $postid); ?>
      </div>
    <?php endif; ?>

    <div class="exta_content">
      <?php the_content(); ?>
    </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //donabenta_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
