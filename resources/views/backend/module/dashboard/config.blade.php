@extends ('backend.master')
@section ('back',route('admin.dashboard.index'))
@section ('title','Update Configuration')
@section ('controller','Configuration')
@section ('action','Update')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.dashboard.index')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Update Configuration</h6>
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
					<label class="control-label">Site Name<span class="text-danger">*</span></label>
					<input type="text" name="txtNameSite" class="form-control" placeholder="Please Enter Site Name" value="{{ old('txtNameSite',$config['name_site']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Site Title<span class="text-danger">*</span></label>
					<input type="text" name="txtSiteTitle" class="form-control" placeholder="Please Enter Site Title" value="{{ old('txtSiteTitle',$config['title']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Meta Keywords <span class="text-danger">*</span></label>
					<input type="text" name="txtMetaKeywords" class="tags-input" placeholder="Please Enter Meta Keywords Tag (SEO)" value="{{ old('txtMetaKeywords',$config['keywords']) }}" />
					<span class="help-block">Keywords not more that 10 words</span>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Description <span class="text-danger">*</span></label>
					<textarea rows="3" name="txtMetaDescription" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Meta Description Tag (SEO)">{{ old('txtMetaDescription',$config['description']) }}</textarea>
				</div>
				<hr />
				<div class="form-group">
					<label class="control-label">Host (Mail) :</label>
					<input type="text" name="txtHost" class="form-control" placeholder="Please Enter Host Of Mail" value="{{ old('txtHost',$config['host']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Username (Mail) :</label>
					<input type="text" name="txtUsername" class="form-control" placeholder="Please Enter Username Of Mail" value="{{ old('txtUsername',$config['email']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Password (Mail) :</label>
					<input type="text" name="txtPassword" class="form-control" placeholder="Please Enter Password Of Mail" value="{{ old('txtPassword',$config['pass']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Port (Mail) :</label>
					<input type="text" name="txtPort" class="form-control" placeholder="Please Enter Port Of Mail" value="{{ old('txtPort',$config['port']) }}" />
				</div>
				<hr />
				<div class="form-group">
					<label class="control-label">Item On Page For News <span class="text-danger">*</span></label>
					<input type="text" name="txtItemNews" class="form-control" placeholder="Please Enter Item On Page For News" value="{{ old('txtItemNews',$config['item_page_news']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Item On Page For Product <span class="text-danger">*</span></label>
					<input type="text" name="txtItemProduct" class="form-control" placeholder="Please Enter Item On Page For Product" value="{{ old('txtItemProduct',$config['item_page_product']) }}" />
				</div>
				<hr />
				<div class="form-group">
					<label class="control-label">Facebook</label>
					<input type="text" name="txtFacebook" class="form-control" placeholder="Please Enter Facebook" value="{{ old('txtFacebook',$config['facebook']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Youtube</label>
					<input type="text" name="txtYoutube" class="form-control" placeholder="Please Enter Youtube" value="{{ old('txtYoutube',$config['youtube']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Twitter</label>
					<input type="text" name="txtTwitter" class="form-control" placeholder="Please Enter Twitter" value="{{ old('txtTwitter',$config['twitter']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Linkedin</label>
					<input type="text" name="txtLinkedin" class="form-control" placeholder="Please Enter Linkedin" value="{{ old('txtLinkedin',$config['linkedin']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Google Plus</label>
					<input type="text" name="txtGooglePlus" class="form-control" placeholder="Please Enter Google Plus" value="{{ old('txtGooglePlus',$config['google_plus']) }}" />
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Update Configuration</h6>
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
					<label class="control-label">Copyright <span class="text-danger">*</span></label>
					<input type="text" name="txtCopyright" class="form-control" placeholder="Please Enter Copyright" value="{{ old('txtCopyright',$config['copyright']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Author <span class="text-danger">*</span></label>
					<input type="text" name="txtAuthor" class="form-control" placeholder="Please Enter Author" value="{{ old('txtAuthor',$config['author']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Created <span class="text-danger">*</span></label>
					<input type="text" name="txtCreated" class="form-control" placeholder="Please Enter Time Created Website" value="{{ old('txtCreated',$config['dc_created']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Right Copyright <span class="text-danger">*</span></label>
					<input type="text" name="txtRightCopyright" class="form-control" placeholder="Please Enter Right Copyright" value="{{ old('txtRightCopyright',$config['dc_rights_copyright']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Creator Name <span class="text-danger">*</span></label>
					<input type="text" name="txtCreatorName" class="form-control" placeholder="Please Enter Creator Name" value="{{ old('txtCreatorName',$config['dc_creator_name']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Creator Email <span class="text-danger">*</span></label>
					<input type="text" name="txtCreatorEmail" class="form-control" placeholder="Please Enter Creator Email" value="{{ old('txtCreatorEmail',$config['dc_creator_email']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Identifier <span class="text-danger">*</span></label>
					<input type="text" name="txtIdentifier" class="form-control" placeholder="Please Enter Identifier" value="{{ old('txtIdentifier',$config['dc_identifier']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Language <span class="text-danger">*</span></label>
					<input type="text" name="txtLanguage" class="form-control" placeholder="Please Enter Language" value="{{ old('txtLanguage',$config['dc_language']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Placename <span class="text-danger">*</span></label>
					<input type="text" name="txtPlacename" class="form-control" placeholder="Please Enter Placename" value="{{ old('txtPlacename',$config['geo_placename']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Region <span class="text-danger">*</span></label>
					<input type="text" name="txtRegion" class="form-control" placeholder="Please Enter Region" value="{{ old('txtRegion',$config['geo_region']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Position <span class="text-danger">*</span></label>
					<input type="text" name="txtPositionGeo" class="form-control" placeholder="Please Enter Position" value="{{ old('txtPosition',$config['geo_position']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">ICBM <span class="text-danger">*</span></label>
					<input type="text" name="txtICBM" class="form-control" placeholder="Please Enter ICBM" value="{{ old('txtICBM',$config['icbm']) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Revisit After <span class="text-danger">*</span></label>
					<input type="text" name="txtRevisitAfter" class="form-control" placeholder="Please Enter Revisit After" value="{{ old('txtRevisitAfter',$config['revisit_after']) }}" />
				</div>

				<div class="form-group">
					<label class="control-label">Meta Robot</label>
					<select name="sltMetaRobot" class="form-control">
						<option value="noindex,follow" {{ (old('sltMetaRobot',$config['robots']) == 'noindex,follow') ? "selected" : '' }}>NOINDEX, FOLLOW</option>
						<option value="index,nofollow" {{ (old('sltMetaRobot',$config['robots']) == 'index,nofollow') ? "selected" : '' }}>INDEX, NOFOLLOW</option>
						<option value="noindex,nofollow" {{ (old('sltMetaRobot',$config['robots']) == 'noindex,nofollow') ? "selected" : '' }}>NOINDEX, NOFOLLOW</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Logo Website <span class="text-danger">*</span></label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtLogo',$config["logo"]) ? old('txtLogo',$config["logo"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtLogo" id="main-image-input" value="{{ old('txtLogo',$config["logo"]) ? old('txtLogo',$config["logo"]) :  '' }}" />
					</center><br />
				</div>
				<div class="form-group">
					<label class="control-label">Image Error</label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image-error" src="{{ old('txtImageError',$config["no_photo"]) ? old('txtImageError',$config["no_photo"]) :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImageError" id="main-image-error-input" value="{{ old('txtImageError',$config["no_photo"]) ? old('txtImageError',$config["no_photo"]) :  '' }}" />
					</center><br />
				</div>
			</div>
		</div>
	</div>
</form>
@endsection