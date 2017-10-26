@extends ('backend.master')
@section ('back',route('admin.contact'))
@section ('title','Edit Contact')
@section ('controller','Contact')
@section ('action','Edit')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.contact')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Contact</h6>
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
					<input type="text" name="txtName" class="form-control" placeholder="Please Enter Name" value="{{ old('txtName',$contact["name"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<input type="text" name="txtAddress" class="form-control" placeholder="Please Enter Address" value="{{ old('txtAddress',$contact["address"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="text" name="txtPhone" class="form-control" placeholder="Please Enter Phone" value="{{ old('txtPhone',$contact["phone"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Fax</label>
					<input type="text" name="txtFax" class="form-control" placeholder="Please Enter Fax" value="{{ old('txtFax',$contact["fax"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Email</label>
					<input type="email" name="txtEmail" class="form-control" placeholder="Please Enter Email" value="{{ old('txtEmail',$contact["email"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Skype</label>
					<input type="text" name="txtSkype" class="form-control" placeholder="Please Enter Skype" value="{{ old('txtSkype',$contact["skype"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Facebook</label>
					<input type="text" name="txtFacebook" class="form-control" placeholder="Please Enter Facebook" value="{{ old('txtFacebook',$contact["facebook"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Time Work</label>
					<input type="text" name="txtTimeWork" class="form-control" placeholder="Please Enter Time Work" value="{{ old('txtTimeWork',$contact["timework"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Map</label>
					<textarea name="txtMap" class="form-control">{{ old('txtMap',$contact["map"]) }}</textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Contact</h6>
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
					<label class="control-label">Logo <span class="text-danger">*</span></label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage',$contact["image"]) ? old('txtImage',$contact["image"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage',$contact["image"]) ? old('txtImage',$contact["image"]) :  '' }}" />
					</center><br />
				</div>
			</div>
		</div>
	</div>
</form>
@endsection