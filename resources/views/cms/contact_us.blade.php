@extends('layouts.cms_master')

@section('content')
	<div class="container">
		<h1>CONTACT US</h1>
		<div class="col-md-offset-3 col-md-6">
			<form action="" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                </div>
                <div class="form-group">
                	<label for="query">Query</label>
                	<textarea name="query" id="query" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Submit</button>
			</form>
		</div>
	</div>
@endsection