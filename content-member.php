<?php
/**
 * The template used for displaying page content in page.php
 *
 *
 * @package _s
 */
$avatarsize = array( 'width'  => '170', 'height'  => '170');
// $member['name'] = bp_member_profile_data( 'field=Name' );
// $member['twitter'] = xprofile_get_field_data( 'Twitter handle', bp_get_member_user_id() );
  // bp_member_profile_data( 'field=Twitter handle' );
// $url = (empty($member['twitter'])) ? "http://twitter.com/". $member['twitter'] : bp_member_permalink() ;

?>
<?php if ( bp_has_members( bp_ajax_querystring( 'members' ) ) ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
  <div id="pag-top" class="pagination">
    <div class="pag-count" id="member-dir-count-top">
      <?php // bp_members_pagination_count(); ?>
   </div>
   <div class="pagination-links" id="member-dir-pag-top">
      <?php // bp_members_pagination_links(); ?>
   </div>
  </div>
  <?php do_action( 'bp_before_directory_members_list' ); ?>
<div id='bbmember'>
  <ul id="members-list" class="item-list" role="main">
  <?php while ( bp_members() ) : bp_the_member(); ?>
       <?php
// $userdata = array ( 'field'     => 'Twitter handle',);
// echo bp_profile_field_data($userdata);
// $current_user = wp_get_current_user();
// $current_user_id = $current_user->ID;
$firstname = bp_get_member_profile_data('field=First Name' );
$lastname = bp_get_member_profile_data('field=Last Name' );
$websiteuri = bp_get_member_profile_data('field=Website' );
// Provides: You should eat pizza, beer, and ice cream every day
$toremove = array("http://www.", "http://");
$toreplacewith   = array("", "");
$website = str_replace($toremove, $toreplacewith, $websiteuri);
$occupation = bp_get_member_profile_data('field=Short description' );
       ?>
    <li>
<?php if ($websiteuri) { $userlink = '<a href="%1$s">'; printf($userlink, $websiteuri); }; ?>
<div class="item-avatar <?php if (!$websiteuri) { echo 'nohl'; }; ?> ">
        <?php bp_member_avatar($avatarsize); ?>
        <div class="item-title">
         <?php echo $website; ?>
       </div>
      </div>
<?php if($websiteuri){ echo '</a>'; };?>
      <div class="item">
       <div class="member-extra">
       <?php do_action( 'bp_directory_members_item' ); ?>
<span class="member-name"><?php echo $firstname .' ' .$lastname; ?></span>
  <span class="member-occupation"><?php echo $occupation ?></span>
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

       </div>
   </li>
<?php 
// unset($current_user);
// unset($current_user_id);
// unset($firstname);
// unset($lastname);
// unset($website);
// unset($occupation);
// unset($current_user, $current_user_id, $firstname, $lastname, $website, $occupation);
 ?>
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
