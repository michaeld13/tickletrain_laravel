<!-- Modal Start -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header box-shadow-bottom">
                    <h4>Login</h4>

                    <div type="button" class="bg-orange close p-1 text-center rounded-circle text-white visible"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="d-flex flex-column text-center">
                        <form class="p-3">
                            <div class="form-group mt-1">
                                <input type="text" class="form-control p-2" name="username"
                                    placeholder="Username or email" required>
                            </div>
                            <div class="form-group pb-3">
                                <input type="password" class="form-control p-2" name="password"
                                    placeholder="Your password..." required>
                            </div>
                            <button type="button"
                                class="btn badge-warning text-white bg-orange btn-block p-2" id="do-login">Login</button>

                                <div class="alert alert-danger mt-3" id="login-error-msg" role="alert" style="display: none;">
                                  
                                </div>
                        </form>

                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <div class="signup-section">Not a member yet? <a href="#a" class="text-info"> Sign Up</a>.</div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal End -->