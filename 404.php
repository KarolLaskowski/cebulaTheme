<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

<main id="page-404">
	<header class="page-header">
		<h1 class="page-title">Nie znaleziono strony pod tym adresem</h1>
	</header>

	<section>
		<h3>W zamian spróbuj wyszukać oczekiwaną treść:</h3>
		<?php get_search_form(); ?>
	</section>
</main>

<?php get_footer(); ?>