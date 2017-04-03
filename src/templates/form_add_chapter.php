<form method="POST">
	<div class="form-group">
		<label for="chapter-title">Title of the chapter</label>
		<input type="text"
			name="chapter[title]"
			id="chapter-title"
			class="form-control"
			placeholder="example: Chapter 20: Gabi ng Lagim!">			
	</div>
	<div class="form-group">
		<label for="chapter-text">Chapter content</label>
		<textarea name="chapter['text']"
			id="chapter-text"
			class="form-control"
			placeholder="example: One day, isang araw..." 
			rows=10></textarea>
	</div>
	<button type="submit"
		name = "chapter['submit']"
		id = "chapter-submit"
		class="btn btn-info pull-right">
		Create new chapter</button>
	<div class="clearfix"></div>
</form>
