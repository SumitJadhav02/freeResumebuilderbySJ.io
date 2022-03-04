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



    <form name="datapersnal" method="POST" action="skill.php">


  
    <div class="info">
    
        <p> Made with <i class="fa fa-heart"></i> by Sumit Jadhav </p>
        </a>
    </div>

  
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>

        <div class="contentform">
            <div id="sendmessage"> Your information has been sent successfully. Thank you. </div>
            <p><h2>Academic Qualification :</h2> </p>
<br>

            <div class="leftcontact">
                <p>Degree Details </p>
                <br>
                <div class="form-group">
                    <p>University Name :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-university"></i></span>
                    <input type="text" name="txtUUname" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Collage Name : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-graduation-cap"></i></i></span>
                    <input type="text" name="txtCname" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Course Name : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-book"></i></span>
                    <input type="text" name="txtCoursename" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Percentage/CGPA <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-percent"></i></span>
                    <input type="text" name="txtCGPA" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
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
                    <p>Starting Date :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-calendar-alt"></i></span>
                    <input type="date" name="txtSSdate" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Ending Date :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-calendar-alt"></i></span>
                    <input type="date" name="txtEEdate" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>



            </div>

            <div class="rightcontact">


                <p>HSC Details </p>
                <br>
                <div class="form-group">
                    <p>University Name :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-university"></i></span>
                    <input type="text" name="txtUname" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Collage Name : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-graduation-cap"></i></span>
                    <input type="text" name="txtCnamehsc" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>



                <div class="form-group">
                    <p>Stream : <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-book"></i></span>
                    <input type="text" name="txtStream" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné." />
                    <div class="validation"></div>
                </div>




                <div class="form-group">
                    <p>Percentage/CGPA <span>*</span></p>
                    <span class="icon-case"><i class="fas fa-percent"></i></span>
                    <input type="text" name="txtCGPAhsc" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Starting Date :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-calendar-alt"></i></span>
                    <input type="date" name="txtSdate" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Ending Date :<span>*</span></p>
                    <span class="icon-case"><i class="fas fa-calendar-alt"></i></i></span>
                    <input type="date" name="txtEdate" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné." />
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







    </form>






    <script src="home.js"></script>
</body>

</html>