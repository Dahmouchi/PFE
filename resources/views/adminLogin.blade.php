<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="Cssfolder/adminLogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

	<img class="wave" src="images/wave1.png">
    <a href="{{url('/')}}" class ="logo"><img src="images/la-gauche.png" alt="" width="50" height="50"></a>
	<div class="container">
        <img src="images/logo.png" alt="" width="220" height="220" class="logo1">
		<div class="img">
                <img src="images/bj.png">

		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<img src="images/avatar.png">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-Glyph"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
                              <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
                           <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    </div>
            	</div>

            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
                <div class="btn1">
                     <a href="{{Route('sinUp')}}" >Registre</a>
                </div>

                @error('email')
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
