@if(!Route::is(['index']))
    	<!-- Breadcrumb -->
			<div class="breadcrumb-bar text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-12">
							<h2 class="breadcrumb-title mb-2">{{ $title }}</h2>
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb justify-content-center mb-0">
									<li class="breadcrumb-item"><a href="{{url('index')}}">{{ $item1 }}</a></li>
									<li class="breadcrumb-item active" aria-current="page">{{ $item2 }}</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->

@endif

