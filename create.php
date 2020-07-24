<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="css/create.css" rel="stylesheet">
    <link href="css/topo.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/LogoBranca32.png"/>
</head>
<body>

    <!-- Navigation Bar -->

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand mr-auto" href="index.php"><img src="img/LogoAzul.png"></a>
                <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarResponsive">
                    <spam class="navbar-toggler-icon"></spam>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="fas fa-user-circle"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="profile.php" class="dropdown-item">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="index.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>  Log Out</a>
                            </div>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="classes.php">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="login.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- End Navigation Bar -->

    <div class="container">
        <h1 class="display-5 mt-4">Create a project for developers participate and help you.</h1>
        <hr>
        <h6 class="text-muted">Fill in the data correctly and accept the terms to generate a project</h6>
        <form class="mt-5" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="projectName" placeholder="Project Name" required="required">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="lang" placeholder="Language (c#, Java, etc.)" required="required">
                </div>
            </div>
            <div class="form-group">
                <textarea id="desc" rows="5" placeholder="Project Description" required="required" style="width: 100%;"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="price" placeholder="$ 00,000.00" required onkeypress="$(this).mask('#.##0,00', {reverse: true});">
                </div>
                <div class="form-group col-md-6">
                    <select class="form-control" id="payment">
                        <option value="">Paypal</option>
                        <option value="">Bank Slip</option>
                        <option value="">Credit Card</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="active">
                    <input type="checkbox" autocomplete="off" required="required">  I have read and accept the <span class="text-info" style="text-decoration: underline; cursor: pointer;"><a data-toggle="modal" data-target="#myModal">Terms of Use</a></span>
                </label>
            </div>
            <button type="submit" class="btn btn-info mb-3">Confirm</button>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content col-12">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Termos de Uso FindJobs</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

                            <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>

                            <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

                            <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <button onclick="backToTop()" id="btnTop"><i class="fas fa-arrow-up"></i></button>

    <script type="text/JavaScript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/JavaScript" src="js/topo.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!--JQUERY-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</body>
</html>