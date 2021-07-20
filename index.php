<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>ADAMS Bank Home Page</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="ADAMS logo.jpg" alt="Bank"  height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Hb8V4pABajFj6w" async> </script> </form>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
 
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- Carousel 
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="bg1.jpg" width="1000px" height="500px" class="d-block w-100" alt="...">

            </div>
    </div>   -->

    <!-- Cards -->
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover1"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="money.php">
                                    <h6><strong>Money Transfer</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong>Our Services...</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Personal Banking</li>
                                <li>Business Banking</li>
                                <li>Corporate Banking</li>
                                <li>Digital Banking</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="350"  src="MoneyTransfer.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-style:none;">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-100 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="history.php">
                                    <h6><strong>Transaction History</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px b;"><strong>We...</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service" style="border:0px">
                            <ul>
                                <li>Are Here for you 24x7!</li>
                                <li>Assure your trust</li>
                                <li>strive to keep you happy</li>
                                <li>Pride ourselves on service</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="350"  src="Transaction.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <div class="container-footer w-container">
              <div class="text-center p-3"  style = "color: white" >
                Created By <a href="https://github.com/daksh-ramchandani" >Daksh Ramchandani</a> @2021
                
            </div>
              <div class="w-row">
                <div class="footer-column w-clearfix w-col w-col-4">
                  <h3 class="footer-failory-name px-2">About Us</h3>
                  <p class="footer-links px-3 "><a href="" target="_blank"><span class="footer-link">Overview<br></span></a><a href=""><span class="footer-link">Investor Relations<br></span></a><a href=""><span class="footer-link">News Room</span></a><span><br></span><a href=""><span class="footer-link">Corporate Governance<br></span></a><a href=""><span class="footer-link">Careers<br></span></a><a href=""><span class="footer-link">CSR</span></a><strong><br></strong></p>
                </div>
                <div class="footer-column w-col w-col-8">
                  <div class="w-row">
                    <div class="w-col w-col-8">
                      <div class="w-row">
                        <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7">
                          <h3 class="footer-titles">Useful Links</h3>
                          <p class="footer-links"><a href="" target="_blank"><span class="footer-link">Privacy<br></span></a><a href=""><span class="footer-link">Important Messages<br></span></a><a href=""><span class="footer-link">Citizen's Charter</span></a><span><br></span><a href=""><span class="footer-link">Login to NetBanking<br></span></a><a href=""><span class="footer-link">Terms & Conditions<br></span></a><a href=""><span class="footer-link">Website Usage Terms</span></a><strong><br></strong></p>
                        </div>
                        <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5">
                          <h3 class="footer-titles">Resources</h3>
                          <p class="footer-links"><a href=""><span class="footer-link">We care For You<br></span></a><a href=""><span class="footer-link">Rates<br></span></a><a href=""><span class="footer-link"></span></a><a href=""><span class="footer-link">Bank Holiday List<br></span></a><a href=""><span class="footer-link">Glossary</span></a><strong><br></strong></p>
                        </div>
                      </div>
                    </div>
                    <div class="column-center-mobile w-col w-col-4">
                      <h3 class="footer-titles">Connect</h3><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg" width="20" alt="Twitter icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg" width="20" alt="Instagram icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg" width="20" alt="Facebook Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg" width="20" alt="LinkedIn Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block"><img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg" width="20" alt="Pinterest Icon" class=""></a>
                      <p class="footer-description">Email me at: <a href=""><strong class="link-email-footer">daksh.ramchandani@gmail.com</strong></a><br></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>