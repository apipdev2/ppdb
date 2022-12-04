<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
  	*{
  		padding: 0px;
  		margin: 0px;
  	}
  	.header{
  		/*text-align: center;*/
  		background: #fff;
  		/*color: #fff;*/
  	}


  	.navbar{
  		/*background: #4cd137;*/
  		font-weight: bold;
  	}

  	.nav-item a:hover{
  		color: blue !important;
  		
  	}
  	.apk{

  	}
  </style>
  <body>

  	<div class="header">
	  	<div class="header-iner py-2">
	  		<div class="container-fluid text-center">
	  			<h3>SISFO</h3>
	  			<h4>SEKOLAH MENENGAH KEJURUAN</h4>
			      
	  		</div>	  		
	  	</div>
	 </div>
  	
	  	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light shadow p3"></nav> -->
	  	<nav class="navbar navbar-expand-lg bg-info navbar-light sticky-top">
		  <div class="container">
		   	<a class="navbar-brand" href="#">
		      <img src="<?= base_url('assets/img/'); ?>logo.png" alt="Bootstrap" width="40" height="40">
		    </a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
		        <li class="nav-item px-3">
		          <a class="nav-link"  href="#">Home</a>
		        </li>
		        <li class="nav-item px-3">
		          <a class="nav-link" href="#">Link</a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            Dropdown
		          </a>
		          <ul class="dropdown-menu">
		            <li><a class="dropdown-item" href="#">Action</a></li>
		            <li><a class="dropdown-item" href="#">Another action</a></li>
		            <li><hr class="dropdown-divider"></li>
		            <li><a class="dropdown-item" href="#">Something else here</a></li>
		          </ul>
		        </li>
		        <li class="nav-item px-3">
		          <a class="nav-link disabled">Disabled</a>
		        </li>
		      </ul>
		      <div class="d-flex">
		         <a class="nav-link text-dark" href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
		      </div>
		    </div>
		  </div>
		</nav>



	<div class="row bg-light">
		<div class="col-lg-12" style="height: 800px;">
		    <div class="container-fluid">
				<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. A, cupiditate cumque sapiente illo provident aspernatur sequi dicta necessitatibus iure at officia explicabo, vel. Recusandae sed labore illo, sunt quisquam, facilis.</p>
			</div>
		</div>
	</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>