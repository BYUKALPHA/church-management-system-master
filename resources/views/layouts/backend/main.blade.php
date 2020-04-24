<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8" />
	<title>@yield('title', 'Covid 19 | Portal')</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('backend/css/default/app.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/css/custom.css')}}" rel="stylesheet" />

	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{asset('backend/plugins/jvectormap-next/jquery-jvectormap.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN PAGE CSS ================== -->
	<link href="{{asset('backend/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />
	<!-- ================== END PAGE CSS ================== -->

	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- ================== BEGIN datatables style ================== -->
	<link href="{{asset('backend/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" />
	<!-- ================== END datatables style ================== -->


	<!-- ================== BEGIN DATE TIME PICKER ================== -->
	<link href="{{asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/ion-rangeslider/css/ion.rangeSlider.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/%40danielfarrell/bootstrap-combobox/css/bootstrap-combobox.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/tag-it/css/jquery.tagit.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css')}}" rel="stylesheet" />
	<link href="{{asset('backend/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css')}}" rel="stylesheet" />
	<!-- ================== END DATE TIME PICKER ================== -->

    <link rel="stylesheet" href="{{asset('backend/plugins/simplemde/simplemde.min.css')}}">

	@yield('style')




</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">





        @include('layouts.backend.navbar')

        @include('layouts.backend.sidebar')

		@yield('content')




		<div id="footer" class="footer">
			&copy; 2020 Portal - AlphaDotcom All Rights Reserved
		</div>



		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->


	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('backend/js/app.min.js')}}"></script>
	<script src="{{asset('backend/js/theme/default.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN DATATABLE LEVEL JS ================== -->
	<script src="{{asset('backend/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

	<script src="{{asset('backend/plugins/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('backend/plugins/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
	<script src="{{asset('backend/plugins/pdfmake/build/pdfmake.min.js')}}"></script>
	<script src="{{asset('backend/plugins/pdfmake/build/vfs_fonts.js')}}"></script>
	<script src="{{asset('backend/plugins/jszip/dist/jszip.min.js')}}"></script>
	<script src="{{asset('backend/js/demo/table-manage-buttons.demo.js')}}"></script>
	<!-- ================== END DATATABLE LEVEL JS ================== -->

	<!-- ================== BEGIN DATE TIME PICKER ================== -->
	<script src="{{asset('backend/plugins/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
	<script src="{{asset('backend/plugins/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('backend/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{asset('backend/plugins/jquery.maskedinput/src/jquery.maskedinput.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{asset('backend/plugins/pwstrength-bootstrap/dist/pwstrength-bootstrap.min.js')}}"></script>
	<script src="{{asset('backend/plugins/%40danielfarrell/bootstrap-combobox/js/bootstrap-combobox.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('backend/plugins/tag-it/js/tag-it.min.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('backend/plugins/select2/dist/js/select2.min.js')}}"></script>
	<script src="{{asset('backend/plugins/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-show-password/dist/bootstrap-show-password.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
	<script src="{{asset('backend/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js')}}"></script>
	<script src="{{asset('backend/plugins/clipboard/dist/clipboard.min.js')}}"></script>
	<script src="{{asset('backend/js/demo/form-plugins.demo.js')}}"></script>
	<!-- ================== END DATE TIME PICKER ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('backend/plugins/gritter/js/jquery.gritter.js')}}"></script>
	<script src="{{asset('backend/plugins/flot/jquery.flot.js')}}"></script>
	<script src="{{asset('backend/plugins/flot/jquery.flot.time.js')}}"></script>
	<script src="{{asset('backend/plugins/flot/jquery.flot.resize.js')}}"></script>
	<script src="{{asset('backend/plugins/flot/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('backend/plugins/jvectormap-next/jquery-jvectormap.min.js')}}"></script>
	<script src="{{asset('backend/plugins/jvectormap-next/jquery-jvectormap-world-mill.js')}}"></script>
	<script src="{{asset('backend/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('backend/js/demo/dashboard.js')}}"></script>
	<script src="{{asset('backend/js/demo/table-manage-combine.demo.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{asset('backend/plugins/summernote/dist/summernote.min.js')}}"></script>
	<script src="{{asset('backend/js/demo/form-summernote.demo.js')}}"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{asset('backend/plugins/simplemde/simplemde.min.js')}}"></script>


	@yield('script')


</body>


</html>
