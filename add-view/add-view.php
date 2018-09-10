
<?php include '../style/import-style.php'; ?>
<?php include '../menu.php'; ?>

<div class="container">
	<form action="crud/create.php" method="post">
		<div class="form-group">
			<label for="title">Task title</label>
			<input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
		</div>
		<div class="form-group">
			<label for="description">Task description</label>
			<textarea class="form-control" name="content" id="description" aria-describedby="emailHelp" placeholder="Describe the task"></textarea>
		</div>
	    <div class="row">
	        <div class='col-sm-6'>
	            <div class="form-group">
	                <div class='input-group date' id='datetimepicker3'>
	                    <input type='text' class="form-control" placeholder="Pick the time of the task"/>
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-time"></span>
	                    </span>
	                </div>
	            </div>
	        </div>
	        <script type="text/javascript">
	            $(function () {
	                $('#datetimepicker3').datetimepicker({
	                    format: 'LT'
	                });
	            });
	        </script>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>

	</form>
</div>