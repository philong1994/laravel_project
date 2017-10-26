@extends ('backend.master')
@section ('back',route('admin.post'))
@section ('title','Edit Post')
@section ('controller','Post')
@section ('action','Edit')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.post')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Post</h6>
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
					<label class="control-label">Title <span class="text-danger">*</span></label>
					<input type="text" id="name-slug" name="txtTitle" class="form-control" placeholder="Please Enter News Title" value="{{ old('txtTitle',$post["title"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Content <span class="text-danger">*</span></label>
					<textarea name="txtContent">{{ old('txtContent',$post["content"]) }}</textarea>
					<script type="text/javascript">
						 CKEDITOR.replace('txtContent', { height: '400px' });
					</script>
				</div>
				<div class="form-group">
					<label class="control-label">Slug URL <span class="text-danger">*</span></label>
					<input type="text" id="txtSlug" name="txtSlug" class="form-control" placeholder="Please Enter Slug URL" value="{{ old('txtSlug',$post["slug"]) }}" />
				</div>
				<div class="form-group" style="margin-bottom: 50px">
					<label class="control-label">Title Tag (Ex : Primary Keyword - Secondary Keyword) <span class="text-danger">*</span></label>
					<input type="text" id="txtMetaTitle" name="txtMetaTitle" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword - Secondary Keyword (SEO)" value="{{ old('txtMetaTitle',$post["title_tag"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Meta Keywords <span class="text-danger">*</span></label>
					<input type="text" name="txtMetaKeywords" class="tags-input" placeholder="Please Enter Meta Keywords Tag (SEO)" value="{{ old('txtMetaKeywords',$post["meta_keywords_tag"]) }}" />
					<span class="help-block">Keywords not more that 10 words</span>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Description <span class="text-danger">*</span></label>
					<textarea rows="3" name="txtMetaDescription" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Meta Description Tag (SEO)">{{ old('txtMetaDescription',$post["meta_description_tag"]) }}</textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Post</h6>
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
					<label class="control-label">Viewed</label>
					<input type="text" name="txtViewed" class="form-control" placeholder="Please Enter Viewed Default" value="{{ old('txtViewed',$post["viewed"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Link Youtube</label>
					<input type="text" name="txtVideo" class="form-control" placeholder="Please Enter Link Youtube" value="{{ old('txtVideo',$post["youtube"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Access</label>
					<select name="sltAccess" class="form-control">
						<option value="0" {{ (old('sltAccess',$post["access"]) == '0') ? 'selected' : '' }}>Public</option>
						<option value="1" {{ (old('sltAccess',$post["access"]) == '1') ? 'selected' : '' }}>Admin</option>
						<option value="2" {{ (old('sltAccess',$post["access"]) == '2') ? 'selected' : '' }}>Member</option>
						<option value="3" {{ (old('sltAccess',$post["access"]) == '3') ? 'selected' : '' }}>Guest</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Target Open</label>
					<select name="sltTarget" class="form-control">
						<option value="_self" {{ (old('sltTarget',$post["target_open"]) == '_self') ? 'selected' : '' }}>The same frame (_self)</option>
						<option value="_blank" {{ (old('sltTarget',$post["target_open"]) == '_blank') ? 'selected' : '' }}>New window or tab (_blank)</option>
						<option value="_parent" {{ (old('sltTarget',$post["target_open"]) == '_parent') ? 'selected' : '' }}>The parent frame (_parent)</option>
						<option value="_top" {{ (old('sltTarget',$post["target_open"]) == '_top') ? "selected" : '' }}>The full body of the window (_top)</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Robot</label>
					<select name="sltMetaRobot" class="form-control">
						<option value="noindex,follow" {{ (old('sltMetaRobot',$post["meta_robot"]) == 'noindex,follow') ? "selected" : '' }}>NOINDEX, FOLLOW</option>
						<option value="index,nofollow" {{ (old('sltMetaRobot',$post["meta_robot"]) == 'index,nofollow') ? "selected" : '' }}>INDEX, NOFOLLOW</option>
						<option value="noindex,nofollow" {{ (old('sltMetaRobot',$post["meta_robot"]) == 'noindex,nofollow') ? "selected" : '' }}>NOINDEX, NOFOLLOW</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Main Image</label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage',$post["image"]) ? old('txtImage',$post["image"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage',$post["image"]) ? old('txtImage',$post["image"]) :  '' }}" />
					</center><br />
					<label class="control-label">Alt Image</label><br />
					<input type="text" name="txtAlt" class="form-control" placeholder="Please Enter Alt For Image" value="{{ old('txtAlt',$post["alt"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Status Post</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch switch_list" data-table="post" data-col="status" data-id="{{ $post["id"] }}" {{ $post["status"] == "on" ? "checked" : "" }} />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection