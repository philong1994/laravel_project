@extends ('backend.master')
@section ('back',route('admin.manufacturer'))
@section ('title','Edit Manufacturer')
@section ('controller','Manufacturer')
@section ('action','Edit')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.manufacturer')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Manufacturer</h6>
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
					<input type="text" name="txtName" class="form-control" placeholder="Please Enter Manufacturer Name" value="{{ old('txtName',$manufacturer["name"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Website</label>
					<input type="text" name="txtWesbite" class="form-control" placeholder="Please Enter Manufacturer Webiste" value="{{ old('txtWesbite',$manufacturer["website"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Address</label>
					<input type="text" name="txtAddress" class="form-control" placeholder="Please Enter Manufacturer Address" value="{{ old('txtAddress',$manufacturer["address"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Email</label>
					<input type="email" name="txtEmail" class="form-control" placeholder="Please Enter Manufacturer Email" value="{{ old('txtEmail',$manufacturer["email"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Phone</label>
					<input type="text" name="txtPhone" class="form-control" placeholder="Please Enter Manufacturer Phone" value="{{ old('txtPhone',$manufacturer["phone"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Description</label>
					<textarea name="txtDescription">{{ old('txtDescription',$manufacturer["description"]) }}</textarea>
					<script type="text/javascript">
						CKEDITOR.replace('txtDescription', { height: '400px' });
					</script>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Manufacturer</h6>
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
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage',$manufacturer["logo"]) ? old('txtImage',$manufacturer["logo"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage',$manufacturer["logo"]) ? old('txtImage',$manufacturer["logo"]) :  '' }}" />
					</center><br />
				</div>
			</div>
		</div>
	</div>
</form>
@endsection