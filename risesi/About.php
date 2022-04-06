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


        <div id="headline">
            <p>This website allows you to find salons all over Uganda and follow them on social media.<br>
                Enjoy your journey through the site!
            </p>
        </div>
        <div id="terms">
            <h1>Terms and conditions of use</h1>
            <p>These terms and conditions apply between you, the User of this Website (including any sub-domains, unless expressly excluded by their own terms<br>
             and conditions), and the owner and operator of this Website ("RisesiSalonOperators'Association"). Please read these terms and conditions carefully, as they affect<br>
              your legal rights. Your agreement to comply with and be bound by these terms and conditions is deemed to occur upon your first use of the Website. If<br>
               you do not agree to be bound by these terms and conditions, you should stop using the Website immediately.
            </p>
            <p>In these terms and conditions, User or Users means any third party that accesses the Website and is not either (i) employed by RisesiSalonOperators'Association<br>
             and acting in the course of their employment or (ii) engaged as a consultant or otherwise providing services to RisesiSalonOperators'Association and accessing<br>
              the Website in connection with the provision of such services.
            <p>
           <p>You must be at least 18 years of age to use this Website. By using the Website and agreeing to these terms and conditions, you represent and warrant<br>
                that you are at least 18 years of age.
            </p>
        </div>
        <div id="prohibits">
            <h2>Prohibited use</h2>
            <p>You may not use the Website for any of the following purposes:</p>

            <p>1. in any way which causes, or may cause, damage to the Website or interferes with any other person's use or enjoyment of the Website;</p>

            <p>2. in any way which is harmful, unlawful, illegal, abusive, harassing, threatening or otherwise objectionable or in breach of any applicable law,<br> regulation, governmental order;</p>

            <p>3. making, transmitting or storing electronic copies of Content protected by copyright without the permission of the owner.</p>
        </div>
        <diV id="copyrights">
            <h2>Copyright infringement</h2>
            <p>You agree that content you submit to this site will not contain any third party copyright material, or material that is subject to other third party<br>
                proprietary rights (including rights of privacy or rights of publicity), unless you have a formal license or permission from the rightful owner, or are<br>
                otherwise legally entitled, to post the material and to grant Youngevity the license to legally showcase the content on this site.
            </p>

            <p>The Digital Millennium Copyright Act of 1998 (the "DMCA") provides recourse for copyright owners who believe that electronic material infringes their<br>
                rights under U.S. copyright law. If you believe in good faith that materials posted on this site infringe your copyright, you or your agent may send a<br>
                 “Notification of Claimed Infringement” requesting that the material be removed, or access to be blocked. The notice must include the following<br>
                  information:
            </p>

            <p>1. A physical or electronic signature of a person authorized to act on behalf of the owner of the works that have been allegedly infringed;</p>

            <p>2. Identification of the copyrighted work alleged to have been infringed, or if multiple copyrighted works located on this site are covered by a single<br>
                notification, a representative list of such works;
            </p>

            <p>3. Identification of the specific material alleged to be infringing or the subject of infringing activity, and information reasonably sufficient to allow the<br>
                operators of this site to locate the material on this site;
            </p>

            <p>4. Your name, address, telephone number, and email address;</p>

            <p>5. A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its<br>
                 agent, or the law; and
            </p>

            <p>6. A statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on<br>
                 behalf of the owner of an exclusive right that is allegedly infringed.
            </p>

            <p>Requests should be submitted using this <a href="contactform.php">contact form</a>, and will normally be processed within 2 business days.</p>
        </div>
        <div id="disclaimer">
            <h2>Availability of the Website and disclaimers</h2>
            <p>Any online facilities, tools, services or information that RisesiSalonOperators'Association makes available through the Website (the Service) is provided "as is" and<br>
                 on an "as available" basis. We give no warranty that the Service will be free of defects and/or faults. To the maximum extent permitted by the law, we<br>
                provide no warranties (express or implied) of fitness for a particular purpose, accuracy of information, compatibility and satisfactory quality.<br>
                RisesiSalonOperators'Association is under no obligation to update information on the Website.
            </p>

           <p>Whilst RisesiSalonOperators'Association uses reasonable endeavours to ensure that the Website is secure and free of errors, viruses and other malware, we give<br>
                no warranty or guaranty in that regard and all Users take responsibility for their own security, that of their personal details and their computers.
            </p>

            <p>RisesiSalonOperators'Association accepts no liability for any disruption or non-availability of the Website.</p>

            <p>RisesiSalonOperators'Association reserves the right to alter, suspend or discontinue any part (or the whole of) the Website including, but not limited to, any<br>
                products and/or services available. These terms and conditions shall continue to apply to any modified version of the Website unless it is expressly<br>
                 stated otherwise.
            </p>
        </div>
        <div id="limitation">
            <h2>Limitation of liability</h2>
            <p>Nothing in these terms and conditions will: (a) limit or exclude our or your liability for death or personal injury resulting from our or your negligence, as<br>
                applicable; (b) limit or exclude our or your liability for fraud or fraudulent misrepresentation; or (c) limit or exclude any of our or your liabilities in any<br>
                way that is not permitted under applicable law.
            </p>

            <p>We will not be liable to you in respect of any losses arising out of events beyond our reasonable control.</p>

            <p>To the maximum extent permitted by law, RisesiSalonOperators'Association accepts no liability for any of the following:</p>

            <p>1. any business losses, such as loss of profits, income, revenue, anticipated savings, business, contracts, goodwill or commercial opportunities;</p>

            <p>2. loss or corruption of any data, database or software;</p>

            <p>3. any special, indirect or consequential loss or damage.</p>


        </div>
        <div id="general">
            <h2>General</h2>
            <p>1. You may not transfer any of your rights under these terms and conditions to any other person. We may transfer our rights under these terms and<br>
                conditions where we reasonably believe your rights will not be affected.
            </p>

            <p>2. These terms and conditions may be varied by us from time to time. Such revised terms will apply to the Website from the date of publication. Users<br>
                should check the terms and conditions regularly to ensure familiarity with the then current version.
            </p>

            <p>3. These terms and conditions contain the whole agreement between the parties relating to its subject matter and supersede all prior discussions,<br>
                arrangements or agreements that might have taken place in relation to the terms and conditions.
            </p>

            <p>4. If any court or competent authority finds that any provision of these terms and conditions (or part of any provision) is invalid, illegal or<br>
                 unenforceable, that provision or part-provision will, to the extent required, be deemed to be deleted, and the validity and enforceability of the other<br>
                  provisions of these terms and conditions will not be affected.
            </p>

            <p>5. Unless otherwise agreed, no delay, act or omission by a party in exercising any right or remedy will be deemed a waiver of that, or any other, right or<br>
                 remedy.
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
                    <a href="contactform.php">
                        <span class="icon"><ion-icon name="caret-forward-outline"></ion-icon></span>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="privacy.php">
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