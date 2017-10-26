@extends ('backend.master')
@section ('back',route('admin.category'))
@section ('title','List Category')
@section ('controller','Category')
@section ('action','List')
@section ('content')
@include ('backend.blocks.alert')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">List Category</h6>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th width="150px">Position</th>
						<th>Category Name</th>
						<th width="200px">Created By</th>
						<th width="200px">Created At</th>
						<th width="150px">Status</th>
						<th class="text-center" width="70px">Actions</th>
					</tr>
				</thead>
				<tbody>
					@if (empty($categories))
						<tr><td colspan="6" align="center">No data available in table</td></tr>
					@else
						@php recursionTable($categories) @endphp
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection