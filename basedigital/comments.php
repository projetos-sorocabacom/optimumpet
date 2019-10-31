<div class="comments">
	<?php if (post_password_required()) : ?>
	<p>Protegido por senha</p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p>Comentários fechados</p>

<?php endif; ?>

<?php comment_form(); ?>

</div>