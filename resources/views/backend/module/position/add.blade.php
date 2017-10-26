@extends ('backend.master')
@section ('back',route('admin.position'))
@section ('title','Add Position')
@section ('controller','Position')
@section ('action','Add')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.position')])

	@include ('backend.blocks.alert')

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add Position</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<div class="form-group">
					<label class="control-label">Name <span class="text-danger">*</span></label>
					<input type="text" name="txtName" class="form-control" placeholder="Please Enter Position Name" value="{{ old('txtName') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Width (Unit Pixels : px)</label>
					<input type="text" name="txtWidth" class="form-control" placeholder="Please Enter Position Width" value="{{ old('txtWidth') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Height (Unit Pixels : px)</label>
					<input type="text" name="txtHeight" class="form-control" placeholder="Please Enter Position Height" value="{{ old('txtHeight') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Status Position</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch" checked="checked" />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection