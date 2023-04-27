<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="Cssfolder/adminLogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('register') }}">
                @csrf
				<img src="images/avatar.svg">
				<h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Name</h5>
                            <input id="name" type="text" class="input @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>

                  </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-address-book"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>

                  </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password"  required autocomplete=" new-password">

                  </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Confirme password</h5>
                            <input id="password-confirm" type="password" class="input" name="password_confirmation"  required autocomplete=" new-password">
                  </div>
                 </div>


            	<input type="submit" class="btn" value="Register">
                @error('email')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                @enderror
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
                @error('password')
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                @enderror
            </form>
        </div>
    </div>
    <script type="text/javascript" src="jsFolder/adminLogin.js"></script>
</body>
</html>
