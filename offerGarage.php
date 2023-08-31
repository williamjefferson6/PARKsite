<?php

include 'connection.php';

/*$sql = "SELECT * FROM contact";
    $result = mysqli_query($conn, $sql);

    $name = array();
    $phone = array();
    $email = array();
    $message = array();
    while ($row = mysqli_fetch_assoc($result)) {
        // $tasks[] = $row['To-Do Activity'];
        $name[]=$row['name'];
        $phone[]=$row['phone'];
        $email[]=$row['email'];
        $message[]=$row['message'];
    }*/

$garid = $_POST["gid"];
$sql ="SELECT * FROM garage";

$result = mysqli_query($conn,$sql);
$garlist = array();

while($row =mysqli_fetch_assoc($result)){
    $garlist[] = $row['garageid'];
}

/*if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $accountType = $_POST["accountType"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $nid = $_POST["nid"];
    $phone = $_POST["phone"];
    $vlisc = $_POST["vlisc"];
    $vreg = $_POST["vreg"];
    $vtype = $_POST["vtype"];
    $vmodel = $_POST["vmodel"];
    $garadr = $_POST["garadr"];
    $garsize = $_POST["garsize"];
    $garcap = $_POST["garcap"];
    $supnid = $_POST["supnid"];
    $seid=1;
    $status=0;
    $currentDate = date("Y-m-d");
   
    

    $sql = "INSERT INTO `registration`(
         `status`, `regdate`, `name`, `email`, `pass`, `nid`, `phone`, `vtype`, `vmodel`, `vreg`, `vlisc`, `garsize`, `garcap`, `garadr`, `supnid`, `type`, `seid`) VALUES ('$status','$currentDate','$name','$email','$pass','$nid','$phone','$vtype','$vmodel','$vreg','$vlisc','$garsize','$garcap','$garadr','$supnid','$accountType','$seid')";

    $conn->query($sql);
}*/
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="offerGarage.css" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <title>Offer Garage</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a href="home.html" class="navbar-brand"><img class="imglogo" src="images/logo.png" alt="" width="60"
                        class="d-inline-block align-text-top" />
                    PARKsite</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbtn navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="account.html" class="nav-link account">Preetar Parker</a>
                        </li>
                        <li class="nav-item">
                            <a href="processing.html"><button class="btn1">Add Garage</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="home.html"><button class="btn2">Log Out</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="mother-div">
            <div class="side-bar">
                <a href="offerGarage.html" style="text-decoration: none;"><button class="side-bar-options"><img
                            src="images/schedule.png" alt=""> Availability Schedule</button></a>
                <a href="goHistory.html" style="text-decoration: none;"><button class="side-bar-options"><img
                            src="images/history.png" alt="">History</button></a>
                <a href="earnings.html" style="text-decoration: none;"><button class="side-bar-options"><img
                            src="images/banknote_5735283.png" alt="">Earnings &
                        Performance</button></a>
                <a href="notificationA.html" style="text-decoration: none;"><button class="side-bar-options"><img
                            src="images/alarm_1302532.png" alt="">Notifications</button></a>
            </div>
            <div class="window">
                <div class="dropdown">
                    <select class="btn lala myBtn" name="gid">
                        Select Your Garage
                        <?php
                       $count = 1; 
                       for ($i=0;$i<count($garlist);$i++){
                        echo ' <option value=$count> Garage ' . $garlist[$i] . '</option> ';
                    }
                        ?>

                    </select>

                    <button class="lala">Supervisor Availability &nbsp <img style="width: 20px;" src="images/accept.png" alt="">
                    </button>
                    <button class="lala">Location Wise Rent &nbsp <img style="width: 20px;"
                            src="images/delete-button.png" alt="">
                    </button>


                </div>
                <div class="info-div qq">
                    <br>
                    <h2>Garage Availability Details</h2>
                    <div class="form qq">
                        <label>Starting Time: </label>
                        <input type="time" class="field" required>
                        <label>Ending Time: </label>
                        <input type="time" class="field" required>
                        <label>Date: </label>
                        <input type="date" class="field" required>
                        <br>
                        <button type="button" style="color: black;margin-top: 10px;" class="btn btn-primary btn1"  data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Submit
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header booba-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><img class="popup_img"
                                                src="images/yes-unscreen.gif" alt="">
                                        </h1>

                                    </div>
                                    <div class="modal-body myBody">
                                        <h3>Thank You</h3>
                                        <p>Your Garage Is Up For Rent</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class=" btn2" data-bs-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center text-lg-start text-white bg-dark">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img class="imglogo" src="images/logo.png" alt="logo" width="100" style="margin-left: 13px" />
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            PARKsite
                        </h6>
                        <p>
                            Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in
                            a hassle-free journey!
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <a class="links" href="contact.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        </a>
                        <a class="links" href="faqmain.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">FAQ</h6>
                        </a>
                        <a class="links" href="termsAndCondition.html">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Terms & Conditions</h6>
                        </a>
                        <p><i class="fas fa-envelope mr-3"></i> parksite@gmail.com</p>
                    </div>
                </div>
                <!--Grid row-->
            </section>
        </div>
        <!-- Grid container -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white" href="index.html">www.parksite.com.bd</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>