<!DOCTYPE html>

<html>
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
    <form id="form1" method="POST">
   <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Management/Dashboard.aspx">ASSEMBLE IT</a> 
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
      
      <button id="btnlogout" runat="server" Text="Logout" Class="btn btn-danger" OnClick="logout_click"/>
  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="/Images/home/logo.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="/Management/Dashboard.aspx"><i class="fa fa-dashboard fa-3x"></i> DASHBOARD</a>
                    </li>
                     <li  >
                        <a  class="active" href="ManageOrders.aspx"><i class="fa fa-edit fa-3x"></i>ORDER MANAGEMENT</a>
                    </li>
                    <li>
                        <a  href="ManageProduct.aspx"><i class="fa fa-cube fa-3x"></i>ADD Component<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                            <li>
                                <a href="addcomponent/addpro.php">ADD Processor</a>
                            </li>
                            <li>
                                <a href="addhdd.php"> ADD HDD</a>
                            </li>
                           <li>
                               <a href="addpro.php.php"> ADD Power Supply</a>
                            </li>
                            <li>
                                <a href="addram.php"> ADD RAM</a>
                            </li>
                            <li>
                                <a href="addssd.php"> ADD SSD</a>
                            </li>
                            <li>
                                <a href="addgraphiccard.php"> ADD GrapicCard</a>
                            </li>
                        </ul>
                    </li>
						 			
					           
                    <li>
                        <a href="#"><i class="fa fa-cubes fa-3x"></i>PRODUCT MANAGEMENT<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/Management/Management.aspx"> MANAGE PRODUCT</a>
                            </li>
                            <li>
                                <a href="/Management/ManagementType.aspx"> MANAGE PRODUCT TYPE</a>
                            </li>
                           
                        </ul>
                      </li>  
                   <li  >
                        <a href="/Management/Customer.aspx"><i class="fa fa-edit fa-3x"></i>Customer MANAGEMENT</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        
                    <div class="col-md-5">
                     <?php 
                   
                     include './manageprocessor.php';
                    
                     ?>
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
