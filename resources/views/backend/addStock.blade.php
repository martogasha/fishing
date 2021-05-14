@include('backendPartial.nav')
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Add Stock</h1>
                <small>Stock list</small>
            </div>
        </section>
        @include('flash-message')
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- Form controls -->
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonlist">
                                <a class="btn btn-add " href="{{url('stock')}}">
                                    <i class="fa fa-list"></i>  Stock List </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form class="col-sm-6" action="{{route('storeStock')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" name="stock_name" class="form-control" placeholder="Enter Product Name" required>
                                </div>
                                <div class="form-group">
                                    <label>Product Desc</label>
                                    <input type="text" name="stock_desc" class="form-control" placeholder="Enter product description" required>
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" name="stock_price" class="form-control" placeholder="Enter Price" required>
                                </div>
                                <div class="form-group">
                                    <label>Picture upload</label>
                                    <input type="file" name="stock_image">
                                </div>
                                <div class="reset-button">
                                    <a href="#" class="btn btn-warning">Reset</a>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
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


<!-- Mirrored from thememinister.com/crm/add-customer.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:37:37 GMT -->
</html>

