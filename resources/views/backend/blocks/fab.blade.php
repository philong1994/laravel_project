<ul class="fab-menu fab-menu-fixed fab-menu-bottom-right" data-fab-toggle="click">
	<li>
		<a class="fab-menu-btn btn bg-teal-400 btn-float btn-rounded btn-icon">
			<i class="fab-icon-open icon-paragraph-justify3"></i>
			<i class="fab-icon-close icon-cross2"></i>
		</a>

		<ul class="fab-menu-inner">
			<li>
				<div data-fab-label="Add News">
					<a href="{{ route('admin.news.create') }}" class="btn btn-default btn-rounded btn-icon btn-float">
						<i class="icon-newspaper"></i>
					</a>
				</div>
			</li>
			<li>
				<div data-fab-label="Add Product">
					<a href="{{ route('admin.product.create') }}" class="btn btn-default btn-rounded btn-icon btn-float">
						<i class="icon-cube3"></i>
					</a>
				</div>
			</li>
			<li>
				@if (empty(Auth::user()->firstname) && empty(Auth::user()->lastname))
					<div data-fab-label="Unknown">
				@else
					<div data-fab-label="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
				@endif
					<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-float">
						@if (empty(Auth::user()->avatar))
							<img src="{{ asset('backend/assets/images/placeholder.jpg') }}" class="img-responsive" alt="">
						@else
							<img src="{{ Auth::user()->avatar }}" class="img-responsive" alt="My Avatar">
						@endif
					</a>
					<span class="status-mark border-pink-400"></span>
				</div>
			</li>
		</ul>
	</li>
</ul>