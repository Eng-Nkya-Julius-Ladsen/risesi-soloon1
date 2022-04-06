<!DOCTYPE html>
<html>
    <head>
        <title>RisesiSignup</title>
    </head>
    <style>
         body{
            font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
            display: block;
           
        }
        .logo{
            margin-top: 50px;
           margin-left: 550px;
         
        }
        .logo img{
            border: none;
            border-radius: 25px;
        }
        #nav-links ul{
            display: flex;
            justify-content: space-around;
            list-style-type: none;
        }
        #nav-links ul li a{
            text-decoration: none;
            text-align: center;
        }
        .container{
            
            margin-left: 450px;
            width: 350px;
            height: auto;}
        .details{
            
            justify-content: space-between;
            padding: 10px 100px;
            
        }
        .details button{
            
            border: 1px solid aqua;
            border-radius: 25px;
        }
        form{
            display: flex;
            flex-direction: column;
            
        }
        form input{
            width: 100%;
            border: 0.5px solid aqua;
            border-radius: 25px;
        }
        #other{
            display: flex;
            justify-content: space-evenly;
            text-align: center;
        }
        #other a{
            text-decoration: none;
            color: black;
        }
      
       
        #authur{

            background: black;
            background-size: cover;
            border: 1px solid black;
            border-radius: 25px;
            margin-top: 100px;
            
        }
        #authur p{
            color: white;
            text-align: center;
        }
        

    </style>
    <body>
            <div class="logo">
                <img src="r-logo.jpg" width="150px">
            </div>
        <div class="container">
            <div id="nav-links">
                <ul>
                    <li>
                        <a href="Home-page.php">
                            <span>HOME</span>
                        </a>
                    </li>
                    <li>
                        <a href="Login.php">
                            <span>PREVIOUS</span>
                        </a>
                    </li>
                </ul>
            </div>
        
            <div class="details">
                <form type="POST">
                    <label for="First name">FIRST NAME:</label>
                    <input type="text" name="firstname"/>
                    <label for="surname">SURNAME:</label>
                    <input type="text" name="surname"/>
                    <label for="Date of birth">D.O.B:</label>
                    <input type="date" name="date of birth"/>
                    <label for="age">AGE:</label>
                    <input type="numeric" name="age"/>
                    <label for="Phone">PHONE NUMBER:</label>
                    <input type="numeric" name="phone"/>
                    <label for="email">EMAIL:</label>
                    <input type="hyperlink" name="email"/>
                    <label for="1password">PASSWORD:</label>
                    <input type="numeric" name="1password"/>
                    <label for="2password">CONFIRM PASSWORD:</label>
                    <input type="numeric" name="2password"/>
                    
                </form>
                <button>SUBMIT</button>
            </div>
            <div id="other">
                <a href="Login.php">Login</a>
                <a href="recover.php">Forgot Password?</a>
            </div>
        </div>
   
        <div id="authur">
            <p>&copy; 2022 Risesi Salon Operators' Association, Kazo-Kawempe, Uganda. All rights reserved.</p>  
        </div>
        <script type= "module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>