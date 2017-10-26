@extends ('backend.master')
@section ('back',route('admin.product'))
@section ('title','Add Product')
@section ('controller','Product')
@section ('action','Add')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.product')])

	@include ('backend.blocks.alert')

	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add Product</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<div class="tabbable tab-content-bordered">
					<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
						<li class="active"><a href="#bordered-justified-tab1" data-toggle="tab">Infomation</a></li>
						<li><a href="#bordered-justified-tab2" data-toggle="tab">Images</a></li>
						<li><a href="#bordered-justified-tab3" data-toggle="tab">Attribute</a></li>
					</ul>

					<div class="tab-content">
						<div class="tab-pane has-padding active" id="bordered-justified-tab1">
							<div class="form-group">
								<label class="control-label">Serial</label>
								<input type="text" name="txtSerial" class="form-control" placeholder="Please Enter Product Serial" value="{{ old('txtSerial') }}" />
							</div>
							<div class="form-group">
								<label class="control-label">Name <span class="text-danger">*</span></label>
								<input type="text" id="name-slug" name="txtTitle" class="form-control" placeholder="Please Enter Product Name" value="{{ old('txtTitle') }}" />
							</div>
							<div class="form-group">
								<label class="control-label">Price <span class="text-danger">*</span></label>
								<div class="row">
									<div class="col-md-6">
										<div class="input-group">
			                                <input type="text" name="txtPriceImport" class="form-control price-import" placeholder="Import Price" value="{{ old('txtPriceImport') }}" />
			                                <input type="hidden" name="txtPriceImportDB" class="form-control price-import-hidden" value="{{ old('txtPriceImportDB') }}" />
			                            	<span class="input-group-addon">VNĐ</span>
			                            </div>
									</div>
									<div class="col-md-6">
										<div class="input-group">
			                                <input type="text" name="txtPriceSale" class="form-control price-sale" placeholder="Sale Price" value="{{ old('txtPriceSale') }}" />
			                                <input type="hidden" name="txtPriceSaleDB" class="form-control price-sale-hidden" value="{{ old('txtPriceSaleDB') }}" />
			                            	<span class="input-group-addon">VNĐ</span>
			                            </div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label">Expiration Date</label>
								<input type="text" name="txtExpiration" class="form-control" placeholder="Please Enter Expiration Date" value="{{ old('txtExpiration') }}" />
							</div>
							<div class="form-group">
								<label class="control-label">Intro <span class="text-danger">*</span></label>
								<textarea name="txtIntro">{{ old('txtIntro') }}</textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtIntro', { height: '200px' });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Content</label>
								<textarea name="txtContent">{{ old('txtContent') }}</textarea>
								<script type="text/javascript">
									 CKEDITOR.replace('txtContent', { height: '400px' });
								</script>
							</div>
							<div class="form-group">
								<label class="control-label">Slug URL <span class="text-danger">*</span></label>
								<input type="text" id="txtSlug" name="txtSlug" class="form-control" placeholder="Please Enter Slug URL" value="{{ old('txtSlug') }}" />
							</div>
							<div class="form-group" style="margin-bottom: 50px">
								<label class="control-label">Title Tag (Ex : Primary Keyword - Secondary Keyword) <span class="text-danger">*</span></label>
								<input type="text" id="txtMetaTitle" name="txtMetaTitle" class="form-control col-lg-6 maxlength-textarea" maxlength="70" placeholder="Please Enter Primary Keyword - Secondary Keyword (SEO)" value="{{ old('txtMetaTitle') }}" />
							</div>
							<div class="form-group">
								<label class="control-label">Meta Keywords <span class="text-danger">*</span></label>
								<input type="text" name="txtMetaKeywords" class="tags-input" placeholder="Please Enter Meta Keywords Tag (SEO)" value="{{ old('txtMetaKeywords') }}" />
								<span class="help-block">Keywords not more that 10 words</span>
							</div>
							<div class="form-group">
								<label class="control-label">Meta Description <span class="text-danger">*</span></label>
								<textarea rows="3" name="txtMetaDescription" cols="3" maxlength="160" class="form-control maxlength-textarea" placeholder="Please Enter Meta Description Tag (SEO)">{{ old('txtMetaDescription') }}</textarea>
							</div>
						</div>

						<div class="tab-pane has-padding" id="bordered-justified-tab2">
							<div class="table-responsive">
								<table id="images" class="table table-bordered">
									<thead>
										<tr>
											<th width="150px">Image</th>
											<th width="280">Alt</th>
											<th width="85px">Order</th>
											<th width="25px">Action</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="3"></td>
											<td><button type="button" onclick="addImage();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Image"><i class="icon-add"></i></button></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>

						<div class="tab-pane has-padding" id="bordered-justified-tab3">
							<table id="attribute" class="table table-bordered">
								<thead>
									<tr>
										<th width="247px">Attribute Name</th>
										<th width="247px">Attribute Value</th>
										<th width="100px">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="2"></td>
										<td><button type="button" onclick="addAttr();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Add Image"><i class="icon-add"></i></button></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Add Product</h6>
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
					<label class="control-label">Category <span class="text-danger">*</span></label>
					<div class="well" id="scroll-category">
						@if (empty($category))
							No Data In Category
						@else
							@php recursionList ($category,old('chkCategory')) @endphp
						@endif
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Manufacturer <span class="text-danger">*</span></label>
					<select name="sltManufacturer" class="form-control">
						<option value="" {{ (old('sltManufacturer') == '') ? 'selected' : '' }}>---------------- ROOT ----------------</option>
						@foreach ($manufacturer as $item)
						<option value="{{ $item["id"] }}" {{ (old('sltManufacturer') == $item["id"]) ? 'selected' : '' }}>{{ $item["name"] }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Viewed</label>
					<input type="text" name="txtViewed" class="form-control" placeholder="Please Enter Viewed Default" value="{{ old('txtViewed',100) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Link Youtube</label>
					<input type="text" name="txtVideo" class="form-control" placeholder="Please Enter Link Youtube" value="{{ old('txtVideo') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Access</label>
					<select name="sltAccess" class="form-control">
						<option value="0" {{ (old('sltAccess') == '0') ? 'selected' : '' }}>Public</option>
						<option value="1" {{ (old('sltAccess') == '1') ? 'selected' : '' }}>Admin</option>
						<option value="2" {{ (old('sltAccess') == '2') ? 'selected' : '' }}>Member</option>
						<option value="3" {{ (old('sltAccess') == '3') ? 'selected' : '' }}>Guest</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Target Open</label>
					<select name="sltTarget" class="form-control">
						<option value="_self" {{ (old('sltTarget') == '_self') ? 'selected' : '' }}>The same frame (_self)</option>
						<option value="_blank" {{ (old('sltTarget') == '_blank') ? 'selected' : '' }}>New window or tab (_blank)</option>
						<option value="_parent" {{ (old('sltTarget') == '_parent') ? 'selected' : '' }}>The parent frame (_parent)</option>
						<option value="_top" {{ (old('sltTarget') == '_top') ? "selected" : '' }}>The full body of the window (_top)</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Meta Robot</label>
					<select name="sltMetaRobot" class="form-control">
						<option value="noindex,follow" {{ (old('sltMetaRobot') == 'noindex,follow') ? "selected" : '' }}>NOINDEX, FOLLOW</option>
						<option value="index,nofollow" {{ (old('sltMetaRobot') == 'index,nofollow') ? "selected" : '' }}>INDEX, NOFOLLOW</option>
						<option value="noindex,nofollow" {{ (old('sltMetaRobot') == 'noindex,nofollow') ? "selected" : '' }}>NOINDEX, NOFOLLOW</option>
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Main Image <span class="text-danger">*</span></label><br />
					<center>
						<img class="img-responsive" width="60%" id="main-image" src="{{ old('txtImage') ? old('txtImage') :  asset('backend/assets/images/upload.png') }}" />
						<input type="hidden" name="txtImage" id="main-image-input" value="{{ old('txtImage') ? old('txtImage') :  '' }}" />
					</center><br />
					<label class="control-label">Alt Image <span class="text-danger">*</span></label><br />
					<input type="text" name="txtAlt" class="form-control" placeholder="Please Enter Alt For Image" value="{{ old('txtAlt') }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Status Product</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkStatus" data-on-color="success" data-off-color="danger" data-on-text="Online" data-off-text="Offline" class="switch" checked="checked" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Featured Product</label><br />
					<div class="checkbox checkbox-switch">
						<input type="checkbox" name="chkFeatured" data-on-color="success" data-off-color="danger" data-on-text="Featured" data-off-text="Unfeatured" class="switch" />
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection