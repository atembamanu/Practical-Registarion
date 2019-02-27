<?php include_once 'navbar.php';?>
<html>
<head>
	<title>Practical Registration</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<aside class="col-sm-6">
				<div class="card">
					<article class="card-body">
						<h4 class="card-title mb-4 mt-1">Sign up</h4>
						<p>
							<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>   Signup via Twitter</a>
							<a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Signup via facebook</a
								<hr>
								<p>OR</p>
							</p>
							<hr>
							<form>
								<div class="form-group">
									<input name="" class="form-control" placeholder="Email" type="email"
									required="required"
									data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div> <!-- form-group// -->
								<div class="form-group">
									<input class="form-control" placeholder="******" type="password"
									required="required"
									data-error="Valid password is required.">
									<div class="help-block with-errors"></div>
								</div> <!-- form-group// -->                                      
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-block"> Signup  </button>
										</div> <!-- form-group// -->
									</div>                                           
								</div> <!-- .row// -->                                                                  
							</form>
						</article>
					</div> <!-- card.// -->

				</aside> <!-- col.// -->
				<aside class="col-sm-6">
					<div class="card">
						<article class="card-body">
							<h4 class="card-title mb-4 mt-1">Sign in</h4>
							<p>
								<a href="" class="btn btn-block btn-outline-info"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
								<a href="" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>

								<p>OR</p>
							</p>
							<hr>
							<form>
								<div class="form-group">
									<input name="" class="form-control" placeholder="Email" type="email" required="required"
									data-error="Valid email is required.">
									<div class="help-block with-errors"></div>
								</div> <!-- form-group// -->
								<div class="form-group">
									<input class="form-control" placeholder="******" type="password" required="required"
									data-error="Valid password is required.">
									<div class="help-block with-errors"></div>
								</div> <!-- form-group// -->                                      
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<button type="submit" class="btn btn-success btn-block"> Login  </button>
										</div> <!-- form-group// -->
									</div>
									<div class="col-md-6 text-right">
										<a class="small" href="#">Forgot password?</a>
									</div>                                            
								</div> <!-- .row// -->                                                                  
							</form>
						</article>
					</div> <!-- card.// -->
				</body>
				</html>