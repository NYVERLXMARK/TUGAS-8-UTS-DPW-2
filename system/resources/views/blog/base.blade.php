<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{url('public')}}/blog/assets/img/icon.png">
<title>NyverL Blog</title>
<!-- Bootstrap core CSS -->
<link href="{{url('public')}}/blog/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Custom styles for this template -->
<link href="{{url('public')}}/blog/assets/css/mediumish.css" rel="stylesheet">
</head>
<body>

<!-- Begin Nav
================================================== -->
@include('blog.section.header')
<!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
	@include('blog.section.mainhead')
<!-- End Site Title
================================================== -->

	<!-- Begin List Posts
	================================================== -->
    @yield('contact')
    <section class="recent-posts">
        <div class="card-columns listrecent">
            @yield('content')

        </div>
        @yield('post')
	</section>
	<!-- End List Posts
	================================================== -->

	<!-- Begin Footer
	================================================== -->
    @include('blog.section.footer')
	<!-- End Footer
	================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('public')}}/blog/assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{url('public')}}/blog/assets/js/bootstrap.min.js"></script>
<script src="{{url('public')}}/blog/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
