<!DOCTYPE html>
<html lang="en">
<head>
	<title>Latest Government Jobs in India, Sarkari Naurki, Free and Daily Government Job Alert and Notification - getgovtjob.com</title>
	<meta name="description" content="Latest Government Jobs in India, Sarkari Naurki, Free and Daily Government Job Alerts and Notification">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Le styles -->
	<link href="{{ asset('public/css/bootstrap.min.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/css/bootstrap-theme.min.css') }}" media="screen" rel="stylesheet" type="text/css">
	<link href="{{ asset('public/css/firstborn.css') }}" media="screen" rel="stylesheet" type="text/css">	
	<!-- Scripts -->
<!--[if lt IE 9]><script type="text/javascript" src="{{ asset('public/js/html5shiv.js') }}"></script><![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="{{ asset('public/js/respond.min.js') }}"></script><![endif]-->
<script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}"></script>
</head>

	<body>
	<!-- header -->
        <div class="header">
        	<div class="container">
            	<div class="logo-row">
                	<div class="col-md-4 logo-box">
                    	<a href="{{ url('/') }}" class="logo">Get Govt Job.Com</a>
                    </div>
                    <div class="col-md-4 social-header hidden-xs">
                    	<a href="https://www.google.com/+Getgovtjobalerts"><img src="{{ asset('public/img/gplus.png') }}"/></a>
                        <a href="https://www.facebook.com/getgovjob"><img src="{{ asset('public/img/facebook.png') }}"/></a>
                        <a href="https://twitter.com/GetGovJobs"><img src="{{ asset('public/img/twitter.png') }}"/></a>
                        <a href="https://www.linkedin.com/company/getgovtjob-com"><img src="{{ asset('public/img/linkedin.png') }}"/></a>
                        
                    </div>
                    <div class="col-md-4 hidden-xs">
                    	<form action="/search/" method="get">
                        	<div class="form-group">
                            	<div class="col-md-9" style="padding-right:0px;padding-left:0px;">
                                	<input class="form-control" type="text" name="query" placeholder="Search government jobs..." />
                                </div>
                                <div class="col-md-3">
                                	<input class="btn btn-primary" type="submit" name="btnSearch" value="SEARCH" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of top header  **************************-->
	
	   <!-- menu bar -->
        <div class="menu-bar">
            <div class="container">
            	<ul class="list-unstyled">
            		<li><a href="/" style="padding-left: 0px">Home</a></li>            		
                	<li><a href="/category/govt-jobs/">Central Govt</a></li>
                	<li><a href="/category/ssc-ssb-jobs/">State Govt</a></li>
                	<li><a href="/category/bank-jobs/">Bank Jobs</a></li>
               		<li><a href="/category/railway-jobs/">Railway Jobs</a></li>
                	<li><a href="/category/education-jobs/">Faculty|Teaching</a></li>
                	<li><a href="/category/ssc-upsc-jobs/">SSC UPSC</a></li>
                	<li><a href="/category/defence-jobs/">Defence Jobs</a></li>                	
                	<li><a href="/category/psu-jobs/">PSU Jobs</a></li>                	
            	</ul>
            </div>
        </div>
        <!-- end of menu bar ************************-->	
        
		@yield('content')
	
	
	 
              <!-- footer -->
   
    <footer>
    	<div class="container">
       
        	<div class="col-md-4" style="padding-left:0">
            	<div class="widget">
                	<h4>Discover</h4>
               		<ul class="list-unstyled">
                    	<li><a href="/about-us">About Us</a></li>
                        <li><a href="/contact/">Contact us</a></li>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions">Terms & Conditions</a></li>
                        <li><a href="/subscription/">Subscribe Daily Alerts</a></li>
                        <li><a href="/subscription/unsubscribe">Unsubscribe Alerts</a></li>
                    </ul>
               </div>
            </div>
            <div class="col-md-4">
            
            </div>
            <div class="col-md-4">
            	<!-- widget subscribe -->
                	<div class="widget">
                    
                    		<h4>Newsletter</h4>
                       
                    	
                        	<p>Subscribe daily newsletter &amp; get jobs directly in your inbox for free.</p>
                    		<form method="post" action="/subscription/">
                        		<input type="email" class="form-control" name="email" placeholder="Enter your email address" />
                            	<br />
                            	<input type="submit" class="form-control btn btn-warning" value="SUBSCRIBE" />
                        	</form>
                        </div>
                   
                    <!-- end of widget subscribe -->
            </div>
        
        </div>
    </footer>
    
    <div class="top-header">
    	<div class="container">
        	<div style="text-align:center">
            	Vinweb Services &copy; 2015
            </div>
        </div>
    </div>              
	</body>
</html>