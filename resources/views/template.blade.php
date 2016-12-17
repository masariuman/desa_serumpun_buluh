<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Desa Serumpun Buluh | </title>
    <link href="{{url('icon/bambu.png')}}" rel="icon" type="image/x-icon">
    <!-- custom -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('gantella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('gantella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('gantella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('gantella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{asset('gantella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('gantella/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('gantella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('js/sweetalert.css')}}" rel="stylesheet">
 
    <!-- Custom Theme Style -->
    <link href="{{asset('gantella/build/css/custom.min.css')}}" rel="stylesheet">

    <style type="text/css">
      div.container.body {

      }
      div.right_col,
      div.left_col {
        /*padding-bottom: 99999px;*/
        /*margin-bottom: -99999px;*/
            
      }
      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
        vertical-align: middle;
      }
      .nav-md .container.body .right_col {
        margin-left: 230px;
        padding: 10px 30px 0px; 
      }

      .sidebar-footer a:hover {
  background: #172D44;
}
      }


    </style>
    <script src="{{asset('js/serumpun.js')}}"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>DASHBOARD</span></a>
            </div>

            <!-- <div class="clearfix"></div> -->

            <!-- menu profile quick info -->
<!--             <div class="profile">
              <div class="profile_pic">
                <img src="{{asset('gantella/production/images/img.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2>ARIF</h2>
              </div>
            </div>
 -->            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <!-- <h3>General</h3> -->
                <ul class="nav side-menu">
                  <li style="padding: 13px 15px 12px;"><hr></li>
                  <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> DASHBOARD</a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">Dashboard3</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-edit"></i> ARTIKEL <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/artikel') }}">Artikel</a></li>
                      <li><a href="{{ url('admin/artikel/kategori') }}">Kategori</a></li>
                      <li><a href="{{ url('admin/artikel/komentar') }}">Komentar</a></li>
                      <!-- <li><a href="form_wizards.html">Form Wizard</a></li>
                      <li><a href="form_upload.html">Form Upload</a></li>
                      <li><a href="form_buttons.html">Form Buttons</a></li> -->
                    </ul>
                  </li>
                  <li><a href="{{ url('admin/event') }}"><i class="fa fa-bullhorn"></i> EVENT</span></a>
                    <!-- <ul class="nav child_menu">
                      <li><a href="general_elements.html">General Elements</a></li>
                      <li><a href="media_gallery.html">Media Gallery</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="icons.html">Icons</a></li>
                      <li><a href="glyphicons.html">Glyphicons</a></li>
                      <li><a href="widgets.html">Widgets</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-th-large"></i> DESA <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/sejarah') }}">Sejarah</a></li>
                      <li><a href="{{ url('admin/visi&misi') }}">Visi & Misi</a></li>
                      <li><a href="{{ url('admin/struktur') }}">Struktur Organisasi Desa</a></li>
                      <li><a href="{{ url('admin/geografis') }}">Kondisi Geografis</a></li>
                      <li><a href="{{ url('admin/ekonomi') }}">Keadaan Ekonomi</a></li>
                      <li><a href="{{ url('admin/prasarana') }}">Prasarana dan Sarana</a></li>
                      <li><a href="{{ url('admin/pemerintahan') }}">Pemerintahan Umum</a></li>
                    </ul>
                  </li>
                  <!-- <li><a><i class="fa fa-bar-chart-o"></i> STRUKTUR ORGANISASI DESA <span class="fa fa-chevron-down"></span></a> -->
                    <!-- <ul class="nav child_menu">
                      <li><a href="chartjs.html">Chart JS</a></li>
                      <li><a href="chartjs2.html">Chart JS2</a></li>
                      <li><a href="morisjs.html">Moris JS</a></li>
                      <li><a href="echarts.html">ECharts</a></li>
                      <li><a href="other_charts.html">Other Charts</a></li>
                    </ul> -->
                  </li>
                  <li><a><i class="fa fa-mobile"></i>KONTAK <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('admin/kontak/') }}">Kontak Utama</a></li>
                      <li><a href="{{ url('admin/suara_warga') }}">Suara Warga</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('admin/pengaturan') }}"><i class="fa fa-cog"></i>PENGATURAN </span></a>
                  </li>
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out"></i>KELUAR</span></a>
                  </li>
                </ul>
              </div>
              <!-- <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon " aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top">
                <span class="glyphicon " aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('fotoupload/'.$kontak_template->gambar)}}" alt="">{{$copyright->nama_desa}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out pull-right"></i> KELUAR</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
       
          <!-- isi admin -->
          @yield('main')
        
        <!-- /page content -->

        
        <!-- /footer content -->
      </div>
      <!-- footer content -->
        <footer>
          <div class="pull-right">
            Copyright &copy; 2016 Arif Setiawan.
          </div>
          <div class="clearfix"></div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="{{asset('gantella/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('gantella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('gantella/vendors/fastclick/lib/fastclick.js')}}"></script>

    <!-- NProgress -->
    <script src="{{asset('gantella/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('gantella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('gantella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('gantella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('gantella/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('gantella/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('gantella/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('gantella/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('gantella/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('gantella/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('gantella/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('gantella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('gantella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('gantella/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('gantella/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('gantella/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('gantella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('gantella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('gantella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('gantella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('gantella/build/js/custom.min.js')}}"></script>
      <script src="{{asset('js/sweetalert.min.js')}}"></script>




<!-- confirmation delete kategori-->
        <script>
  $('button.delete-kategori').click(function() {
    var photoId = $(this).attr("data-photo-id");
    deleteKategori(photoId);
  });

  function deleteKategori(photoId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/artikel/kategori/delete/" + photoId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>


<!-- confirmation delete artikel-->
        <script>
  $('button.delete-artikel').click(function() {
    var artikelId = $(this).attr("data-photo-id");
    deleteArtikel(artikelId);
  });

  function deleteArtikel(artikelId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/artikel/delete/" + artikelId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>



  <!-- confirmation delete komentar-->
        <script>
  $('button.delete-komentar').click(function() {
    var komentarId = $(this).attr("data-photo-id");
    deleteKomentar(komentarId);
  });

  function deleteKomentar(komentarId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/artikel/komentar/delete/" + komentarId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>




<!-- confirmation delete event-->
<script>
  $('button.delete-event').click(function() {
    var eventId = $(this).attr("data-photo-id");
    deleteEvent(eventId);
  });

  function deleteEvent(eventId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/event/delete/" + eventId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>







  <!-- confirmation delete suara_warga-->
<script>
  $('button.delete-suara').click(function() {
    var suaraId = $(this).attr("data-photo-id");
    deletePhoto(suaraId);
  });

  function deletePhoto(suaraId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/suara_warga/delete/" + suaraId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>




  <!-- confirmation delete organisasi-->
<script>
  $('button.delete-struktur-organisasi').click(function() {
    var organisasiId = $(this).attr("data-photo-id");
    delete_organisasi(organisasiId);
  });

  function delete_organisasi(organisasiId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/struktur/delete/" + organisasiId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>


<!-- confirmation delete DUSUN-->
<script>
  $('button.delete-dusun').click(function() {
    var dusunId = $(this).attr("data-photo-id");
    delete_dusun(dusunId);
  });

  function delete_dusun(dusunId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/dusun/delete/" + dusunId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>

  <!-- confirmation delete RW-->
<script>
  $('button.delete-rw').click(function() {
    var rwId = $(this).attr("data-photo-id");
    delete_rw(rwId);
  });

  function delete_rw(rwId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/rw/delete/" + rwId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>

  <!-- confirmation delete RT-->
<script>
  $('button.delete-rt').click(function() {
    var rtId = $(this).attr("data-photo-id");
    delete_rt(rtId);
  });

  function delete_rt(rtId) {
    swal({
      title: "Apakah anda yakin?", 
      text: "Apakah anda yakin ingin menghapus?", 
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: false,
      confirmButtonText: "Ya",
      confirmButtonColor: "#ec6c62"
    }, function() {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      $.ajax({
        url: "/admin/rt/delete/" + rtId,
        type: "post"
      })
      .done(function(data) {
        swal("Deleted!", "Your file was successfully deleted!", "success");
        location.reload();
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });
    });
  }
  </script>



    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
  </body>
</html>
