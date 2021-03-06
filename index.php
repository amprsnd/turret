<?php
	include_once('docs/config.php');
	include_once('docs/functions.php');
	include_once('docs/includes/head.html');
?>

<header class="home-header gradient">
	<div class="container">
		<svg class="home-header-icon" xmlns="http://www.w3.org/2000/svg" width="44" height="64" viewBox="0 0 44 64">
			<path fill="#FFFFFF" d="M36.7 52l-3.1-28.1 8.4-6v-17.9h-8v7h-6v-7h-12v7h-6v-7h-8v17.9l8.4 6-3.1 28.1h-7.3v12h44v-12z"/>
		</svg>
		<h1 class="home-header-title">Turret</h1>
		<p class="home-header-lead lead">Turret is a styles and browser behaviour normalisation framework for rapid development of responsive and accessible websites.</p>
		<a class="button button-large home-button" href="/docs/">Documentation</a>
		<a class="button button-large home-button" href="https://github.com/bigfishtv/turret">GitHub</a>
		<p class="text-white"><strong><?= VERSION ?></strong></p>
	</div>
</header>

<section class="home-blocks">
	<div class="container">
		<div class="row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/responsive.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2>Responsive<br><small>Mobile First Design</small></h2>
				<p>Turret has been developed for mobile first responsive web design with an intuitive grid system and responsive utilities for rapid development using logical and legible markup.</p>
				<a class="button button-secondary" href="/docs/#grid">Check out the grid</a>
			</div>
		</div>
		<hr class="divider">
		<div class="row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/design.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2>Developed for Design<br><small>Customisable Colors and Type</small></h2>
				<p>Turret is focused on a customisable base of typography, font definitions, color and indicators palettes for simple and stylish web user interfaces.</p>
				<a class="button button-inverse" href="/docs/#typography">See typographic styles</a>
			</div>
		</div>
		<hr class="divider">
		<div class="row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/styles.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2>Simply Styles<br><small>No Javascript just Less and CSS</small></h2>
				<p>Turret is a Less framework for styling native web elements. That's about it, no javascript, no custom markup, just semantic HTML5 elements.</p>
				<a class="button button-primary" href="/docs/#elements">Play with styled elements</a>
			</div>
		</div>
		<hr class="divider">
		<div class="row">
			<div class="column-1-2 column-push-1-2">
				<div class="media media-4-3">
					<img src="docs/img/semantic.svg">
				</div>
			</div>
			<div class="column-1-2 column-pull-1-2">
				<h2>Stylishly Semantic<br><small>Accessible HTML5 Markup</small></h2>
				<p>Write markup that is modular, maintainable, and semantic. Turret turns semantic HTML5 markup into styled and responsive elements without the headache.</p>
				<a class="button button-tertiary" href="/docs/#examples">View examples</a>
			</div>
		</div>
	</div>
</section>

<section class="home-section">
	<div class="container">
		<p class="lead">Want to make responsive & accessible websites?</p>
		<a class="button button-large home-button home-button-secondary" href="/docs/">Get started</a>
	</div>
</section>

<?php include_once('docs/includes/footer.php'); ?>
<?php include_once('docs/includes/end.html'); ?>
