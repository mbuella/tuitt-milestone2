<?php $title = 'Busy pa kami Bes! | kwntu' ?>

<?php ob_start() ?>

<main class="container">
	<div class="jumbotron text-center">
		<div class="row">
			<h2>Pasensya na Bes!</h2> 
			<h3>Ginagawa pa namin ang page na ito. Para makakuha ng update, sundin lamang ang aming mga social accounts sa ibaba.</h3>

			<h3>Salamat!</h3>
		</div>
	</div>
</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>