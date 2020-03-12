@extends('admin.master')

@section('body')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-body rounded-0">
					<table class="table table-bordered">
						<tr class="text-center">
							<th>SL No</th>
							<th>Category Name</th>
							<th>Category Description</th>
							<th>Publication Status</th>
							<th>Action</th>
						</tr>
						@php($i=1)
						@foreach($categories as $category)
						<tr class="text-center">
							<td>{{$i++}}</td>
							<td>{{ $category->category_name }}</td>
							<td>{{ $category->category_description }}</td>
							<td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
							<td>
								<a href="" class="btn btn-success">Edit</a>
								<a href="" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection