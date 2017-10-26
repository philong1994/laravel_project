@extends ('backend.master')
@section ('back',route('admin.role'))
@section ('title','Edit Role')
@section ('controller','Role')
@section ('action','Edit')
@section ('content')
<form action="" method="POST" accept-charset="utf-8">
	{{ csrf_field() }}

	@include ('backend.blocks.button',['exit' => route('admin.role')])

	@include ('backend.blocks.alert')

	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Edit Role</h6>
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
					<input type="text" id="name-slug" name="txtName" class="form-control" placeholder="Please Enter Name Role" value="{{ old('txtName',$role["name"]) }}" />
				</div>
				<div class="form-group">
					<label class="control-label">Description</label>
					<textarea name="txtDescription">{{ old('txtDescription',$role["description"]) }}</textarea>
					<script type="text/javascript">
						 CKEDITOR.replace('txtDescription', { height: '150px' });
					</script>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Category</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Category 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_cate" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_cate') }} /> List Category </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_cate" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_cate') }} /> Add Category </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_cate" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_cate') }} /> Edit Category </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_cate" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_cate') }} /> Delete Category </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">News</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager News 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_news" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_news') }} /> List News </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_news" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_news') }} /> Add News </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_news" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_news') }} /> Edit News </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_news" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_news') }} /> Delete News </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Post</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Post 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_post" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_post') }} /> List Post </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_post" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_post') }} /> Add Post </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_post" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_post') }} /> Edit Post </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_post" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_post') }} /> Delete Post </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Tags</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Tags 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_tag" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_tag') }} /> List Tags </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_tag" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_tag') }} /> Add Tags </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_tag" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_tag') }} /> Edit Tags </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_tag" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_tag') }} /> Delete Tags </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Attribute</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Attribute 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_attribute" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_attribute') }} /> List Attribute </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_attribute" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_attribute') }} /> Add Attribute </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_attribute" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_attribute') }} /> Edit Attribute </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_attribute" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_attribute') }} /> Delete Attribute </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Manufacturer</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Manufacturer 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_manufacturer" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_manufacturer') }} /> List Manufacturer </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_manufacturer" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_manufacturer') }} /> Add Manufacturer </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_manufacturer" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_manufacturer') }} /> Edit Manufacturer </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_manufacturer" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_manufacturer') }} /> Delete Manufacturer </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Product</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Product 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_product" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_product') }} /> List Product </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_product" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_product') }} /> Add Product </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_product" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_product') }} /> Edit Product </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_product" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_product') }} /> Delete Product </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Position</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Position 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_position" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_position') }} /> List Position </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_position" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_position') }} /> Add Position </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_position" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_position') }} /> Edit Position </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_position" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_position') }} /> Delete Position </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Banner</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Banner 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_banner" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_banner') }} /> List Banner </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_banner" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_banner') }} /> Add Banner </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_banner" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_banner') }} /> Edit Banner </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_banner" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_banner') }} /> Delete Banner </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">User</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager User 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_user" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_user') }} /> List User </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_user" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_user') }} /> Add User </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_user" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_user') }} /> Edit User </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_user" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_user') }} /> Delete User </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h6 class="panel-title">Role</h6>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<ul>
					<li><input type="checkbox" name="chkManage" class="chkRole" /> Manager Role 
						<ul>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="list_role" {{ checkedRole (old('chkRole',json_decode($role["role"])),'list_role') }} /> List Role </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="add_role" {{ checkedRole (old('chkRole',json_decode($role["role"])),'add_role') }} /> Add Role </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="edit_role" {{ checkedRole (old('chkRole',json_decode($role["role"])),'edit_role') }} /> Edit Role </li>
							<li><input type="checkbox" name="chkRole[]" class="chkRole" value="delete_role" {{ checkedRole (old('chkRole',json_decode($role["role"])),'delete_role') }} /> Delete Role </li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</form>
@endsection