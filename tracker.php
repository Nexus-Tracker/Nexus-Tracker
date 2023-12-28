
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nexus Express    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width" />
    <link rel="icon" type="image/png" href="../wp-content\uploads\2016\12\cropped-logo-32x32.png" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, dont includes it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons    
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet"> -->

   
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="style22.css" rel="stylesheet">

    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> 

    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
    
    


    <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script language="javascript">
        function printdiv()
        {
        window.print();
  }


  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied: " + copyText.value);
}
</script>





    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }

      
      
      
      
      
      
      
       /* !important is needed sometimes */
 ::-webkit-scrollbar {
    width: 12px !important;
    height: 12px !important;
 }

 /* Track */
::-webkit-scrollbar-track {
   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3) !important;
   -webkit-border-radius: 20px !important;
   border-radius: 20px !important;
 }

 /* Handle */
 ::-webkit-scrollbar-thumb {
   -webkit-border-radius: 20px !important;
   border-radius: 20px !important;
   background: #41617D !important; 
   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5) !important; 

 }
 ::-webkit-scrollbar-thumb:window-inactive {
   background: #41617D !important; 
 }


@media screen and (max-width: 400px) {
  .col-xs-6 {
    width: 100% !important;
  }
}

@media screen and (min-width: 401px) and (max-width: 450px) {
 .col-xs-6 {
    width: 100% !important;
  }
}


@media screen and (min-width: 451px) and (max-width: 500px) {
  .col-xs-6 {
    width: 100% !important;
  }
}

@media screen and (min-width: 501px) and (max-width: 600px) {
  .col-xs-6 {
    width: 100% !important;
  }
}

@media screen and (min-width: 601px) and (max-width: 700px) {
  .hideGoogle {
    float:right;
    margin-top:19px !important;
    margin-left: 440px !important;;
    z-index: 99999;
    position:fixed;}
}

@media screen and (min-width: 701px) and (max-width: 767px) {
 .col-xs-6 {
    width: 100% !important;
  }
}

@media screen and (min-width: 768px) and (max-width: 1024px) {
  .col-xs-6 {
    width: 100% !important;
  }
}



    </style>


</head>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
window.onload=function(){
  //document.getElementById("btnSubmit").click();
};
</script>





<body>
    <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">

            <div class="logo">
                <img src="img/logo2.png">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="logistics">
                            <i class="fa fa-windows" aria-hidden="true"></i>
                                <span>Delivery Details</span>
                                
                        </a>
                    </li>

                    <li>
                        <a href="../cp/track-result" target="_blank">
                            <i class="fa fa-list" aria-hidden="true"></i>
                                <span>Simple View</span>
                                
                        </a>
                    </li>

                     <li>
                        <a href="invoice">
                             <i class="fa fa-print" aria-hidden="true"></i>
                                <span>Invoice</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="contact">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span>Contact Us</span>
                                
                        </a>
                    </li>
                    <li>
                        <a href="agents">
                            <i class="fa fa-user" aria-hidden="true"></i>
                                <span>My Agents</span>
                                <span class="pull-right-container">
                                  <span class="label bg-blue pull-right">0</span>
                                </span>
                           
                        </a>
                    </li>


                   

                     <li>
                        <a href="logout">
                             <i class="fa fa-power-off" aria-hidden="true"></i>
                                <span>Logout</span>
                        </a>
                    </li>

                    <hr><br>
                    
                    <div class="col-lg-12">
                            <div class="progress-group"><font size="2">
                            <span class="progress-text3">Processing Completed</span>
                            <span class="progress-number">100%</span></font>

                            
                             <div class="progress">
                              <div class="progress-bar progress-bar-info" role="progressbar" style="width:30%">
                                Processing
                              </div>
                              <div class="progress-bar progress-bar-warning" role="progressbar" style="width:31%">
                                Inspected
                              </div>
                              <div class="progress-bar progress-bar-success" role="progressbar" style="width:39%">
                                Registered 
                              </div>
                            </div>
                          



                            



                            </div>
                    </div>
                    <div class="col-lg-12">
                            <div class="progress-group"><font size="2">
                            <span class="progress-text3">Current Delivery Progress </span>
                            <span class="progress-number">70%</span></font>

                            <div class="progress progress-sm active">
                              <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 
                              70%"></div>
                            </div>
                            </div>
                    </div>






                
                    <li class="active-pro">
                        <a >
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                                <span>NEX400279xxxxxx</span>
                           
                        </a>
                    </li>
                </ul>
            </div>
        </div>        <div class="main-panel">

                    <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand"> <img src="img/track.png"></a> 
                        <center><a class="navbar-brandLogo "> <img src="img/logo.png"></a> </center>


                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="logistics" >
                                    <i class="fa fa-windows" aria-hidden="true"></i>
                                    <p class="hidden-lg hidden-md">Delivery Details</p>
                                </a>
                            </li>
                            <li>
                                <a href="contact" >
                                    <i class="fa fa-edit" aria-hidden="true"></i>
                                    <p class="hidden-lg hidden-md">Contact Us</p>
                                </a>
                            </li>
                            <li>
                                <a href="logout" >
                                    <i class="fa fa-power-off" aria-hidden="true"></i>
                                    <p class="hidden-lg hidden-md">Logout</p>
                                </a>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            <div class="content">
        
                <div class="container-fluid">
                
                    <!-- <div id="google_translate_element"></div> -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="fa fa-question-circle "></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Onhold</p>
                                    <h3 class="title">
                                        <small>70% <font size="2px">Completed!</font></small>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                         <i class="fa fa-exclamation-circle"></i>
                                        <a href="invoice.php">Current delivery notification</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Description</p>
                                    <h3 class="title"><small>Package </small></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-briefcase"></i> Package description
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Freight</p>
                                    <h3 class="title">$1,270</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-shopping-cart "></i> <a href="invoice.php">Delivery total charge</a> <font size="2px" color="green">(<b>PAID</b>)</font>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pickup Date</p>
                                    <h3 class="title">2 days  </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="fa fa-calendar-check-o"></i> Delivery posting date: 29/11/2023                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                    <div class="row">


                        <div class="col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">CURRENT DELIVERY STATUS & PROGRESS</h4>
                                    <p class="category">
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                70% 
                                                </div>
                                        </div>
                                    </p>
                                </div>
                                <div class="card-content table-responsive" >

                                




<iframe id='mapcanvas' src='https://maps.google.com/maps?q=United States,United State of American &z=3&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' style="border:none;" width='100%' height='300' >

    <div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:700px;'></div></div>

</iframe>



                                    <table class="table table-hover" >
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Location</th>
                                            <th>Status</th>
                                            <th>Date/Time</th>
                                            <th>Current Activities</th>
                                        </thead>
                                        <tbody>
                                                                                    <tr>
                                                <td>7</td>
                                                <td title="Package Onhold in United State of American ">United States</td>
                                                <td title="Package Onhold in United State of American ">
                                                                                                            <span class="label label-danger">
                                                        <a href="invoice" style="color: white;">
                                                            Onhold    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-12-16 16:47:18</font></td>
                                                <td>Package Onhold in United State of American </td>
                                            </tr>
                                                                                    <tr>
                                                <td>6</td>
                                                <td title="Package currently on transit in Mexico City">Mexico</td>
                                                <td title="Package currently on transit in Mexico City">
                                                                                                            <span class="label label-success">
                                                        <a href="invoice" style="color: white;">
                                                            In Transit    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-12-16 11:25:51</font></td>
                                                <td>Package currently on transit in Mexico City</td>
                                            </tr>
                                                                                    <tr>
                                                <td>5</td>
                                                <td title="Package currently on transit in Istanbul Turkey ">Turkey</td>
                                                <td title="Package currently on transit in Istanbul Turkey ">
                                                                                                            <span class="label label-success">
                                                        <a href="invoice" style="color: white;">
                                                            In Transit    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-12-16 08:15:44</font></td>
                                                <td>Package currently on transit in Istanbul Turkey </td>
                                            </tr>
                                                                                    <tr>
                                                <td>4</td>
                                                <td title="Package on process in Istanbul Turkey ">Turkey</td>
                                                <td title="Package on process in Istanbul Turkey ">
                                                                                                            <span class="label label-warning">
                                                        <a href="invoice" style="color: white;">
                                                            Processing...    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-12-07 14:27:48</font></td>
                                                <td>Package on process in Istanbul Turkey </td>
                                            </tr>
                                                                                    <tr>
                                                <td>3</td>
                                                <td title="Package withhold in Istanbul Turkey ">Turkey</td>
                                                <td title="Package withhold in Istanbul Turkey ">
                                                                                                            <span class="label label-danger">
                                                        <a href="invoice" style="color: white;">
                                                            Withhold    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-11-30 10:53:10</font></td>
                                                <td>Package withhold in Istanbul Turkey </td>
                                            </tr>
                                                                                    <tr>
                                                <td>2</td>
                                                <td title="Package currently on transit in Berlin Germany">Germany</td>
                                                <td title="Package currently on transit in Berlin Germany">
                                                                                                            <span class="label label-success">
                                                        <a href="invoice" style="color: white;">
                                                            In Transit    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-11-30 01:00:34</font></td>
                                                <td>Package currently on transit in Berlin Germany</td>
                                            </tr>
                                                                                    <tr>
                                                <td>1</td>
                                                <td title="Package registered successfully ">United Kingdom</td>
                                                <td title="Package registered successfully ">
                                                                                                            <span class="label label-success">
                                                        <a href="invoice" style="color: white;">
                                                            Registered    
                                                        </a>
                                                        </span>
                                                </td>
                                                <td><font size="2px">2023-11-29 05:01:28</font></td>
                                                <td>Package registered successfully </td>
                                            </tr>
                                        
                                       
                                        </tbody>
                                    </table>


                                </div>


                                 


                            </div>

                        </div>




                        <div class="col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">SHIPMENT INFORMATION</h4>
                                    <p class="category">Shipment details at a glance.</p>
                                </div>
                                <div class="card-content table-responsive" style="/*font-size: 13px !important;*/">
                                    <!---<u><font color="#333399">SENDER</font></u>
  
                                     <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>NAME</th>
                                            <th>ADDRESS</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    <hr style="border-color: #8e24aa; border-style: dashed;">-->

                                    <u><font color="#333399">RECEIVER</font></u>

                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>NAME</th>
                                            <th>ADDRESS</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Miguel angel herrerasalinas</td>
                                                <td> 7025 Shiloh pl Stockton CA 95219 USA</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <hr style="border-color: #8e24aa; border-style: dashed;">

                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>WEIGHT</th>
                                            <th>INVOICE #</th>
                                            <th>POSTING DATE</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>21.9kg</td>
                                                <td><a href="invoice" style="color: black;">38248</a></td>
                                                <td>29/11/2023</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                    <iframe id='mapcanvas' src='https://maps.google.com/maps?q=United Kingdom UK&z=1&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' style="border:none;" width='100%' height='300' >

    <div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:700px;'></div></div>

</iframe>


                                                                        <img src='../images/demo.jpg' class="img-responsive img-thumbnail">
                                    

                                        <button type="button" class="btn btn-success" name="btnSubmit"  id="btnSubmit" data-toggle="modal" data-target="#exampleModalCenter" >SHIPMENT ORIGIN & DESTINATION </button>


                                </div>
                            </div>
                        </div>



                       




                    </div>
                    
                </div>
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="logistics">
                                    Home
                                </a>
                            </li>

                            <li>
                                <a href="invoice">
                                    Invoice
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="agents">
                                    Agents
                                </a>
                            </li>


                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        All rights reserved. <b>Nexus Express       </b>
                    </p>
                </div>
            </footer>        </div>
    </div>





<link rel="stylesheet" href="css/stylebox.css">



  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"   data-mdb-backdrop="static"
  data-mdb-keyboard="false">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
              X
            </button>
          </div>

          <div class="modal-body pt-md-0 pb-md-5 text-center">
            <!-- <h2>You've Got Mail!</h2> -->
      
        <iframe id='mapcanvas' src='https://maps.google.com/maps?q=United Kingdom UK&z=2&ie=UTF8&iwloc=&output=embed' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' style="border:none;" width='100%' height='500' >

        <div style='overflow:hidden;'><div id='gmap_canvas' style='height:100%;width:800px;'></div></div>

        </iframe>
            <!--  -->

          </div>


        </div>
      </div>
    </div>


</body>

<!--   Core JS Files   -->
  
<script src="assets/js/jquery.min.js"></script>

<!-- <script src="assets/js/3jquery-3.2.1.min.js" type="text/javascript"></script> -->
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<!-- <script src="assets/js/chartist.min.js"></script> -->
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script> 
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>

<!-- Material Dashboard DEMO methods, dont includes it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript methods body can be found in assets/js/demos.js
        //demo.initDashboardPageCharts();

    });
</script>










</html>