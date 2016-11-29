<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calvados</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<!DOCTYPE html>
	<html lang="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
	{{ Html::style('local/vendor/bootstrap/css/bootstrap.min.css') }}
    <!-- Theme CSS -->
    {{ Html::style('css/freelancer.css') }}
    <!-- Custom Fonts -->
	{{ Html::style('local/vendor/font-awesome/css/font-awesome.min.css') }}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Calvados Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="downloadtext.html">Article</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="download.php">Downloads</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<header>
    <div class="container">
       <div class="row">
			 <div class="col-lg-12">
			{{ Html::image("img/profile_wr.png") }}
				 <div class="intro-text">
                        <span class="name">Calvados Blog</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<div class="container">
		@yield('content')
	</div>

@yield('footer')
	{{ Html::script('local/vendor/jquery/jquery.min.js') }}
    <!-- Bootstrap Core JavaScript -->
	{{ Html::script('local/vendor/bootstrap/js/bootstrap.min.js') }}
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
	{{ Html::script('js/jqBootstrapValidation.js') }}
	{{ Html::script('js/contact_me.js') }}

    <!-- Theme JavaScript -->
	{{ Html::script('js/freelancer.min.js') }}
</body>
</html>
