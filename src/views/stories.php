<?php $title = 'Stories | kwntu' ?>

<?php ob_start() ?>

<main class="container" id="stories-home">
	<table>
		<tr>
			<td rowspan="2">
				<div class="week-story"></div>
			</td>
			<td>
				<div class="new-stories"></div>				
			</td>
			<td>
				<div class="rising-stories"></div>						
			</td>
		</tr>
		<tr>
			<!-- <td colspan="2">				
				<div class="featured-stories"></div>	
			</td> -->
		</tr>
	</table>
</main>

<?php $main = ob_get_clean() ?>

<?php include '../src/templates/layout.php' ?>