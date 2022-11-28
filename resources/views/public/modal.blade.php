<!-- Modal -->
<div id="modalVerticallyCentered" class="col-lg-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form>
                            @if (Session::get('role'))
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Logout</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Are you sure want to logged out?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary btn-logout">Logout</button>
                                </div>
                            @else
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email-login">Email address</label>
                                        <input type="email" class="form-control" id="email-login" name="email-login" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password-login">Password</label>
                                        <input type="password" class="form-control" id="password-login" name="password-login" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-login">Login</button>
                                </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
