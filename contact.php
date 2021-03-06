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
                <h3 class="titulos-section P30 PBot">Contact us</h3>
                <ul class="contact P30 PBot">
                    <li class="P15 PBot">We are an export company who deals with wholesale distributors worldwide, with special interest in China and Asia.</li>
                    <li class="P15 PBot">We do not sell online.</li>
                    <li class="P15 PBot">The languages we currently use for orders and transactions currently are english and spanish</li>
                    <li class="P15 PBot">Please conctact us if you are interested in any of our products for prices, rates, minumum purchase orders, payment methods, etc</li>
                    <li class="P15 PBot">If you want something that is not included in our catalog, don´t hesitate to ask. We will do our best to get it for you</li>
                </ul>
                <h4  class="titulos-b P15 PBot">Get In Touch</h4>
                <p class="P30 PBot">Fill out the form below or call us at  <span class="phone">+34 627 21 92 85</span>.</p>
            
                <form action = "controllers/mail.php" method="POST" enctype="application/x-www-form-urlencoded">
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
        </div><!--div container-contact -->
    <?php include("includes/footer.php");?>
    </div><!--div wrap-->
    <script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/main.js" type="text/javascript"></script>
    
</body>
</html>