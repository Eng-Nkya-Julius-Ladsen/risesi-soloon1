<!DOCTYPE html>
<html>
    <head>
        <title>About Risesi</title>
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
        #headline{
            display: flex;
            justify-content: space-between;
            margin-left: 350px;
            text-align: center;
            font-size: 20px;
            

            

        }
        #terms{
            justify-content: space-between;
            text-align: center;
            background: white;
              
        }
        #prohibits{
            justify-content: space-between;
            text-align: center;
            background: white;
        }
        #copyrights{
            justify-content: space-between;
            text-align: center;
            background: white;
        }
        #disclaimer{
            justify-content: space-between;
            text-align: center;
            background: white;
        }
        #limitation{
            justify-content: space-between;
            text-align: center;
            background: white;
        }
        #general{
            justify-content: space-between;
            text-align: center;
            background: white;
        }
        #reportbar{
            justify-content: space-between;
            text-align: center;
            margin-top: 50px;
            background: white;
        }
        #reportbar a{
            text-decoration: none;
        }
        #footer{
           background: black;
           background-size: cover;
           border: black;
           border-radius: 10px;
           margin-top: 50px;
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


        
        <div id="terms">
            <h1>Privacy Policy</h1>
            <p>This privacy policy is for the website BeautyNailHairSalons.com and governs the privacy of its users who choose to use it.</p>

            <p>The policy sets out the different areas where user privacy is concerned and outlines the obligations & requirements of the users, the<br>
                 website and website owners. Furthermore the way this website processes, stores and protects user data and information will also be<br>
                  detailed within this policy.
            </p>
        </div>
        <div id="prohibits">
            <h2>The Website</h2>
            <p>This website and its owners take a proactive approach to user privacy and ensure the necessary steps are taken to protect the privacy of<br>
                 its users throughout their visiting experience. This website complies to all applicable laws and requirements for user privacy.
            </p>
        </div>
        <diV id="copyrights">
            <h2>Use of Cookies</h2>
            <p>This website uses tracking software to monitor its visitors to better understand how they use it. This software is provided by Google<br>
                Analytics which uses cookies to track visitor usage. The software will save a cookie to your computers hard drive in order to track and<br>
                 monitor your engagement and usage of the website, but will not store, save or collect personal information. You can read Google's<br>
                  privacy policy here for further information [ http://www.google.com/privacy.html ].
            </p>

            <p>We also use Clicky Web Analytics to log and analyze the traffic to our web site. A "Unique ID" tracking cookie is used for the "legitimate<br>
                 purpose" of identifying unique visitors, but otherwise no "personal data" is logged.
            </p>

            <p>Other cookies may be stored to your computers hard drive by external vendors when this website uses referral programs, sponsored<br>
                 links or adverts. Such cookies are used for conversion and referral tracking and typically expire after 30 days, though some may take<br>
                  longer. No personal information is stored, saved or collected.
            </p>
        </div>
        <div id="disclaimer">
            <h2>Contact & Communication</h2>
            <p>Users contacting this website and/or its owners do so at their own discretion and provide any such personal details requested at their<br>
                 own risk. Your personal information is kept private and stored securely until a time it is no longer required or has no use, as detailed in the<br>
                  Data Protection Act 1998. Every effort has been made to ensure a safe and secure form to email submission process but advise user<br>
                   using such form to email processes that they do so at their own risk. This website and its owners use any information submitted to<br>
                    provide you with further information about the products / services they offer or to assist you in answering any questions or queries you<br>
                     may have submitted. This includes using your details to subscribe you to any email newsletter program the website operates but only if<br>
                      this was made clear to you and your express permission was granted when submitting any form to email process. Or whereby you the<br>
                       consumer have previously purchased from or enquired about purchasing from the company a product or service that the email<br>
                        newsletter relates to. This is by no means an entire list of your user rights in regard to receiving email marketing material. Your details are<br>
                         not passed on to any third parties.
            </p> 
        </div>
        <div id="limitation">
                <h2>Information We Collect</h2>
                <p>This website uses Google Analytics, a web analysis service provided by Google Inc, (hereafter referred to as "Google"). Google Analytics<br>
                     uses "cookies", or text files stored on your computer that permit analysis of your use of the website. The information generated by the<br>
                      cookie about your use of this website is generally transmitted to a Google server in the United States and stored there. If IP<br>
                       anonymisation is activated on these websites, however, your IP address will first be abbreviated within member states of the European<br>
                        Union or in other signatory states of the Agreement on the European Economic Area. Only in exceptional cases will the full IP address be<br>
                         transmitted to a Google server in the United States and abbreviated there. Google will use this information on behalf of the operator of<br>
                          this website to evaluate your use of the website, compile reports about website activity and provide other services to the website<br>
                           operator related to the use of the website and internet usage.
                </p>

                <p>We also use the technical extension "Google Signals", which enables cross-device tracking. This makes it possible to assign an individual<br>
                     website visitor to different end devices. However, this only happens if the visitor has logged in to a Google service when visiting a website<br>
                      and has activated the option "personalized advertising" in his Google account settings at the same time. Even then, no personal data or<br>
                       user profiles are accessible to us; they remain anonymous to us.
                </p>

                <p>If you do not want "Google Signals" to be used, you can disable the "Personalized advertising" option in your Google Account preferences.</p>

                <p>We also use Clicky Web Analytics to log and analyze the traffic to our web site. We log "personal data" to Clicky as follows, for the stated<br>
                     legitimate purposes: A "Unique ID" tracking cookie to identify unique visitors, your IP address for security and fraud prevention, and your<br>
                      name and email address if entered in the contact form to assist with customer service needs.
                </p>
        </div>
        <div id="general">
                <h2>External Links</h2>
                <p>Although this website only looks to include quality, safe and relevant external links, users are advised adopt a policy of caution before<br>
                     clicking any external web links mentioned throughout this website.
                </p>

                <p>The owners of this website cannot guarantee or verify the contents of any externally linked website despite their best efforts. Users<br>
                     should therefore note they click on external links at their own risk and this website and its owners cannot be held liable for any damages<br>
                      or implications caused by visiting any external links mentioned.
                </p>
        </div>
        
        <div id="reportbar">
            <p>Please use the <a href="contactform.php">contact form</a> to submit reports regarding the contents of this website. Please provide as much information as possible, including the<br>
                 URL of the offending page. Requests will normally be processed within 2 business days.
            </p>
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