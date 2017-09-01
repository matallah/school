<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>School Manage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- The styles -->
    <link id="bs-css" href="<?php echo url();?>/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo url();?>/css/charisma-app.css" rel="stylesheet">
    <link href='<?php echo url();?>/bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo url();?>/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo url();?>/bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo url();?>/bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>

    <link href='  <?php echo url();?>/bower_components/datatables/media/css/jquery.dataTables.css' rel='stylesheet'>

    <link href='<?php echo url();?>/bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>

    <link href='<?php echo url();?>/css/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/uploadify.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/animate.min.css' rel='stylesheet'>
    <link href='<?php echo url();?>/css/app.css' rel='stylesheet'>

    @yield("style")
    <style media="screen">
  body {
      color: #154d88;
      background: rgba(233, 237, 241, 0.27);
      font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
      font-size: 13px;
      font-weight: 400;
      line-height: 1.471;
  }
  </style>
    <!-- jQuery -->
    <script src="<?php echo url();?>/bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
<!-- topbar starts -->
<div class="navbar navbar-default" role="navigation">

    <div class="navbar-inner">
        <button type="button" class="navbar-toggle pull-left animated flip">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <span class="iname">{{Session::get('inName')}}</span>

        <!-- user dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> {{Session::get('name')}}</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/settings"><i class="glyphicon glyphicon-user"></i> الصفحة الشخصية</a></li>
                <li class="divider"></li>
                <li><a href="/users/logout"><i class="glyphicon glyphicon-log-out"></i> تسجيل خروج</a></li>
            </ul>
        </div>
        <!-- Addmission dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                <i class="glyphicon glyphicon-th-large"></i><span class=""> قبول الطلاب</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/applicants"><i class="glyphicon glyphicon-th-list"></i> قائمة الطلبات</a></li>
                <li class="divider"></li>
                <li><a href="/regonline" target="_blank"><i class="glyphicon glyphicon-list-alt"></i> طلب تسجيل طالب</a></li>
                <li><a href="/admitcard" target="_blank"><i class="glyphicon glyphicon-print"></i> طباعه الموافقة</a></li>





            </ul>
        </div>
        <!-- admission dropdown ends -->



        <!-- Library dropdown starts -->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                <i class="glyphicon glyphicon-book"></i><span class=""> المكتبة</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">

                <li><a href="/library/search"><i class="glyphicon glyphicon-search"></i> بحث عن كتاب</a></li>
                <li><a href="/library/issuebook"><i class="glyphicon glyphicon-pencil"></i> استعاره كتاب</a></li>
                <li><a href="/library/issuebookview"><i class="glyphicon glyphicon-list"></i> قائمة الكتب المستعارة</a></li>
                <li class="divider"></li>
                    <li><a href="/library/view-show"><i class="glyphicon glyphicon-list"></i> قائمة الكتب</a></li>
                    <li><a href="/library/addbook"><i class="glyphicon glyphicon-pencil"></i> اضافه كتاب</a></li>
                    <li><a href="/library/reports"><i class="glyphicon glyphicon-print"></i> التقارير</a></li>
                    <li><a href="/library/reports/fine"><i class="glyphicon glyphicon-print"></i> تقرير شهري بالغرامه</a></li>


            </ul>
        </div>
        <!-- Library dropdown ends -->
        <!-- Dormitory dropdown starts -->
<!--        <div class="btn-group pull-right">-->
<!--            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">-->
<!---->
<!--                <i class="glyphicon glyphicon-home"></i><span class=""> Dormitory</span>-->
<!--                <span class="caret"></span>-->
<!--            </button>-->
<!--            <ul class="dropdown-menu">-->
<!---->
<!--                <li><a href="/dormitory"><i class="glyphicon glyphicon-home"></i> Dormitory</a></li>-->
<!--                <li><a href="/dormitory/assignstd"><i class="glyphicon glyphicon-plus"></i> Assign Student</a></li>-->
<!--                <li><a href="/dormitory/assignstd/list"><i class="glyphicon glyphicon-user"></i> Student List</a></li>-->
<!--                <li class="divider"></li>-->
<!--                    <li><a href="/dormitory/fee"><i class="glyphicon glyphicon-list"></i> Fee Collection</a></li>-->
<!--                    <li><a href="/dormitory/report/std"><i class="glyphicon glyphicon-print"></i> Dormitory Report</a></li>-->
<!--                    <li><a href="/dormitory/report/fee"><i class="glyphicon glyphicon-print"></i> Fee Reports</a></li>-->
<!---->
<!--            </ul>-->
<!--        </div>-->
        <!-- Dormitory dropdown ends -->
        <!-- fees dropdown starts-->
        <div class="btn-group pull-right">
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                <i class="glyphicon glyphicon-list-alt"></i><span class=""> الرسوم</span>
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/fees/view"><i class="glyphicon glyphicon-search"></i> رسوم الطالب</a></li>
                <li><a href="/fee/collection"><i class="glyphicon glyphicon-pencil"></i> اضافه رسوم</a></li>

                <li class="divider"></li>
                <li><a href="/fees/list"><i class="glyphicon glyphicon-list"></i> قائمة الرسوم</a></li>
                <li><a href="/fees/setup"><i class="glyphicon glyphicon-cog"></i> اعدادات الرسوم</a></li>
                <li class="divider"></li>
                <li><a href="/fees/report"><i class="glyphicon glyphicon-print"></i> تقارير الرسوم</a></li>

            </ul>
        </div>
        <!-- fees dropdown ends -->

    </div>
</div>
<!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2" >
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="/dashboard"><i class="glyphicon glyphicon-th-large"></i><span>  الاحصائيات </span></a>
                        </li>

                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-home"></i><span> الفصول </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/class/create">اضافة فصل</a></li>
                                <li><a href="/class/list">قائمة الفصول</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-book"></i><span> المادة الدراسية </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/subject/create">اضافه مادة</a></li>
                                <li><a href="/subject/list">قائمة المواد</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-user"></i><span> الطلاب </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/student/create">اضافة طالب</a></li>
                                <li><a href="/student/list">قائمة الطلاب</a></li>

                            </ul>
                        </li>
                        <li class="accordion">
                       <a href="#"><i class="glyphicon glyphicon-pencil"></i><span> الحضور والغياب </span></a>
                       <ul class="nav nav-pills nav-stacked">
                           <li><a href="/attendance/create-file">اضافه من ملف</a></li>
                           <li><a href="/attendance/create">جديد</a></li>
                           <li><a href="/attendance/list">عرض</a></li>


                       </ul>
                   </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-list-alt"></i><span>  تعيين الدرجات </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/mark/create">جديد</a></li>
                                <li><a href="/mark/list">قوائم الدرجات</a></li>
                            </ul>
                        </li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon  glyphicon glyphicon-list"></i><span>  نتائج الامتحانات </span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/result/generate">  استخراج النتائج</a></li>
                                <li><a href="/result/search">  البحث</a></li>
                                <li><a href="/results">  بحث عام</a></li>

                            </ul>
                        </li>
                        <li class="">
                            <a href="/promotion"><i class="glyphicon glyphicon-arrow-up"></i><span>  الترفية</span></a>


                        <li class="accordion">
                            <a href="#"><i class="glyphicon  glyphicon glyphicon-list-alt"></i><span>  الحسابات</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/accounting/sectors">الارادات والمصروفات</a></li>
                                <li><a href="/accounting/income">اضافة ارادات</a></li>
                                <li><a href="/accounting/incomelist">عرض الارادات</a></li>
                                <li><a href="/accounting/expence">اضافة المصروفات</a></li>
                                <li><a href="/accounting/expencelist">عرض المصروفات</a></li>

                            </ul>
                        </li>
                      <!--  <li class="accordion">

                          <a href="#"><i class="glyphicon glyphicon-envelope"></i><span> SMS</span></a>
                          <ul class="nav nav-pills nav-stacked">
                              <li><a href="/sms">Bulk SMS</a></li>



                          </ul>
                      </li> -->
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-print"></i><span>  التقارير</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/gradesheet">التخرج</a></li>
                                <li><a href="/attendance/report">الحضور والغياب</a></li>
                                <li><a href="/tabulation">نتائج الامتحانات</a></li>
                                <li><a href="/smslog">سجلات الرسائل</a></li>
                                <li><a href="/accounting/report">تقارير الحسابات</a></li>
                                <li><a href="/accounting/reportsum">رصيد الحسابات</a></li>
                                 <li><a href="/barcode">استخراج باركود</a></li>


                            </ul>
                        </li>
                        @if (Session::get('userRole')=="Admin")
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-cog"></i><span>  الإعدادات</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="/gpa">قواعد الدرجات</a></li>

                                <li><a href="/users">المستخدمين</a></li>
                                <li><a href="/institute">بيانات المدرسة</a></li>

                            </ul>
                        </li>
                          @endif
                    </ul>

                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
            @if (isset($successmsg))
                <div class="alert alert-success">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{{ $success }}.</strong>
                </div>
            @endif
            @if (isset($errormsg))
                <div class="alert alert-danger">
                    <button data-dismiss="alert" class="close" type="button">×</button>
                    <strong>{{ $error }}.</strong>
                </div>
            @endif


            @yield('content')




            <!-- content ends -->
        </div><!--/#content.col-md-0-->
    </div><!--/fluid-row-->
    <div class="row">
        <div class="col-md-9 col-lg-9 col-xs-9 hidden-xs">



        </div>

    </div>


    <footer class="footer">
        <hr>
        <p class="col-md-9 col-sm-9 col-xs-12 copyright"> <a href="#" target="_blank">{{Session::get('inName')}}</a> &copy;2016</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by"> <a
                    href="https://www.linkedin.com/in/muhammedatallah" target="_blank">m3atallah@gmail.com 01011192091</a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo url();?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo url();?>/js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo url();?>/bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo url();?>/bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo url();?>/bower_components/datatables/media/js/jquery.dataTables.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo url();?>/bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo url();?>/bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo url();?>/js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo url();?>/bower_components/responsive-tables/responsive-tables.js"></script>

<!-- star rating plugin -->
<script src="<?php echo url();?>/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo url();?>/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo url();?>/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->

<script src="<?php echo url();?>/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo url();?>/js/charisma.js"></script>

@yield('script')
</body>
</html>
