@extends ('backend.master')
@section ('back',route('admin.banner'))
@section ('title','Edit Banner')
@section ('controller','Banner')
@section ('action','Edit')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.banner')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Banner</h6>
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
					<label class="control-label">Banner Name <span class="text-danger">*</span></label>
					<input type="text" name="txtName" class="form-control" placeholder="Please Enter Banner Name" value="{{ old('txtName',$banner["name"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Link <span class="text-danger">*</span></label>
					<input type="text" name="txtLink" class="form-control" placeholder="Please Enter Banner Link" value="{{ old('txtLink',$banner["link"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Script Code</label>
					<textarea name="txtScript" class="form-control">{{ old('txtScript',$banner["script_code"]) }}</textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Description</label>
					<textarea name="txtDescription">{{ old('txtDescription',$banner["description"]) }}</textarea>
					<script type="text/javascript">
						 CKEDITOR.replace('txtDescription', { height: '200px' });
					</script>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Banner</h6>
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
					<label class="control-label">Banner Position <span class="text-danger">*</span></label>
					<select name="sltPosition" class="form-control">
						<option value="">---------------- ROOT ----------------</option>
						@foreach ($position as $item)
						<option value="{{ $item["id"] }}" {{ (old('sltPosition',$banner["position_id"]) == $item["id"]) ? 'selected' : '' }}>{{ $item["name"] }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Access</label>
					<select name="sltAccess" class="form-control">
						<option value="0" {{ (old('sltAccess',$banner["access"]) == '0') ? 'selected' : '' }}>Public</option>
						<option value="1" {{ (old('sltAccess',$banner["access"]) == '1') ? 'selected' : '' }}>Admin</option>
						<option value="2" {{ (old('sltAccess',$banner["access"]) == '2') ? 'selected' : '' }}>Member</option>
						<option value="3" {{ (old('sltAccess',$banner["access"]) == '3') ? 'selected' : '' }}>Guest</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Target Open</label>
					<select name="sltTarget" class="form-control">
						<option value="_self" {{ (old('sltTarget',$banner["target_open"]) == '_self') ? 'selected' : '' }}>The same frame (_self)</option>
						<option value="_blank" {{ (old('sltTarget',$banner["target_open"]) == '_blank') ? 'selected' : '' }}>New window or tab (_blank)</option>
						<option value="_parent" {{ (old('sltTarget',$banner["target_open"]) == '_parent') ? 'selected' : '' }}>The parent frame (_parent)</option>
						<option value="_top" {{ (old('sltTarget',$banner["target_open"]) == '_top') ? "selected" : '' }}>The full body of the window (_top)</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Banner</label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage',$banner["image"]) ? old('txtImage',$banner["image"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage',$banner["image"]) ? old('txtImage',$banner["image"]) :  '' }}" />
					</center><br />
					<label class="control-label">Alt Image</label><br />
					<input type="text" name="txtAlt" class="form-control" placeholder="Please Enter Alt For Image" value="{{ old('txtAlt',$banner["alt"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Status Banner</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch switch_list" data-table="banner" data-col="status" data-id="{{ $banner["id"] }}" {{ $banner["status"] == "on" ? "checked" : "" }} />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection