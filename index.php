<?php
/**
 * Typecho 极简风格响应式主题
 * 
 * @package Bubble
 * @author TriNitroTofu, Rorical, Boshi
 * @version 3.0.3
 * @link https://github.com/trinitrotofu/Bubble
 */

	if (!defined('__TYPECHO_ROOT_DIR__')) exit;
	$this->need('header.php');
?>

	<main>
		<section class="section section-lg section-hero section-shaped" style="height: 100vh;">
			<?php printBackground($this->options->indexImage, $this->options->bubbleShow); ?>
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
								if ($this->options->nickName == '') {
									$this->options->description();
								} else {
									$this->options->nickName();
								}
							?></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="card shadow content-card list-card content-card-head">
			<!-- Article list -->
			<?php while($this->next()): ?>
				<?php printAricle($this); ?>
			<?php endwhile; ?>
			<!-- Toggle page -->
			<?php printToggleButton($this); ?>
		</div>
		<?php if($this->_currentPage>1) echo("<script>$('html,body').animate({ scrollTop: $('.card.shadow.content-card.list-card.content-card-head').offset().top}, 500)</script>") ?>
<?php $this->need('footer.php'); ?>