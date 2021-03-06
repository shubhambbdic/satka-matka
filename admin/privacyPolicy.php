<?php include './common/session_db.php'; ?>
<html class="no-js" lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




    <head>
        <?php include './common/head.php'; ?>
        <?php include '../Config/common_script.php'; ?>


    </head>
 <body>
        <div class="left-sidebar-pro">
            <!-- nav_siderbar php -->
            <?php include './common/nav_sidebar.php'; ?>
            <!-- nav_siderbar End php -->
        </div>
<!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">

                <!-- haeder_menu  start-->
                <?php include './common/header_menu.php'; ?>
                <!-- haeder_menu  end -->
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <?php include './common/mobile_menu_area.php'; ?>
                </div>
                <!-- Mobile Menu end -->
            </div>
            <nav class="navbar navbar-light bg-light nav1">
  <a class="navbar-brand" style="color:#fff; font-size:14px;"></a>
</nav>
               <div class="product-status mg-tb-15">
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <DIV class="container-fluid">
                            <div class="sparkline-list">
                           <h3 class="service_title" style="text-align: center;">Privacy Policy</h3>
                                    <div class="col-12;" style="text-align:left;">
				<p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
				<h4>Interpretation and Definitions</h4>
<h5>Interpretation</h5>
<p>The words of which the initial letter is capitalized have meanings defined under the following conditions.</p>
<p>The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
<h5>Definitions</h5>
<p>For the purposes of this Privacy Policy:</p>	
<ul style="list-style-type:disc">
<li><b>You</b> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
<li><b>Company</b>(referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Rxce.</li>
<li><b>Affiliate</b> means an entity that controls, is controlled by or is under common control with a party, where "control" means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</li>
<li><b>Account</b> means a unique account created for You to access our Service or parts of our Service.</li>
<li><b>Website</b> refers to Rxce, accessible from https://rxce.in</li>
<li><b>Service</b> refers to the Website.</li>
<li><b>Country</b> refers to: Uttar Pradesh, India</li>
<li><b>Service Provider</b> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</li>
<li><b>Third-party Social Media Service</b> refers to any website or any social network website through which a User can log in or create an account to use the Service.</li>
<li><b>Personal Data</b> is any information that relates to an identified or identifiable individual.</li>
<li><b>Cookies</b> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>
<li><b>Device</b> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
<li><b>Usage Data</b> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>

</ul>			
                                
								</div>
			

					</div>
				</div>
			</div>
		</div>

	</div>




<script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tbody tr").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
        <!-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
        <script>
            // CKEDITOR.replace('description');
        </script>
        <?php include './common/footer_script.php'; ?>
    </body>

</html>