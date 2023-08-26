<?php
    include 'connection.php';
    $query = "SELECT regid, name FROM `registration` WHERE status = 0";
    $result = $conn->query($query);    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="verifyUser.css" />
  <link rel="icon" href="images/logo.png" type="image/x-icon">

  <title>Verify User</title>
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
              <a href="account.html"  class="nav-link account">Preetar Barker</a>
            </li>
            <!-- <li class="nav-item">
              <button class="btn1">Join Garage</button>
            </li> -->
            <li class="nav-item">
              <a href="home.html"><button class="btn2">Logout</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <br /><br /><br /><br /><br /><br /><br />

    <div class="sidebar">
      <a href="admin.html"><button class="sidebtn"><img src="images/analytics_994170.png" alt=""> <br>View System Statistics</button></a>
      <a href="verifyUser.html"><button class="sidebtn"><img src="images/authentication_1791961.png" alt=""><br>Verify User</button></a>
      <a href="editPrice.html"><button class="sidebtn"><img src="images/pricing_1728450.png"
            alt=""><br>Edit Price</button></a>
      <a href="#"><button class="sidebtn"><img src="images/cheque_2250736.png" alt=""><br>Edit Earnings</button></a>
    </div>
    <div class="content">
      <div class="innercont">
        <h1>Verify</h1>
        <div class="outer-wrapper">
            <div class="table-wrapper">
                <table>
                    <thead>
                        <th>Registration ID</th>
                        <th>Name</th>
                        <th>Status</th>

                    </thead>
                    <tbody>
                        <?php
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $regid = $row["regid"];
                                    $name = $row["name"];
                                    echo '<tr>';
                                    echo '<td>' . $regid . '</td>';
                                    echo '<td>' . $name . '</td>';
                                    echo '<td><a href="adminAuthorize.php?regid=' . $regid . '"><button class="btn1 btn-red">Verify</button></a></td>';
                                    echo '</tr>';
                                }
                            };
                        ?>                          
                    </tbody>
                </table>
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
            <h6 class="text-uppercase mb-4 font-weight-bold">PARKsite</h6>
            <p>
              Eliminating Parking Woes: Simplifying Spots, Easing Stress , One Space at a Time. Join us in a hassle-free journey!
            </p>
          </div>

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <a class="links" href="contact.html"><h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6></a>
            <a class="links" href="faqmain.html"><h6 class="text-uppercase mb-4 font-weight-bold">FAQ</h6></a>
            <a class="links" href="termsAndCondition.html"><h6 class="text-uppercase mb-4 font-weight-bold">Terms & Conditions</h6></a>
            <p><i class="fas fa-envelope mr-3"></i> parksite@gmail.com</p>
          </div>
        </div>
        <!--Grid row-->
      </section>
    </div>
    <!-- Grid container -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:<a class="text-white" href="index.html">www.parksite.com.bd</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>