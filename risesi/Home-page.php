<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Risesi Salon Operators' Association</title>
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
            border-radius: 25px;
            background-color:white;
        }
        .nav-links{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border: 1px solid white;
            border-radius: 25px;
        }

        ul{
                list-style-type: none;
                margin: 0;
                display: flex;
                justify-content: center;
                overflow: hidden;
                background-color:white;

        }
        li{
                float: left;
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
        .Home-a{
            background-color:aqua;
            padding: 5px 15px;
            border-radius: 20px;
        }
        .Home-a a{
            color:black;
            text-decoration: none;
           
        }
        .intro-head{
            text-align: center;  
        }
        #midcontent{
            display: flex;
            justify-content: space-between;
            margin-top: 200px;
            
            align-content: center;
        }
        #first {
        Display: block;
        justify-content: space-evenly;
        
        border-collapse: collapse;
        
        }
        #first img{
            width: 250px;
        }
        #first button{
            border: 1px solid aqua;
            border-radius: 25px;
            color:white;
            background:aqua;
            width: 100%;
        }

        #first td, #first th {
        border: none;
        border-radius: 15px;
        padding: 8px;
        }

        #first tr:nth-child(even){background-color: #f2f2f2;}

        #first tr:hover {background-color: #ddd;}

        #first th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }
        #second{
            padding-left: 120px;
        }
        #second p{
          position: relative;
          margin-left: 80px;
        }
        #second button{
            width: 80%;
            margin-bottom: 20px;
            text-align: center;
            border: none;
            border-radius: 25px;
            color: white;
            background: aqua;
        }
        #second img{
            width: 250px;
            height:300px;
        }
        #third button{
            width: 100%;
            border: none;
            border-radius:25px;
            color: white;
            background: aqua;
        }
        #video{
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        #video video{
            width: 100px;
        }
        #third{
            
        }
        #third td, #third th {
        border: none;
        border-radius: 15px;
        padding: 8px;
        }

        #third tr:nth-child(even){background-color: #f2f2f2;}

        #third tr:hover {background-color: #ddd;}

        #third th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
        }        
        #footer{
           background: black;
           border: black;
           border-radius: 10px;
           margin-top: 200px;
           width:100%;
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
        
        <div class="Home-a">
            <a href="">Home</a>
            >
            <a href="">Uganda</a>
            >
            <a href="">Saloons</a>
            >
            <a href="">Risesi Saloon Operators' Association</a>
        </div>
       
        <div class="intro-head">
            <p><h3>RISESI SALOON OPERATORS' ASSOCIATION</h3></p>
        </div>
<!---mid--->
        <div id="midcontent">
            <div id="first">
                <img src ="shot.jpg"><br>
                <button><h3>Nearby Hair Saloons</h3></button>
                <table>
                    <th>Nearby Hair Salons</th>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                </table>
                <a href="">See More</a><br>
                <button><h3>Nearby Beauty Salons</h3></button>
                <table>
                    <th>Nearby Beauty Salons</th>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                </table>
                <a href="">See More</a><br>
                <button><h3>Nearby Hair Salons</h3></button>
                <table>
                    <th>Nearby Hair Salons</th>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                    <tr>
                        <td><b>Sparkles Salon Uganda</b><br>(Acacia Mall, Forest Mall, Garden City)</td>
                    </tr>
                </table>
                <a href="">See More</a>
            </div>
            <div id="second">
                <p>Risesi Salon Operators' Association is a one stop<br>
                    point for classic beauticians.We are an association<br>
                     where salon operators' and beauticians are equipped with<br>
                    self-development skills and projects like the Emyooga
                </p>
                <button>Operating As Usual</button><br>
                <img src="hair1.jpg"> <img src="hair2.jpg">
                <img src="hair3.jpg"> <img src="hair4.jpg"><br>
                <a href="">See More</a>
            </div>
            <div id="third">
                <button>Claim ownership or rights abuse</button><br>
                <button>Videos (Show All)</button>
                <div id="video">
                    <video autoplay muted>
                    <source src ="risesi-navio.mp4" type="video/mp4">
                    <source src ="risesi-navio.ogg" type= "video/ogg">
                    Your browser does not support HTML
                    </video><br>
                    <video autoplay muted>
                    <source src ="risesi-johnblaq.mp4" type="video/mp4">
                    <source src ="risesi-johnblaq.ogg" type= "video/ogg">
                    Your browser does not support HTML
                    </video><br>
                </div>
                <a href="">See More</a>
                <button>Telephone</button><br>
                <a href="About.php">
                    <span class="icon"><ion-icon name="call"><ion-icon></span><span>(+256)-704555509</span>
                    
                </a><br>
                <a href="About.php">
                    <span class="icon"><ion-icon name="call"><ion-icon></span> <span>(+256)-704555509</span>
                   
                </a>
                <h3>WORKING HOURS</h3>
                <table>
                    <tr>
                        <th>DAY</th>
                        <th>WORKING HOURS</th>
                    </tr>
                    <tr>
                        <td>MONDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>TUESDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>WEDNESDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>THURSDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>FRIDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>SATURDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                    <tr>
                        <td>SUNDAY</td>
                        <td>8:00am-7:00pm</td>
                    </tr>
                </table>

            </div>
        </div>

<!----footer---->
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