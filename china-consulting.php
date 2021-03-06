<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name = "format-detection" content = "telephone=no">
<title>PREMIUM 88 | SPAIN´S FINEST FOODS & DRINKS</title>
<link rel="stylesheet" type="text/css" href="stylesheets/main.css">
<link rel="shortcut icon" type="image/x-icon" href="images/faviconb.ico">
<script src="script/html5.js" type="text/javascript"></script>
</head>

<body>
    <div id="wrap">
        <?php include("includes/header.php");?>
        <?php include("includes/header_responsive.php");?>

        <div id="container_contact">
            
            <div id="contact" class="cuerpo_a">
                <h3 class="titulos-section P30 PBot">China Consulting</h3>
                <ul class="contact P30 PBot">
                    <li class="P15 PBot">Do you want do to business in China and don´t know were to start?</li>
                    <li class="P15 PBot">Do you want to register your brand or product in China?</li>
                    <li class="P15 PBot">Do you want to create a company in China or Hong Kong?</li>   
                </ul>
                <p class="P30 PBot">Starting a business in China is not easy. Let us help you with the first steps and all the paperwork</p>
                <h4  class="titulos-b P15 PBot">Contact us with your case. We offer custom made solutions</h4>
                <p class="P30 PBot">Fill out the form below or call us at  <span class="phone">917.670.3314</span>.</p>
            
                <form action = "controllers/mail-cn.php" method="POST" enctype="application/x-www-form-urlencoded">
                        <label for="name">Name</label> 
                        <input type="text" name = "name" id="name" required/>
                       <!-- <input  type="tel" name="telefono" maxlength="9" placeholder="Teléfono"/>-->
                        <label for="email">Email</label> 
                        <input type="email " name="email" id="email" required/>
                        <label for="message">Message</label> 
                        <textarea name="message" id="message"maxlength = "200" required> 
                        </textarea>
                        <input id="submit" type="submit" value="Submit" class="btn"/>
                </form>
            </div>
            <!-- <div>
                <img src="images/premium-contact.jpg" height="590" width="412"/>
            </div>  -->   
        </div><!--div container-contact -->
    <?php include("includes/footer.php");?>
    </div><!--div wrap-->
    <script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/main.js" type="text/javascript"></script>
    
</body>
</html>