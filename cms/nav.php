<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="../index.php">EXCALI-BARS</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link smoothScroll">HOME</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">PRODUCTS</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">TRAINERS</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">CONTACT</a>
                    </li>
                </ul>

                <ul class="social-icon">
                    <li><a href="#" class="fa fa-youtube-play fs-1"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-facebook-f"></a></li>
                    <li><a href="#" class="fa fa-user-circle" data-toggle="modal" data-target="#loginForm"></a></li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Modal Log In-->
    <div class="modal fade" id="loginForm" tabindex="-1" role="dialog" aria-labelledby="loginFormLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">

            <h2 class="modal-title" id="loginFormLabel">Log In</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-email" placeholder="Email">

                <input type="email" class="form-control" name="cf-password" placeholder="Password">

                <button type="submit" class="form-control" id="submit-button" name="submit">LOG IN</button>

                <div class="text-small text-muted text-center">--or--</div>

                <button type="submit" class="form-control" id="submit-button" name="submit">
                    <svg class="mr-2" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.717v2.258h2.908c1.702-1.567 2.684-3.874 2.684-6.615z" fill-rule="evenodd" fill-opacity="1" fill="#4285f4" stroke="none"></path>
                        <path d="M9.003 18c2.43 0 4.467-.806 5.956-2.18L12.05 13.56c-.806.54-1.836.86-3.047.86-2.344 0-4.328-1.584-5.036-3.711H.96v2.332C2.44 15.983 5.485 18 9.003 18z" fill-rule="evenodd" fill-opacity="1" fill="#34a853" stroke="none"></path>
                        <path d="M3.964 10.712c-.18-.54-.282-1.117-.282-1.71 0-.593.102-1.17.282-1.71V4.96H.957C.347 6.175 0 7.55 0 9.002c0 1.452.348 2.827.957 4.042l3.007-2.332z" fill-rule="evenodd" fill-opacity="1" fill="#fbbc05" stroke="none"></path>
                        <path d="M9.003 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.464.891 11.428 0 9.002 0 5.485 0 2.44 2.017.96 4.958L3.967 7.29c.708-2.127 2.692-3.71 5.036-3.71z" fill-rule="evenodd" fill-opacity="1" fill="#ea4335" stroke="none"></path>
                    </svg>
                    Log in with Google
                </button>

                <div>
                    <label class="text-small text-muted" for="signup-agree">Don't have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signupForm">Register Here!</a>
                    </label>
                </div>
            </form>
            </div>

            <div class="modal-footer"></div>

            </div>
        </div>
    </div>

    <!-- Modal Sign Up-->
    <div class="modal fade" id="signupForm" tabindex="-1" role="dialog" aria-labelledby="signupFormLabel" aria-hidden="true" style="overflow-y: scroll;">
        <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">

            <h2 class="modal-title" id="signupFormLabel">Sign Up</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="Full Name">

                <input type="text" class="form-control" name="cf-username" placeholder="Username">

                <input type="text" class="form-control" name="cf-email" placeholder="Email">

                <input type="email" class="form-control" name="cf-password" placeholder="Password">

                <input type="email" class="form-control" name="cf-passwordconfirm" placeholder="Confirm Password">

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms & Conditions</a>
                    </label>
                </div>

                <button type="submit" class="form-control" id="submit-button" name="submit">Sign Up</button>

                <div class="text-small text-muted text-center">--or--</div>

                <button type="submit" class="form-control" id="submit-button" name="submit">
                    <svg class="mr-2" width="18" height="18" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844c-.209 1.125-.843 2.078-1.796 2.717v2.258h2.908c1.702-1.567 2.684-3.874 2.684-6.615z" fill-rule="evenodd" fill-opacity="1" fill="#4285f4" stroke="none"></path>
                        <path d="M9.003 18c2.43 0 4.467-.806 5.956-2.18L12.05 13.56c-.806.54-1.836.86-3.047.86-2.344 0-4.328-1.584-5.036-3.711H.96v2.332C2.44 15.983 5.485 18 9.003 18z" fill-rule="evenodd" fill-opacity="1" fill="#34a853" stroke="none"></path>
                        <path d="M3.964 10.712c-.18-.54-.282-1.117-.282-1.71 0-.593.102-1.17.282-1.71V4.96H.957C.347 6.175 0 7.55 0 9.002c0 1.452.348 2.827.957 4.042l3.007-2.332z" fill-rule="evenodd" fill-opacity="1" fill="#fbbc05" stroke="none"></path>
                        <path d="M9.003 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.464.891 11.428 0 9.002 0 5.485 0 2.44 2.017.96 4.958L3.967 7.29c.708-2.127 2.692-3.71 5.036-3.71z" fill-rule="evenodd" fill-opacity="1" fill="#ea4335" stroke="none"></path>
                    </svg>
                    Sign up with Google
                </button>
            </form>
            </div>

            <div>
                    <label class="text-small text-muted" for="signup-agree">Already have an account?
                        <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#loginForm">Log in Here!</a>
                    </label>
                </div>
            </form>
            </div>

            <div class="modal-footer"></div>

            </div>
        </div>
    </div>
