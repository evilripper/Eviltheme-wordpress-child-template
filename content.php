<?php
/**
 * 
 * Modded by www.evilripper.net 
 * 
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 
 <div class="share-bar">
	<div class="facebook-button">
		<div class="fb-like" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false"></div>
	</div>
	<div class="twitter-button">
		<a href="https://twitter.com/share" data-url="<?php the_permalink(); ?>" data-via="evilripper" data-text="<?php the_title(); ?>" data-related="www.evilripper"class="twitter-share-button" data-count="horizontal">Tweet</a>
	</div>
	<div class="gplusone-button">
		<div class="g-plusone" data-href="<?php the_permalink(); ?>" data-lang="it" data-size="medium" data-count="true"></div>
	</div>
</div>
<div style="clear:both;"></div>';
 */ 
$sharebar = '<div class="share-bar">
				<div class="facebook-button">
						<div data-href="' . get_permalink() .'" class="fb-like" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false"></div> 
				</div>
				<div class="twitter-button">
					<a href="https://twitter.com/share" data-url="' . get_permalink() . '" data-via="evilripper" data-text="' . get_the_title() . '" class="twitter-share-button" data-count="horizontal">Tweet</a>
				</div>
				<div class="gplusone-button">
					<g:plusone href="' . get_permalink() . '" lang="it" size="medium" count="true"></g:plusone >
				</div>
			</div>
			<div style="clear:both;"></div>';

//decomment to hide sharebare
//$sharebar = '';
?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php echo $sharebar; ?>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>			
			<?php endif; // is_single() ?>
			
			<!-- .comments-link se vuoi il link ai commenti decommenta -->
			<!-- 
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div>
			-->
			
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php if ( is_single() ) : ?>
				<!-- Se vuoi inserisci il codice del tuo banner tra il titolo e il testo
				<div id="adsense46860">
					<div class="small-label-left" >Sponsored Links</div>
				</div>
				-->
				
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
				
			<?php else : ?>
				<?php the_post_thumbnail(); ?>
				<?php the_excerpt(); ?>
			<?php endif; // comments_open() ?>
						
			<?php if ( is_single() ) : ?>
			<!-- Se vuoi inserisci il codice del tuo banner tra il titolo e il testo
			<div id="adsense336280">
			<div class="small-label-left" >Sponsored Links</div>
			</div>
			-->
			<?php else : ?>
			<?php echo $sharebar; ?>
			<?php endif; // comments_open() ?>
			
			
		</div><!-- .entry-summary -->
		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
