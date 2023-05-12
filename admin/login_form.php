

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="/webnative/">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

  <section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<!-- <div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="img/login.jpg" alt="">
						<div class="hover">
							<h4>New to our website?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="primary-btn" href="registration.html">Create an Account</a>
						</div>
					</div>
				</div> -->
				<div class="col-lg-12">
					<div class="login_form_inner">
						<h3>Log in to enter</h3>
						<form class="row login_form" action="./admin/membercontroller.php" method="POST" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<div class="creat_account">
									<input type="checkbox" id="f-option2" name="selector">
									<label for="f-option2">Keep me logged in</label>
								</div>
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- <section class="col-lg-6">
  <form action="./admin/membercontroller.php" method="POST">
    <div class="form-group row">
      <label for="text" class="col-4 col-form-label">Username</label> 
        <div class="col-8">
          <input id="text" name="username" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
      <label for="text1" class="col-4 col-form-label">Password</label> 
        <div class="col-8">
          <input id="text1" name="password" type="password" class="form-control">
        </div>
      </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</section> -->