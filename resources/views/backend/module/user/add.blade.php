@extends ('backend.master')
@section ('back',route('admin.user'))
@section ('title','Add User')
@section ('controller','User')
@section ('action','Add')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.user')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add User</h6>
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
					<label class="control-label">Email (User Account) <span class="text-danger">*</span></label>
					<input type="email" name="txtEmail" class="form-control" placeholder="Please Enter Your Email" value="{{ old('txtEmail') }}" />
				</div>
				<div class="form-group">
					<label class="control-label col-lg-12" style="padding-left:0px">Password <span class="text-danger">*</span></label>
					<div class="col-lg-9" style="padding-left:0px">
						<div class="label-indicator">
							<input type="text" name="txtPass" class="form-control" placeholder="Enter your password" value="{{ old('txtPass') }}" />
							<span class="label label-block password-indicator-label"></span>
						</div>
					</div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-info generate-label">Generate 15 characters</button>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">User Infomation</h6>
				<div class="heading-elements">
					<ul class="icons-list">
	            		<li><a data-action="collapse" class=""></a></li>
	            		<li><a data-action="reload"></a></li>
	            		<li><a data-action="close"></a></li>
	            	</ul>
	        	</div>
			</div>

			<div class="panel-body" style="display: block;">
				<div class="form-group">
					<label class="control-label">First Name</label>
					<input type="text" name="txtFirstName" class="form-control" placeholder="Please Enter First Name" value="{{ old('txtFirstName') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Last Name</label>
					<input type="text" name="txtLastName" class="form-control" placeholder="Please Enter Last Name" value="{{ old('txtLastName') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Phone Number</label>
					<input type="text" name="txtPhone" class="form-control" placeholder="Please Enter Phone Number" value="{{ old('txtPhone') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<input type="text" name="txtAddress" class="form-control" placeholder="Please Enter Address" value="{{ old('txtAddress') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Facebook</label>
					<input type="text" name="txtFacebook" class="form-control" placeholder="Please Enter Link Facebook" value="{{ old('txtFacebook') }}" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add User</h6>
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
					<label class="control-label">Level</label>
					<select name="sltLevel" class="form-control">
						<option value="2" {{ (old('sltLevel') == '2') ? 'selected' : '' }}>Member</option>
						<option value="1" {{ (old('sltLevel') == '1') ? 'selected' : '' }}>Admin</option>
					</select>
				</div>
				@if (Auth::user()->id == 1)
				<div class="form-group">
					<label class="control-label">Role</label>
					<select name="sltRole" class="form-control">
						<option value="">Please Choose Role For Level Admin</option>
						@foreach ($roles as $role)
						<option value="{{ $role["id"] }}" {{ (old('sltRole') == $role["id"]) ? 'selected' : '' }}>{{ $role["name"] }}</option>
						@endforeach
					</select>
				</div>
				@endif
				<div class="form-group">
					<label class="control-label">Avatar</label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage') ? old('txtImage') :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage') ? old('txtImage') :  '' }}" />
					</center><br />
				</div>
				<div class="form-group">
					<label class="control-label">Status User</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch" checked="checked" />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection