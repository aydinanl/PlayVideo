<div class="page-content container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-wrapper">
                <div class="box">
                    <div class="content-wrap">
                        <h6>Sign In</h6>
                        <div class="social">
                            <a class="face_login" href="#">
	                                <span class="face_icon">
	                                    <img src="<?= URL . 'assets/' . 'img'?>/facebook.png" alt="fb">
	                                </span>
                                <span class="text">Sign in with Facebook</span>
                            </a>
                            <div class="division">
                                <hr class="left">
                                <span>or</span>
                                <hr class="right">
                            </div>
                        </div>
                        <form action="<?= URL . 'login' . '/makelogin' ?>" method="post">
                            <input class="form-control" type="text" placeholder="E-mail address" name="mail">
                            <input class="form-control" type="password" placeholder="Password" name="password">
                            <div class="action">
                                <button name="make_login" class="btn btn-primary signup">Login</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="already">
                    <p>Don't have an account yet?</p>
                    <a href="signup.html">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
