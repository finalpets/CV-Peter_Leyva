<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	@include('partials._head')	
</head>

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		@include('partials._nav')  
		<!-- header end -->
{{-- <h1>Create Post</h1> --}}

{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 object-non-visible" data-animation-effect="zoomIn">
							<h1 class="text-center">Desarrollador de Paginas <span>Web</span></h1>
							<p class="lead text-center">Innovando con la tecnologia mas actual, diseños de paginas muy vistosas rapidas y economicas para su negocio.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start About-->
		<!-- ================ -->
		@include('partials._about')  
		<!-- section end -->

		<!-- section start Services -->
		@include('partials._services') 
		<!-- ================ -->

		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Hagamos que su negocio prospere!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start Portfolio-->			
		<!-- ================ -->
			@include('partials._portfolio') 

		<!-- section end -->

		<!-- section start Clientes-->
		<!-- ================ -->
			@include('partials._clients')

		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">Hablemos de negocios!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">
			@include('partials._footer')
		</footer>
		<!-- footer end -->

		@include('partials._javascript')

	</body>
</html>
