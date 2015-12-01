<?php
/**
 * The template used for displaying page content in page.php
 *
 *
 * @package _s
 */
$avatarsize = array( 'width'  => '170', 'height'  => '170');
?>
<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
  <div id="pag-top" class="pagination">
    <div class="pag-count" id="member-dir-count-top">
      <?php bp_members_pagination_count(); ?>
   </div>
   <div class="pagination-links" id="member-dir-pag-top">
      <?php bp_members_pagination_links(); ?>
   </div>
  </div>
  <?php do_action( 'bp_before_directory_members_list' ); ?>
<div class='bbmember'>
  <ul id="members-list" class="item-list" role="main">
  <?php while ( bp_members() ) : bp_the_member(); ?>
    <li>
      <div class="item-avatar">
         <a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar($avatarsize); ?></a>
      </div>
      <div class="item">
        <div class="item-title">
           <a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a>
       </div>
       <?php do_action( 'bp_directory_members_item' ); ?>
      <?php
       /***
        * If you want to show specific profile fields here you can,
        * but it'll add an extra query for each member in the loop
        * (only one regardless of the number of fields you show):
        *
        * bp_member_profile_data( 'field=the field name' );
       */
       ?>
       </div>
   </li>
 <?php endwhile; ?>
 </ul>
</div>

 <?php do_action( 'bp_after_directory_members_list' ); ?>
 <?php bp_member_hidden_fields(); ?>
 <div id="pag-bottom" class="pagination">
    <div class="pag-count" id="member-dir-count-bottom">
       <?php bp_members_pagination_count(); ?>
    </div>
    <div class="pagination-links" id="member-dir-pag-bottom">
      <?php bp_members_pagination_links(); ?>
    </div>
  </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', '_s' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<?php else: ?>
   <div id="message" class="info">
      <p><?php _e( "Sorry, no members were found.", 'buddypress' ); ?></p>
   </div>
</div>
<?php endif; ?>
