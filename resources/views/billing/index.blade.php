@extends ('layouts.master')

@section('content')
	<div class="col-sm-8">
		<form method="POST" action="/billing">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="first-q">Question 1</label>
				<input type="text" name="first-q" id="first-q" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="second-q">Question 2</label>
				<input type="text" name="second-q" id="second-q" class="form-control" required>
			</div>			

			<div class="form-group">
				<label for="third-q">Question 3</label>
				<input type="text" name="third-q" id="third-q" class="form-control" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>


	</div>
@endsection