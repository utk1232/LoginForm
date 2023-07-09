

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class='container'>
        <div class="title">Login Form</div>
          <div class='content'>
             <form action='conn.php' method="post" enctype="multipart/form-data">
               <div class='user-details'>

                 <div class='input-box'>
                     <span class='details' >Full Name</span>
                      <input type='text' id="t1" name="t1" placeholder='Enter your name'  />
                     <h6 id="v1"></h6>
                    </div>

                 <div class='input-box'>
                    <span class='details' >Username</span>
                    <input type='text' id="t2" name="t2" placeholder='Enter your username'  />
                    <h6 id="v2"></h6>
                 
                </div>

                 <div class='input-box'>
                    <span class='details' >Email</span>
                    <input type='text' id="t3" name="t3" placeholder='Enter your email'  />
                    <h6 id="v3"></h6>

                 </div>

                 <div class='input-box'>
                    <span class='details' >Phone Number</span>
                    <input type='number' min=1 id="t4" name="t4" placeholder='Enter your phone no'  />
                    <h6 id="v4"></h6>
                 
                </div>

                 <div class='input-box'>
                    <span class='details'>Password</span>
                    <input type='text' id="t5" name="t5" placeholder='Enter password'  />
                    <h6 id="v5"></h6>
                 
                </div>

                 <div class='input-box'>
                    <span class='details'>Confirm Password</span>
                    <input type='text' id="t6" name="t6" placeholder='Confirm password'  />
                    <h6 id="v6"></h6>
                 
                </div>
             </div>

                <div class='gender-details'>
                    <input type='radio' value="Male" name='gender' id="dot-1" />
                    <input type='radio' value="Female" name='gender' id="dot-2" />
                    <input type='radio' value="Others" name='gender' id="dot-3" />
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>

                        <label for="dot-2"> 
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>

                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Other</span>
                        </label>
                    </div>
                    <h6 id="v7">hhg</h6>

                 </div>

                <div class="button">
                <input type="submit" id="btn" name="btn" value="Register">
                </div>

                <div class="das">
                <h1><a href="admin.php" style="text-decoration:none; color: green; ">Dashboard</a></h1>
                </div>
            </form> 
        </div>
    </div> 
 </body>
 <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="index.js"></script>
 </html>


