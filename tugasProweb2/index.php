
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign In</title>
        <link rel="icon" href="aset/image/loginku.png">
        <link rel="stylesheet"href="aset/css/bootstrap.css">
        <link rel="stylesheet"href="aset/css/floating-labels.css">
        <style>
            body {
                background-image: url("2.jpg");background-repeat: no-repeat;
                background-position: center; background-size: 100%;
            }
        </style>
      
    </head>
    <body >
        <form  class="form-signin">
            <div class="mb-8 modal-lg loginmodal-container">
                        <div class=" text-center mb-3">
                            <img  class="mb-4" width="150" height="150" src="g3.jpg">
                            <h3  style="color: red">Selamat Datang</h3>
                        </div> 
                
                        <div class="form-label-group">
                            <input class="form-control" type="email" id="email" placeholder="email address" 
                                   required="yes" autofocus="yes" autocomplete="no">
                            <label for="email">Email Address</label>
                        </div>

                        <div class="form-label-group">
                            <input class="form-control" type="password"  id="password" placeholder="password" 
                                   required="yes"autofocus="yes" autocomplete="no" >
                            <label for="password">Password</label>
                        </div>
                
                        <div class="checkbox mb-2">
                            <label>
                                <input type="checkbox">Remember Me?? </input>
                               
                            </label>
                        </div>
                <button  class="btn btn-lg btn-danger btn-block" type="submit">
                            <img class="mb-8" width="27" height="27" src="aset/image/gem.png"> 
                            Sign in </button>
            </div>
        </form>
    </body>
</html>
