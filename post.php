<?php
	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
?>

	<main>
		<section class="section section-lg section-hero section-shaped">
			<?php printBackground(getRandomImage($this->options->randomImage), $this->options->bubbleShow); ?>
			<div class="container shape-container d-flex align-items-center py-lg">
				<div class="col px-0">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 text-center">
							<div class="index-avatar-container">
								<img src="<?php
									if ($this->options->avatarUrl == '') {
										$this->options->themeUrl("images/avatar.png");
									} else {
										$this->options->avatarUrl();
									}
								?>" class="index-avatar">
							</div>
							<h1 class="text-white"><?php
								if ($this->options->nickName == '') {
									$this->options->title();
								} else {
									$this->options->nickName();
								}
							?></h1>
							<hr/>
							<div class="lead text-white"><?php
								if ($this->options->indexDesc == '') {
									$this->options->description();
								} else {
									$this->options->indexDesc();
								}
							?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="card shadow content-card content-card-head">
			<!-- Article content -->
			<section class="section" style="margin-bottom: 64px;">
				<div class="container">
					<div class="content" style="margin-bottom: 64px;">
				        <h1 class="text-black post-title"><?php $this->title() ?></h1>
        				<div class="list-object">
        					<span class="list-tag"><i class="fa fa-calendar-o" aria-hidden="true"></i> <time datetime="<?php $this->date('c'); ?>"><?php $this->date();?></time></span>
        					<span class="list-tag"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php $this->commentsNum('%d');?> 条评论</span>
        					<?php printCategory($this, 1); ?>
        					<?php printTag($this, 1); ?>
        					<span class="list-tag"><i class="fa fa-user-o" aria-hidden="true"></i> <a class="badge badge-warning badge-pill" href="<?php $this->author->permalink(); ?>"><?php $this->author();?></a></span>
        				</div>
					</div>
					<div class="content">
						<?php $this->content(); ?>
					</div>
				</div>
			</section>
			<!-- Comment -->
			<?php if (!$this->hidden && $this->allow('comment')) $this->need('comments.php'); ?>
		</div>
<?php $this->need('footer.php'); ?>