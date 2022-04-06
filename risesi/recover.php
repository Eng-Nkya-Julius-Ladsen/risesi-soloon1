<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recover-account</title>
    </head>
    <style>
         body{
            font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
            display: block;
           
        }
         .header{
            display: flex;
            justify-content: space-evenly;
            
            padding: 30px 30px;
            background-color:white;
        }
        .nav-links{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        ul{
                list-style-type: none;
                margin: 0;
                display: flex;
                justify-content: center;
                text-align: center;
                overflow: hidden;
                background-color:white;

        }
        li{
                float: left;
                justify-content: space-evenly;
                text-align: center;
         }
        li a{
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
        }
        ul li a{
                color: black;
                text-decoration: none;
                font-size: 13px;
        }
        ul li a select{
            border: none;
            font-family: "Arial Narrow", Arial, "Helvetica Condensed", Helvetica, sans-serif;
            font-weight: bold;
        }
        ul li::after{
                content: '';
                width: 0%;
                height: 2px;
                background:aqua;
                display: block;
                margin: auto;
                transition: 0.5s;
        }
        ul li:hover::after{
                width: 50%;
        }
        input{
           outline: none;
        }
        .search input{
            border: 1px solid black;
            height: 25px;
            border-radius: 25px;
        }
        .search button{
            border: 1px solid black;
            height: 20px;
            border-radius: 25px;
        }
        .search button a{
            color: black;
            text-decoration: none;
        }
        h3{
            text-align: center;
        }
        form
        {
            display: flex;
            flex-direction: column;
            margin: auto;
            width: 50%;
            
        }
        input{
            outline: none;
        }
        .form-group form button{
            width: 20%;
            margin-top: 5px;
            border: 1px solid #000;
            padding: 5px 0;
            border-radius: 20px;
        }
        .form-group form input
        {
            border: 1px solid skyblue;
            height: 35px;
            border-radius: 20px;
        }
        .form-group form input::placeholder
        {
            text-align: center;
        }
        #footer{
           background: black;
           background-size: cover;
           border: black;
           border-radius: 10px;
           margin-top: 200px;
        }
        #authur{

            background: black;
            background-size: cover;
            border: 1px solid black;
            border-radius: 25px;
            
        }
        #authur p{
            color: white;
            text-align: center;
        }
    </style>
   
    <body>
        <!---Header--->
        <div class="header">
            <div class="logo">
                <img src="r-logo.jpg" width="150px">
            </div>
            <div class="nav-links">
                <ul>
                    <li>
                        <a href="Home-page.php">
                            <span class="icon"><ion-icon name="home-outline"><ion-icon></span>
                            <span><b>HOME</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="About.php">
                            <span class="icon"><ion-icon name="information-circle-outline"><ion-icon></span>
                            <span><b>ABOUT US</b></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon" for="products"><ion-icon name="server-outline"><ion-icon></span>
                            <select name="products" id="products">
                            <option><b>PRODUCTS/SERVICES</b></option>
                            <option value="hair-salon">Hair Salon</option>
                            <option value="Cosmetic Products">Cosmetic products</option>
                            <option value="Bridal">Bridal</option>
                            <option value="Coperate Services">Coperate Services</option>
                            </select>
                        </a>
                    </li>
                    <li>
                        <a href="contactform.php">
                            <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                            <span><b>CONTACTS</b></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <input type="text" name="search-bar">
                <button><a href="">Search</a></button>
            </div>
        </div>
        <div class="forget-password">
            <div class="container">
                <div class="password">
                    <h3>Please enter your username or email address. You will receive an email address to reset your password</h3>
                    <div class="form-group">
                        <form action="">
                            <label for="">Email/Phone number</label>
                            <input type="email" placeholder="Enter your email">
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <ul>
                <li>
                    <a href="About.php">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>About</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>Privacy<span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>FAQ<span>
                    </a>
                </li>
                <li>
                    <a href="Login.php">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>Login</span>
                    </a>
                </li>
            </ul>
        </div>
        <div id="authur">
            <p>&copy; 2022 Risesi Salon Operators' Association, Kazo-Kawempe, Uganda. All rights reserved.</p>  
        </div>
        
        <script type= "module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
    </body>
</html>