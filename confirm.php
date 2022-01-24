<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="icon" href="img/favicon.png"/>  
    <title>Message sent</title>
</head>
<body class="minh-100vh">
    <header class="position-absolute w-100">
        <nav class="navbar navbar-light navbar-expand-md bg-transparent">
            <a href="index.html" class="navbar-brand ms-3">
                <img src="img/navbar_logo.png" class="img-fluid" alt="logo"/>
            </a>
            <button class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#main-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-3" id="main-nav">
                <ul class="navbar-nav ms-auto text-end fw-bold">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                    </li>                        <li class="nav-item">
                        <a href="festival.html" class="nav-link">Festival</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="user.php" class="nav-link">
                            <span class="fa fa-user"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="login-s1 container-fluid d-flex align-items-top bg-secondary py-5 minh-100vh">
        <div class="my-auto w-100">
            <div class="row mx-0 w-100 pt-5 mt-5">
                <div class="col-xs-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3 text-center">
                    <h3 class="text-center font-header text-secondary mb-3">Message sent!</h3>
                    <table class="table table-hover border text-left font-menu bg-light">
                        <thead class="thead-light">
                            <tr>
                                <th colspan="2" class="font-header">Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full name</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fname']))
                                        echo htmlspecialchars($_POST['fname']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fphone']))
                                        echo htmlspecialchars($_POST['fphone']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmail']))
                                        echo htmlspecialchars($_POST['fmail']);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>
                                    <?php 
                                    if(isset($_POST['fmsg']))
                                        echo htmlspecialchars($_POST['fmsg']);
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="contact.html" 
                        class="btn btn-success font-header mt-3">OK</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid d-flex text-dark align-items-center bg-footer text-white pt-3 opacity-9 border-top border-dark">
        <div class="row mx-0 w-100 small opacity-9">
            <div class="col-12 col-md-6 text-center text-md-start">
                <h6 class="text-uppercase mb-3">
                    Find us at social media
                </h6>
                <p class="initialism fw-normal">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco
                </p>
            </div>
            <div class="col-12 col-md-6 text-center text-md-end">                    
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa fa-facebook text-white"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa fa-instagram text-white"></span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <span class="fa fa-twitter text-white"></span>
                        </a>
                    </li>
                </ul>       
            </div>
            <div class="col-12 text-center border-top">
                <p class="mb-1">
                    Copyright &copy; 2021 Tomasz Pankowski. 
                    <a href="privacy.html" class="fw-bold text-white text-decoration-none">
                        Privacy policy
                    </a>
                </p>
            </div>
        </div>
    </footer>
    <div class="modal" id="privacyModal">
        <div class="modal-dialog h-100 d-flex align-items-center">
            <div class="modal-content border-green p-2">
                <div class="modal-header text-center">
                    <h4 class="font-header text-secondary font-weight-bold">GPDR Declaration</h4>
                    <button 
                        data-target="#privacyModal"
                        data-dismiss="modal"
                        class="close text-secondary">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <p class="initialism">
                        This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                        in long term meaning (longer than needed for website operation during visitor's
                        presence), any user (visitor) data.
                    </p>
                    <p class="initialism pt-2">
                        All information collected during visitor's 
                        presence on this website is used only for technical purposes, required for 
                        correct operation of website or demonstration purposes related to technical 
                        mechanisms and presentation of its operation... 
                        <a href="privacy.html" class="text-secondary font-weight-bold">More about privacy</a>
                    </p>                        
                    <p class="initialism pt-2">
                        If you accept privacy policy please click button "accept". If you 
                        refuse it, leave page by closing it in your web browser, please.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-dark mx-auto"
                        onclick="acceptPrivacyPolicy()">
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>  
    <script src="js/main.min.js"></script>
</body>
</html>