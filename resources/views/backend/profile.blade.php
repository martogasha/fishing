@include('backendPartial.nav')
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon"><i class="fa fa-user-circle-o"></i></div>
            <div class="header-title">
                <h1>Profile</h1>
                <small>Show user data in clear profile design</small>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-header-headshot"></div>
                        </div>
                        <div class="card-content">
                            <div class="card-content-member text-center">
                                <h4 class="m-t-0">Maxmillan</h4>
                                <p class="m-t-0">Ndegwa</p>
                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="card-footer-stats">
                                <div>
                                    <p>Stock:</p>
                                    <i class="fa fa-users"></i><span>241</span>
                                </div>
                                <div>
                                    <p>MESSAGES:</p>
                                    <i class="fa fa-coffee"></i><span>350</span>
                                </div>
                                <div>
                                    <p>Last online</p>
                                    <span class="stats-small">3 days ago</span>
                                </div>
                            </div>
                            <div class="card-footer-message">
                                <h4><i class="fa fa-comments"></i> Message me</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="row">
                        <form>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Enter Email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password1" class="form-control" placeholder="Enter Password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" id="confirmPassword1" class="form-control" placeholder="Confirm Password" required>
                            </div>
                            <span class="badge badge-success" id="passwordMatch">Password match</span>
                            <span class="badge badge-danger" id="passwordError">Password don't match match</span>
                            <div class="form-group">
                                <label>Picture upload</label>
                                <input type="file" name="picture">
                                <input type="hidden" name="old_picture">
                            </div>
                            <div class="reset-button">
                                <a href="#" class="btn btn-warning">Reset</a>
                                <a href="#" class="btn btn-success">Save</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2016-2017 <a href="#">thememinister</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->
<!-- Start Core Plugins
   =====================================================================-->
<!-- jQuery -->
<script src="asset/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="asset/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="asset/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="asset/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="asset/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="asset/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- CRMadmin frame -->
<script src="asset/dist/js/custom.js" type="text/javascript"></script>
<!-- End Core Plugins
   =====================================================================-->
<!-- Start Theme label Script
   =====================================================================-->
<!-- Dashboard js -->
<script src="asset/dist/js/dashboard.js" type="text/javascript"></script>
<!-- End Theme label Script
   =====================================================================-->
</body>
<script>
    $(document).ready(function () {
        $('#passwordError').hide();
        $('#passwordMatch').hide();
    });
    $('#confirmPassword1').on('keyup',function () {
        if ($('#password1').val() == $('#confirmPassword1').val() ){
            $('#passwordMatch').show();
            $('#passwordError').hide();
        }
        else {
            $('#passwordError').show();
            $('#passwordMatch').hide();
        }
    });
</script>
<!-- Mirrored from thememinister.com/crm/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:37:37 GMT -->
</html>

