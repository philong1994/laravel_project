<div class="navbar navbar-default" id="navbar-second">
	<ul class="nav navbar-nav no-border visible-xs-block">
		<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
	</ul>

	<div class="navbar-collapse collapse" id="navbar-second-toggle">
		<ul class="nav navbar-nav">
			<li><a href="{{ route('admin.dashboard.index') }}"><i class="icon-display4 position-left"></i> Dashboard</a></li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-folder position-left"></i> Category <span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-200">
					<li class="dropdown-header">Manage Category</li>
					<li><a href="{{ route('admin.category') }}"><i class="icon-folder-open"></i> List Category</a></li>
					<li><a href="{{ route('admin.category.create') }}"><i class="icon-folder-plus"></i> Add Category</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-man-woman position-left"></i> Member<span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Member</li>						
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-users"></i> User</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.user') }}">List User</a></li>
							<li><a href="{{ route('admin.user.create') }}">Add User</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-key"></i> Role</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.role') }}">List Role</a></li>
							<li><a href="{{ route('admin.role.create') }}">Add Role</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-stack-text position-left"></i> Article<span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Post</li>						
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-magazine"></i> Post</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.post') }}">List Post</a></li>
							<li><a href="{{ route('admin.post.create') }}">Add Post</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-price-tags"></i> Tags</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.tags') }}">List Tags</a></li>
							<li><a href="{{ route('admin.tags.create') }}">Add Tags</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-newspaper"></i> News</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.news') }}">List News</a></li>
							<li><a href="{{ route('admin.news.create') }}">Add News</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-grid6 position-left"></i> Product<span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Product</li>						
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-lab"></i> Attribute</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.attribute') }}">List Attribute</a></li>
							<li><a href="{{ route('admin.attribute.create') }}">Add Attribute</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-office"></i> Manufacturer</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.manufacturer') }}">List Manufacturer</a></li>
							<li><a href="{{ route('admin.manufacturer.create') }}">Add Manufacturer</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-cube3"></i> Product</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.product') }}">List Product</a></li>
							<li><a href="{{ route('admin.product.create') }}">Add Product</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-images2 position-left"></i> Media<span class="caret"></span>
				</a>
				<ul class="dropdown-menu width-250">
					<li class="dropdown-header">Manage Media</li>						
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-move-alt1"></i> Position Banner, Album</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.position') }}">List Position</a></li>
							<li><a href="{{ route('admin.position.create') }}">Add Position</a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><i class="icon-image2"></i> Banner , Album</a>
						<ul class="dropdown-menu width-200">
							<li><a href="{{ route('admin.banner') }}">List Banner</a></li>
							<li><a href="{{ route('admin.banner.create') }}">Add Banner</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-address-book position-left"></i> Contact <span class="caret"></span>
				</a>

				<ul class="dropdown-menu width-200">
					<li class="dropdown-header">Manage Contact</li>
					<li><a href="{{ route('admin.contact') }}"><i class="icon-address-book2"></i> List Contact</a></li>
					<li><a href="{{ route('admin.contact.create') }}"><i class="icon-phone-plus"></i> Add Contact</a></li>
				</ul>
			</li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-cog3"></i>
					<span class="visible-xs-inline-block position-right">Share</span>
					<span class="caret"></span>
				</a>

				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="{{ route('admin.user.edit',['id' => Auth::user()->id]) }}"><i class="icon-user-lock"></i> Edit My Account</a></li>
					<li><a href="#"><i class="icon-statistics"></i> Analytics (Updated)</a></li>
					<li><a href="#"><i class="icon-accessibility"></i> Accessibility (Updated)</a></li>
					<li class="divider"></li>
					<li><a href="{{ route('admin.dashboard.config') }}"><i class="icon-gear"></i> All settings</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>