<?php
$Fname=$_POST['txtFname'];
$Mname=$_POST['txtMname'];
$Lname=$_POST['txtLname'];
$Email=$_POST['txtEmail'];
$Adress=$_POST['txtAdress'];
$Postcode=$_POST['txtPost'];
$Phone=$_POST['txtPhone'];
$Bdate=$_POST['Bdate'];
$Gender=$_POST['txtGender'];
$City=$_POST['txtCity'];
$State=$_POST['txtState'];
$Country=$_POST['txtCountry'];
$img=$_POST['txtimg'];



$Unidegree=$_POST['txtUUname'];
$Colname=$_POST['txtCname'];

$Coursename=$_POST['txtCoursename'];
$Percentage=$_POST['txtCGPA'];
$SSdate=$_POST['txtSSdate'];
$EEdate=$_POST['txtEEdate'];

$Unihsc=$_POST['txtUname'];
$Colhsc=$_POST['txtCnamehsc'];

$Stream=$_POST['txtStream'];
$Percentagehsc=$_POST['txtCGPAhsc'];
$Sdate=$_POST['txtSdate'];
$Edate=$_POST['txtEdate'];












?>

<!DOCTYPE html>
<!-- Created By SumitJadhav -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder Website</title>
    <link rel="stylesheet" href="personal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

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
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>


                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>



    <form name="datapersnal" method="POST" action="finalCV.php">


    
    <div class="info">
    
        <p> Made with <i class="fa fa-heart"></i> by Sumit Jadhav </p>
        </a>
    </div>

  
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>

        <div class="contentform">
            <div id="sendmessage"> Your information has been sent successfully. Thank you. </div>


            <div class="center">
                <p><h2>Skills :</h2> </p>
                <br>
                <div class="form-group">
                    <p>Programming Languages do you know  :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-language"></i></span>
                    <input type="text" name="txtPro" placeholder="C , Java , Python " id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Web Technology : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-window-maximize"></i></span>
                    <input type="text" name="txtWeb" placeholder=" HTML ,CSS ,PHP " id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Database : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-database"></i></span>
                    <input type="text" name="txtDatabase" placeholder="  MySQL ,Oracle DBMS" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>IED's : <span>*</span></p>
                    <span class="icon-case"> <i class="fas fa-laptop-code"></i> </span>
                    <input type="text" name="txtIed" placeholder="  Py-Charm ,VS Code, intellij IDEA " id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
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
                    <p>Platforms :<span>*</span></p>
                    <span class="icon-case"><i class="fab fa-windows"></i></span>
                    <input type="text" name="txtPlat" placeholder="  Microsoft Windows" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                



            </div>

            
        </div>
        <button type="submit" name="submit" class="bouton-contact">Submit</button>


<input type="hidden" name="txtFname" value="<?php  echo $Fname; ?>">
<input type="hidden" name="txtMname" value="<?php  echo $Mname; ?>">
<input type="hidden" name="txtLname" value="<?php  echo $Lname; ?>">
<input type="hidden" name="txtEmail" value="<?php  echo $Email; ?>">
<input type="hidden" name="txtAdress" value="<?php  echo $Adress; ?>">
<input type="hidden" name="txtPost" value="<?php  echo $Postcode; ?>">
<input type="hidden" name="Bdate" value="<?php  echo $Bdate; ?>">
<input type="hidden" name="txtGender" value="<?php  echo $Gender; ?>">
<input type="hidden" name="txtCity" value="<?php  echo $City; ?>">
<input type="hidden" name="txtState" value="<?php  echo $State; ?>">
<input type="hidden" name="txtCountry" value="<?php  echo $Country; ?>">
<input type="hidden" name="txtPhone" value="<?php  echo $Phone; ?>">
<input type="hidden" name="txtimg" value="<?php  echo $img; ?>">


<input type="hidden" name="txtUUname" value="<?php  echo $Unidegree; ?>">
<input type="hidden" name="txtCname" value="<?php  echo $Colname; ?>">
<input type="hidden" name="txtCoursename" value="<?php  echo $Coursename; ?>">
<input type="hidden" name="txtCGPA" value="<?php  echo $Percentage; ?>">
<input type="hidden" name="txtSSdate" value="<?php  echo $SSdate; ?>">
<input type="hidden" name="txtEEdate" value="<?php  echo $EEdate; ?>">
<input type="hidden" name="txtUname" value="<?php  echo $Unihsc; ?>">
<input type="hidden" name="txtCnamehsc" value="<?php  echo $Colhsc; ?>">
<input type="hidden" name="txtStream" value="<?php  echo $Stream; ?>">
<input type="hidden" name="txtCGPAhsc" value="<?php  echo $Percentagehsc; ?>">
<input type="hidden" name="txtSdate" value="<?php  echo $Sdate; ?>">
<input type="hidden" name="txtEdate" value="<?php  echo $Edate; ?>">








    </form>






    <script src="home.js"></script>
</body>

</html>