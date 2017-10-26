@extends ('backend.master')
@section ('back',route('admin.attribute'))
@section ('title','List Attribute')
@section ('controller','Attribute')
@section ('action','List')
@section ('content')
@include ('backend.blocks.alert')
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h5 class="panel-title">List Attribute</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Attribute</th>
					<th width="200px">Created At</th>
					<th width="120px">Status</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				@if (empty($attribute))
					<tr><td colspan="4"><center>No data available in table</center></td></tr>
				@else
					@php recursionTableAttribute ($attribute) @endphp
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection