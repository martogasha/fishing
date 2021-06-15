@include('backendPartial.nav')
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-users"></i>
            </div>
            <div class="header-title">
                <h1>Stock</h1>
                <small>Stock List</small>
            </div>
        </section>
        @include('flash-message')
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="btn-group" id="buttonexport">
                                <a href="#">
                                    <h4>Add Stock</h4>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="btn-group">
                                <div class="buttonexport" id="buttonlist">
                                    <a class="btn btn-add" href="{{url('addStock')}}"> <i class="fa fa-plus"></i> Add Stock
                                    </a>
                                </div>
                                <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                                <ul class="dropdown-menu exp-drop" role="menu">
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});">
                                            <img src="asset/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                            <img src="asset/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                    </li>
                                    <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                            <img src="asset/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                            <img src="asset/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                    </li>
                                    <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});">
                                            <img src="asset/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});">
                                            <img src="asset/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});">
                                            <img src="asset/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});">
                                            <img src="asset/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                            <img src="asset/dist/img/word.png" width="24" alt="logo"> Word</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});">
                                            <img src="asset/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});">
                                            <img src="asset/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                    </li>
                                    <li>
                                        <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});">
                                            <img src="asset/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                            <div class="table-responsive">
                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr class="info">
                                        <th>Photo</th>
                                        <th>Product Name</th>
                                        <th>Product Desc</th>
                                        <th>Price</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td><img src="{{asset('uploads/product/'.$product->stock_image)}}" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                        <td>{{$product->stock_name}}</td>
                                        <td>{{$product->stock_desc}}</td>
                                        <td>$: {{$product->stock_price}}</td>
                                        <td>
                                            <button type="button" class="btn btn-add btn-sm edit" id="{{$product->id}}" data-toggle="modal" data-target="#editStock"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger view"  data-toggle="modal" data-target="#editStock"><i class="fa fa-trash-o"></i> </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customer Modal1 -->
            <!-- /.modal -->
            <!-- Modal -->
            <div class="modal fade" id="editStock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{route('updateStock')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Stock</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" id="basic1">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <!-- Customer Modal2 -->
            <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="col-md-12 form-group user-form-group">
                                                <label class="control-label">Delete Customer</label>
                                                <div class="pull-right">
                                                    <button type="button" class="btn btn-danger btn-sm">NO</button>
                                                    <button type="submit" class="btn btn-add btn-sm">YES</button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
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
<script data-cfasync="false" src="http://thememinister.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="asset/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="asset/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="asset/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="asset/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="asset/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- table-export js -->
<script src="asset/plugins/table-export/tableExport.js" type="text/javascript"></script>
<script src="asset/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
<script src="asset/plugins/table-export/html2canvas.js" type="text/javascript"></script>
<script src="asset/plugins/table-export/sprintf.js" type="text/javascript"></script>
<script src="asset/plugins/table-export/jspdf.js" type="text/javascript"></script>
<script src="asset/plugins/table-export/base64.js" type="text/javascript"></script>
<!-- dataTables js -->
<script src="asset/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
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
    $(document).on('click','.edit',function () {
        $value = $(this).attr('id');
        $.ajax({
            type:"get",
            url:"{{url('editStock')}}",
            data:{'stock_id':$value},
            success:function (data) {
                $('#basic1').html(data);
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
    });
</script>
<!-- Mirrored from thememinister.com/crm/clist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jul 2020 08:38:34 GMT -->
</html>

