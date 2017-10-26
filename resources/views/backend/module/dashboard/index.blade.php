@extends ('backend.master')
@section ('back',route('admin.dashboard.index'))
@section ('title','Dashboard')
@section ('controller','Dashboard')
@section ('action','Index')
@section ('content')
@include ('backend.blocks.alert')
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">5 Latest Product</h6>
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
						<th width="50px">ID</th>
						<th>Name</th>
						<th width="150px">Created At</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($products as $product)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><a href="{{ route('admin.product.edit',['id' => $product->id]) }}">{{ $product->name }}</a></td>
						<td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($product->updated_at))->diffForHumans() }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="3" align="center">No Data In Product</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">5 Latest News</h6>
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
						<th width="50px">ID</th>
						<th>Title</th>
						<th width="150px">Created At</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($news as $item)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><a href="{{ route('admin.news.edit',['id' => $item->id]) }}">{{ $item->title }}</a></td>
						<td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->diffForHumans() }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="3" align="center">No Data In News</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">5 Latest User</h6>
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
						<th width="50px">ID</th>
						<th>Email</th>
						<th width="150px">Created At</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($user as $item)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><a href="{{ route('admin.user.edit',['id' => $item->id]) }}">{{ $item->email }}</a></td>
						<td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->diffForHumans() }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="3" align="center">No Data In User</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h6 class="panel-title">5 Latest Post</h6>
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
						<th width="50px">ID</th>
						<th>Title</th>
						<th width="150px">Created At</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($post as $item)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><a href="{{ route('admin.post.edit',['id' => $item->id]) }}">{{ $item->title }}</a></td>
						<td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->updated_at))->diffForHumans() }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="3" align="center">No Data In Post</td>
					</tr>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection