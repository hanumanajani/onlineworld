<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online world</title>
    <?php include 'links.php'; ?>
    <?php include 'online.css'; ?>
    
</head>
<body>
     <div class="containor">
         <div class="welcomebox">
             <h4 style="color:white;">welcome </h4>
        </div>
         <div>
             <h1> online world</h1>
         </div>
         <div>
             <h3>HRJ!!!</h3>
         </div>
     </div>
     <div class="containor1">
         
          <div class="loginpage">
            <div class="containor12">
                  <h2 class="asdf">Log in to online world</h2>
                <div class="inputmail">
                  <i class="fa fa-envelope" style="padding: 5px;" aria-hidden="true"></i>
                      <input type="email" name="email" placeholder=" enter email id " class="inputmailo" value="" required>
                </div>
                 <div class="inputpass">
                 <i class="fa fa-lock" style="padding: 5px;" aria-hidden="true"></i>

                     <input type="password" name="password1"   placeholder="enter password" value="" required>

                </div>
                 <div class="inputpass">
                 <i class="fa fa-lock" style="padding: 5px;" aria-hidden="true"></i>

                     <input type="password" name="password2"   placeholder="confirm password" value="" required>

                </div>
                <div class="loginbtn">
                    <button class="btn" name="login" value="" ><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>

                </div>
                <h4>----------or------------</h4>
                <div class="loginwithgoogle">
                    <button class="logingoogle" name="logingoogle" value=""><i class="fa fa-google" aria-hidden="true" style="background-color: white;border: solid red 1px;border-radius: 9px;width: 18px;height: 18px;color:dodgerblue;"></i>Login with google</button>
                </div>

            </div>
          </div>
          
     </div>

</body>
</html>