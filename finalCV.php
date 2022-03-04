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


//$Unidegree=$_POST['txtUUname'];
//$Colname=$_POST['txtCname'];

//$Coursename=$_POST['txtCoursename'];
//$Percentage=$_POST['txtCGPA'];
//$SSdate=$_POST['txtSSdate'];
//$EEdate=$_POST['txtEEdate'];

//$Unihsc=$_POST['txtUname'];
//$Colhsc=$_POST['txtCnamehsc'];

//$Stream=$_POST['txtStream'];
//$Percentagehsc=$_POST['txtCGPAhsc'];
//$Sdate=$_POST['txtSdate'];
//$Edate=$_POST['txtEdate'];


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

$Prolen=$_POST['txtPro'];
$Web=$_POST['txtWeb'];
$Database=$_POST['txtDatabase'];
$Ied=$_POST['txtIed'];
$Platform=$_POST['txtPlat'];






?>

    <!doctype html>
    <html lang="en">

    <head>
        <style>
            table,
            td {
                border: 1px solid black;
            }
            #download {
    margin-left: 50%;
    margin-top: 10px;
}
.skill{
    color :black;
    
}


          
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> RESUME-By SJ</title>

        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet"  href="style1.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="html2pdf.bundle.min.js"></script>
    </head>

    <body>
      


        <button id="download" class="btn btn-primary" >Download PDF</button>
        <div class="container-fluid overcover" id="resume" >
            <div class="container profile-box"  >
                <div class="row">
                    <div class="col-md-4 left-co">
                        <div class="left-side">
                            <div class="profile-info">
                          
                            <img src="img/profile.jpg" alt="">
                                <h3>
                                    <?php  echo $Fname;?>
                                </h3>
                                <span></span>
                            </div>
                            <h4 class="ltitle">Contact</h4>
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="detail">+91
                                    <?php  echo $Phone;?>
                                </div>
                            </div>
                            <div class="contact-box pb0">
                                <div class="icon">
                                    <i class="fas fa-globe-americas"></i>
                                </div>
                                <div class="detail">
                                    <?php  echo $Email;?>
                                </div>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="detail">
                                    <?php  echo $Adress;?>
                                </div>
                            </div>

                            <div class="refer-cov">
                                <b> Country :</b>
                                <?php  echo $Country;?><br>
                                <b> State :</b>
                                <?php  echo $State;?><br>
                                <b> City :</b>
                                <?php  echo $City;?><br>
                                <b> Pin Code : </b>
                                <?php  echo $Postcode;?>
                                <p></p>
                                <b> Date of Birth :</b> <span> <?php  echo $Bdate;?></span><br>
                                <b> Gender :</b> <span><?php  echo $Gender;?></span>
                            </div>

                            <h4 class="ltitle">Reference</h4>
                            <ul class="row social-link no-margin">
                                <li><i class="fab fa-facebook-f"></i></li>
                                <li><i class="fab fa-twitter"></i></li>
                                <li><i class="fab fa-google-plus-g"></i></li>
                                <li><i class="fab fa-linkedin-in"></i></li>
                                <li><i class="fab fa-github"></i></li>
                            </ul>




                            <h4 class="ltitle">Hobbies</h4>
                            <ul class="hoby row no-margin">
                                <li><i class="fas fa-pencil-alt"></i> <br> Writing</li>
                                <li><i class="fas fa-bicycle"></i> <br> Cycling</li>
                                <li><i class="fas fa-futbol"></i> <br> Football</li>
                                <li><i class="fas fa-film"></i><br> Movies</li>
                                <li><i class="fas fa-plane-departure"></i> <br>Travel</li>
                                <li><i class="fas fa-gamepad"></i> <br> Games</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 rt-div">
                        <div class="rit-cover">
                            <div class="hotkey">
                                <h1 class="">
                                    <?php  echo $Fname." ".$Lname;?> </h1>
                                <small>Student</small>
                            </div>
                            <h2 class="rit-titl"><i class="far fa-user"></i> Profile</h2>
                            <div class="about">
                                <p>I would like to learn to become a successful professional in the field of Information Technology, by utilizing my skills and enable further personal and professional development, I would devote myself for the organization</p>
                                <div class="btn-ro row no-margin">
                                    <ul class="btn-link">


                                    </ul>
                                </div>
                            </div>



                            <h2 class="rit-titl"><i class="fas fa-graduation-cap"></i> Education</h2>
                            <div class="education">
                                <ul class="row no-margin">

                                    <li class="col-md-6">
                                        <h5>Degree Information :</h5>
                                        <b>University Name :</b><span><?php  echo $Unidegree;?></span>
                                        <br>
                                        <b>Collage Name :</b><span><?php  echo $Colname;?></span>
                                        <br>
                                        <b>Course Name :</b><span><?php  echo $Coursename;?></span>
                                        <br>
                                        <b>Percentage/CGPA :</b><span><?php  echo $Percentage;?></span>
                                        <br>
                                        <b>Starting Date :</b><span><?php  echo $SSdate;?></span>
                                        <br>
                                        <b>Ending Date :</b><span><?php  echo $EEdate;?></span>

                                    </li><br>

                                    <li class="col-md-6">
                                        <h5>HSC Information :</h5>
                                        <b>University Name :</b><span><?php  echo $Unihsc;?></span>
                                        <br>
                                        <b>Collage Name :</b><span><?php  echo $Colhsc;?></span>
                                        <br>
                                        <b>Stream :</b><span><?php  echo $Stream;?></span>
                                        <br>
                                        <b>Percentage/CGPA :</b><span><?php  echo $Percentagehsc;?></span>
                                        <br>
                                        <b>Starting Date :</b><span><?php  echo $Sdate;?></span>
                                        <br>
                                        <b>Ending Date :</b><span><?php  echo $Edate;?></span></li>


                                </ul>
                            </div>




                            <h4 class="ltitle"><i class="fas fa-users-cog"></i> Skills</h4>




                            <table style="width:100%">

                                <tr>
                                    <b><td class="skill">Programming Language :</td></b>
                                    <td>
                                        <?php  echo $Prolen;?>
                                    </td>

                                </tr>
                                <tr>
                                <b> <td class="skill">Web Technology :</td></b>
                                    <td>
                                        <?php  echo $Web;?>
                                    </td>

                                </tr>
                                <tr>
                                <b> <td class="skill">Database :</td></b>
                                    <td>
                                        <?php  echo $Database;?>
                                    </td>

                                </tr>
                                <tr>
                                <b> <td class="skill">IDE :</td></b>
                                    <td>
                                        <?php  echo $Ied;?>
                                    </td>

                                </tr>
                                <tr>
                                <b> <td class="skill">Platforms :</td></b>
                                    <td>
                                        <?php  echo $Platform;?>
                                    </td>

                                </tr>

                            </table>
                            <br><br><br><br>
                           <b> <p>I HEARBY DECLARE THAT ALL THE ABOVE INFORMATIONIS TRUE TO THE BEST OF MY
                           KNOWLEDGE AND BELIEF</p></b>
                           <br><br>

                           <p id="sj"><?php   echo $Fname." ".$Lname;?></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>












    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="pdf.js"></script>











    </html>