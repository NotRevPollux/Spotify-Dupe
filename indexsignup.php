<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="stylesignup.css">
</head>
  
<body>
    <div class="fluid-container">
        <div class="container">
            <div class="col-lg-12 row main-section">
                <div class="col-lg-12 form-section">
                    <div class="form-container">
                        <h2 class="heading__h2"><i style="font-size: 1.5em;" class="fa fa-spotify"></i> Spotify</h2>
                        <br><br>
                        <p class="links__p"><a href="indexlogin.html">Sign In</a> | <a href="#" style="font-weight:700;">Sign Up</a></p>
                        <form action="/signup" method="POST">
                            <label for="name">EMAIL</label>
                            <input type="text" id="name" name="name" placeholder="Enter your Email" required>
                            <label for="password">PASSWORD</label>
                            <input type="password" id="password" name="password" placeholder="Set a strong password" required>
                            <input type="checkbox" id="checkbox" required>
                            <span> I agree to the <b>terms and conditions</b></span>
                            <br><br>
                            <center><button type="submit" class="button" name="signUp">Sign Up</button></center>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


