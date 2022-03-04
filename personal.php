






<!DOCTYPE html>
<!-- Created By SumitJadhav -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder Website</title>







    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />




    <link rel="stylesheet" href="personal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>

<body>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
                <a href="#">


                    <span1>Re</span1>su<span>me</span></a>
            </div>
            <ul class="menu">
                <li><a href="home.php" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>


                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>






    <h1>Personal Information Form</h1>
    <div class="info">

        <p> Made with <i class="fa fa-heart"></i> by Sumit Jadhav </p>
        </a>
    </div>

    
    <form name="datapersnal" method="POST" action="education.php">
    
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>

        <div class="contentform">
            <div id="sendmessage"> Your information has been sent successfully. Thank you. </div>


            
            <p><h2>Personal Information :</h2> </p>
<br>



           
            <div class="leftcontact">
                <div class="form-group">
                    <p>First Name :<span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                    <input type="text" name="txtFname" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Middle Name : <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="txtMname" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Last Name : <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="txtLname" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>E-mail <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="email" name="txtEmail" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
                    <div class="validation"></div>
                </div>

                <!---   <div class="form-group">
                    <p>Company <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-home"></i></span>
                    <input type="text" name="society" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné." />
                    <div class="validation"></div>
                </div>
            -->

                <div class="form-group">
                    <p>Address <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-address-card"></i></span>
                    <input type="text" name="txtAdress" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Postcode <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="txtPost" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné." />
                    <div class="validation"></div>
                </div>



            </div>

            <div class="rightcontact">


                <div class="form-group">
                    <p>Phone number <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-phone"></i></span>
                    <input type="text" name="txtPhone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres" />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Birth Date : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-birthday-cake"></i></span>
                    <input type="date" name="Bdate" id="fonction" />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Gender : <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-transgender"></i></span>
                    <input type="text" name="txtGender" id="ville" data-rule="required" placeholder="Male/Female/Other" />
                    <div class="validation"></div>
                </div>


                <div class="form-group">
                    <p>City <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-city"></i></span>
                    <input type="text" name="txtCity" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>State :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-chart-area"></i></span>
                    <input type="text" name="txtState" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Country :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-globe"></i></span>
                    <input type="text" name="txtCountry" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>





            </div>
        </div>
        <button type="submit" name="submit" class="bouton-contact">Submit</button>

    </form>






    <script src="home.js"></script>
</body>


</html>