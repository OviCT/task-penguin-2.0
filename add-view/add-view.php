<?php include '../style/import-style.php' ?>
<?php include '../menu.php' ?>
<style>
<?php include '../Style/style.css' ?>
</style>
<div class="container form-container bg-dark">
	<form action="../../crud/create.php" method="post">
		<div class="form-group">
			<label for="title">Task title</label>
			<input type="text" name="title" class="form-control bg-light text-dark" id="title" placeholder="Enter title">
		</div>
		<div class="form-group">
			<label for="description">Task description</label>
			<textarea class="form-control bg-light text-dark" name="content" id="description" aria-describedby="emailHelp" placeholder="Describe the task"></textarea>
		</div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>

	<div class="bg-warning warning-box">
			All of the fields above are required.
	</div>
	</form>
</div>