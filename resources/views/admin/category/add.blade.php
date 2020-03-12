@extends('admin.master')

@section('body')
	<div class="container">
		<div  class="row">
			<div class="col-md-12">
				<div class="card card-body rounded-0">
					<form action="{{route('new-category')}}" method="POST">
						@csrf
						<div class="form-group row">
							<label class="col-form-label col-md-3">Category Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="category_name">
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Category Description</label>
							<div class="col-md-9">
								<textarea class="form-control" name="category_description"></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3">Publication Status</label>
							<div class="col-md-9">
								<label><input type="radio" name="status" checked value="1">Published</label>
								<label><input type="radio" name="status" value="0">Unpublished</label>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-form-label col-md-3"></label>
							<div class="col-md-9">
								<input type="submit" class="btn btn-success" value="Save Category Info">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection