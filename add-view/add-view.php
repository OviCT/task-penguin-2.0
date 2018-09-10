
<?php include '../style/import-style.php' ?>
<?php include '../menu.php' ?>

<div class="container">
	<form action="../../crud/create.php" method="post">
		<div class="form-group">
			<label for="title">Task title</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
		</div>
		<div class="form-group">
			<label for="description">Task description</label>
			<textarea class="form-control" name="content" id="description" aria-describedby="emailHelp" placeholder="Describe the task"></textarea>
		</div>

	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>