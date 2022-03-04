<?php
/**********************************************************************************
 * ■その他
 **********************************************************************************/

//////////////////////////////////////////////////////////////////////////////////
// loop 1
//////////////////////////////////////////////////////////////////////////////////
function loop_1() {?>

	<?php
	$postCategory = get_the_category();
	$categoryName = $postCategory[0]->cat_name;
	?>

	<div class="c-wp-postlist1__card">
		<div class="c-wp-postlist1__date">
			<?php the_time('Y/n/j') ?>
		</div>
		<div class="c-wp-postlist1__category">
			<?php echo $categoryName; ?>
		</div>
		<div class="c-wp-postlist1__title">
			<a href="<?php the_permalink();?>"><?php the_title();?></a>
		</div>
	</div>

<?php }

//////////////////////////////////////////////////////////////////////////////////
// loop 2
//////////////////////////////////////////////////////////////////////////////////
function loop_2() {?>

	<?php
	$postCategory = get_the_category();
	$categoryName = $postCategory[0]->cat_name;
	?>

	<div class="c-wp-postlist2__card">
		<div class="c-wp-postlist2__image">
			<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()) { echo the_post_thumbnail('50-50'); } ?>
			</a>
		</div>
		<div class="c-wp-postlist2__text">
			<div class="c-wp-postlist2__info">
				<div class="c-wp-postlist2__date">
					<?php the_time('Y/n/j') ?>
				</div>
				<div class="c-wp-postlist2__category">
					<?php echo $categoryName; ?>
				</div>
			</div>
			<div class="c-wp-postlist2__title">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</div>
		</div>
	</div>

<?php }

//////////////////////////////////////////////////////////////////////////////////
// loop 3
//////////////////////////////////////////////////////////////////////////////////
function loop_3() {?>

	<?php
	$postCategory = get_the_category();
	$categoryName = $postCategory[0]->cat_name;
	?>

	<div class="c-wp-postlist3__card">
		<div class="c-wp-postlist3__image">
			<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()) { echo the_post_thumbnail('200-200'); } ?>
			</a>
		</div>
		<div class="c-wp-postlist3__text">
			<div class="c-wp-postlist3__info">
				<div class="c-wp-postlist3__date">
					<?php the_time('Y/n/j') ?>
				</div>
				<div class="c-wp-postlist3__category">
					<?php echo $categoryName; ?>
				</div>
			</div>
			<div class="c-wp-postlist3__title">
				<a href="<?php the_permalink();?>"><?php the_title();?></a>
			</div>
		</div>
	</div>

<?php }


//////////////////////////////////////////////////////////////////////////////////
// loop 4
//////////////////////////////////////////////////////////////////////////////////
function loop_4() {?>

	<div class="c-wp-postlist4__card">
		<div class="c-wp-postlist4__date">
			<?php the_time('Y/n/j') ?>
		</div>
		<div class="c-wp-postlist4__title">
			<a href="<?php the_permalink();?>"><?php the_title();?></a>
		</div>
	</div>

<?php }

//////////////////////////////////////////////////////////////////////////////////
// loop 5
//////////////////////////////////////////////////////////////////////////////////
function loop_5() {

	if( get_post_type() == 'blog' ) {
		if ($terms = get_the_terms($post->ID, 'blog_tax')) {
		    foreach ( $terms as $term ) {
				$categoryName = $term->name;
		    }
		}
	}else{
		$postCategory = get_the_category();
		$categoryName = $postCategory[0]->cat_name;
	}

	?>

	<div class="c-wp-postlist3__category">
	<?php echo $categoryName; ?>
	</div>

<?php }
