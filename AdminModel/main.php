<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
     <link href="adminstyle/css/Admin.min.css" rel="stylesheet" />
    <link href="adminstyle/css/Admin.css" rel="stylesheet" />

    <link href="adminstyle/css/bootstrap.css" rel="stylesheet" />
    <link href="adminstyle/css/custom.css" rel="stylesheet" />
    <link href="adminstyle/css/font-awesome.css" rel="stylesheet" />
    <link href="adminstyle/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
   
</head>
<body>
    <form id="form1" runat="server">
   <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">ASSEMBLE'IT</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="" class="user-image img-responsive"/>
					</li>
				
					
                  
                     
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> ADD Component<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addcomponent/addpro.php">Processor</a>
                            </li>
                            <li>
                                <a href="addcomponent/addram.php">RAM</a>
                            </li>
                             <li>
                                <a href="addcomponent/addgrahiccard.php">Graphic Card</a>
                            </li>
                             <li>
                                <a href="addcomponent/addhdd.php">HDD</a>
                            </li>
                             <li>
                                <a href="addcomponent/addssd.php">SSD</a>
                            </li>
                             <li>
                                 <a href="addcomponent/addmotherboard.php">MOTHERBOARD</a>
                            </li>
                            <li>
                               
                               
                            </li>
                        </ul>
                      </li>  
						 			
					           
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Manage Component<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="manageprocessor.php">Processor</a>
                            </li>
                            <li>
                                <a href="manageram.php">RAM</a>
                            </li>
                            <li>
                               
                               
                            </li>
                        </ul>
                      </li>  
                 
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     
   
                    </div>
                </div>              
                       
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
       
        <script src="adminstyle/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
        <script src="adminstyle/js/bootstrap.min.js"></script>

    <!-- METISMENU SCRIPTS -->
        <script src="adminstyle/js/jquery.metisMenu.js"></script>
   
     <!-- MORRIS CHART SCRIPTS -->
        <script src="adminstyle/js/morris/morris.js"></script>
        <script src="adminstyle/js/morris/raphael-2.1.0.min.js"></script>
    
      <!-- CUSTOM SCRIPTS -->
        <script src="adminstyle/js/custom.js"></script>
    
      
    </form>
</body>
</html>
