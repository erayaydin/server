<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel='stylesheet' href='{{ asset("assets/css/plugins/fullcalendar.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/datatables/datatables.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/datatables/datatables.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/chosen.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/jquery.timepicker.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/daterangepicker-bs3.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/colpick.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/dropzone.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/jquery.handsontable.full.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/jscrollpane.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/jquery.pnotify.default.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/plugins/jquery.pnotify.default.icons.css") }}'>
    <link rel='stylesheet' href='{{ asset("assets/css/app.css") }}'>

    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

    <link href="{{ asset("assets/favicon.ico") }}" rel="shortcut icon">
    <link href="{{ asset("assets/apple-touch-icon.png") }}" rel="apple-touch-icon">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    @javascript html5shiv respond.min
    <![endif]-->

    <title>@yield("title")</title>
</head>

<body class="glossed">
@yield("main")
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src='{{ asset("assets/js/plugins/jquery.pnotify.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.sparkline.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/mwheelIntent.js") }}'></script>
<script src='{{ asset("assets/js/plugins/mousewheel.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/tab.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/dropdown.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/tooltip.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/collapse.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/scrollspy.js") }}'></script>
<script src='{{ asset("assets/js/plugins/bootstrap-datepicker.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/transition.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.knob.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.flot.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/fullcalendar.js") }}'></script>
<script src='{{ asset("assets/js/plugins/datatables/datatables.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/chosen.jquery.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.timepicker.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/daterangepicker.js") }}'></script>
<script src='{{ asset("assets/js/plugins/colpick.js") }}'></script>
<script src='{{ asset("assets/js/plugins/moment.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/datatables/bootstrap.datatables.js") }}'></script>
<script src='{{ asset("assets/js/bootstrap/modal.js") }}'></script>
<script src='{{ asset("assets/js/plugins/raphael-min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/morris-0.4.3.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/justgage.1.0.1.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.maskedinput.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.maskmoney.js") }}'></script>
<script src='{{ asset("assets/js/plugins/summernote.js") }}'></script>
<script src='{{ asset("assets/js/plugins/dropzone-amd-module.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.validate.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jquery.bootstrap.wizard.min.js") }}'></script>
<script src='{{ asset("assets/js/plugins/jscrollpane.min.js") }}'></script>
<script src='{{ asset("assets/js/application.js") }}'></script>

<!-- Page Scripts -->
@yield("page.js")
</body>
</html>