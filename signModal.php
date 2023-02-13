<div id="signModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
                    <h1 class="fw-bold mb-0 fs-2">Sign up for free </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body p-5 pt-0">
                    <form action="/crud/index.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-3" id="uemail" name="uemail"
                                placeholder="name@example.com">
                            <label for="uemail">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="upassword" name="upassword"
                                placeholder="Password">
                            <label for="upassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-3" id="cpassword" name="cpassword"
                                placeholder="Password">
                            <label for="cpassword"> Confirm Password</label>
                        </div>
                        <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" name="signup">Sign
                            up</button>
                        <small class="text-muted">By clicking Sign up, you agree to the terms of
                            use.</small>
                        <!-- <hr class="my-4"> -->
                        <!-- <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                                    <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit">
                                        <svg class="bi me-1" width="16" height="16">
                                            <use xlink:href="#twitter"></use>
                                        </svg>
                                        Sign up with Twitter
                                    </button>
                                    <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit">
                                        <svg class="bi me-1" width="16" height="16">
                                            <use xlink:href="#facebook"></use>
                                        </svg>
                                        Sign up with Facebook
                                    </button>
                                    <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit">
                                        <svg class="bi me-1" width="16" height="16">
                                            <use xlink:href="#github"></use>
                                        </svg>
                                        Sign up with GitHub
                                    </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>