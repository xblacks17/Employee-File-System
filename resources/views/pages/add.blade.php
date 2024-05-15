<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:23:04 GMT -->
<head>
    <title>Grimco Employee File</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="id="fixed-header"">
        <h3 style="
        text-align: center;position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: orange; /* Example background color */
        color: #fff; /* Example text color */
        padding: 20px 0; /* Adjust padding as needed */
        text-align: center;
        z-index: 1000; /* Ensure it appears above other content */">
        Grimco Employee Database System
        </h3>
    </div>

    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- content begin -->
        <div class="no-bottom no-top zebra" id="content">
            <div id="top"></div>

            <section id="section-settings" class="bg-gray-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 mb30">
                            <div class="card p-4 rounded-5">
                                <div class="profile_avatar">
                                    <div class="profile_name">
                                        <h4>
                                            Human Resources                                               
                                            <span class="profile_username text-gray">hr@grimcons.com</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="spacer-20"></div>
                                <ul class="menu-col">
                                    <li><a href="/"><i class="fa fa-home"></i>All Employees</a></li>
                                    <li><a href="/current"><i class="fa fa-user"></i>Current Employee</a></li>
                                    <li><a href="/past" ><i class="fa fa-calendar"></i>Past Employees</a></li>
                                    <li><a href="/add" class="active"><i class="fa fa-calendar"></i>Add Employee</a></li>
                                    <li><a href="/login"><i class="fa fa-calendar"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card p-4  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="form-create-item" class="form-border" method="post" action="{{ route('employee.store') }}" enctype="multipart/form-data">
                                            @csrf
                                        <div class="de_tab tab_simple">
                                        <h4>Current Employees</h4>  
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Personal Details</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Full Name</h5>
                                                            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Full Name" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="personal_email_address" id="personal_email_address" class="form-control" placeholder="Enter Email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Phone</h5>
                                                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Home Address</h5>
                                                            <input type="text" name="home_address" id="home_address" class="form-control" placeholder="Enter Address" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Date of Birth</h5>
                                                            <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter DOB" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Sex</h5>
                                                            <select name="sex" id="sex" class="form-control">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>National ID No.</h5>
                                                            <input type="text" name="national_id" id="national_id" class="form-control" placeholder="Enter National ID" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Next of Kin</h5>
                                                            <textarea name="next_of_kin" id="next_of_kin" cols="30" rows="5" placeholder="Enter Next of Kin (separated by commas)"></textarea>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Dependents</h5>
                                                            <textarea name="dependents" id="dependents" cols="30" rows="5" placeholder="Enter Dependents (separated by commas)"></textarea>
                                                        </div>                             
                                                    </div>
                                                </div>                                                
                                            </div>                                          
                                        </div>

                                        <div class="de_tab tab_simple">
                                        
                                            <ul class="de_nav">
                                                <li class="active"><span>Company Details</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company ID</h5>
                                                            <input type="text" name="company_id" id="company_id" class="form-control" placeholder="Enter Company ID" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Email</h5>
                                                            <input type="text" name="company_email_address" id="company_email_address" class="form-control" placeholder="Enter Email" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Position</h5>
                                                            <input type="text" name="position" id="position" class="form-control" placeholder="Enter Position" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Department</h5>
                                                            <input type="text" name="department" id="department" class="form-control" placeholder="Enter Department" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Start Date</h5>
                                                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Enter Start Date" />
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Status</h5>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="current">Current</option>
                                                                <option value="past">Past</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Attachments</h5>
                                                            <input type="file" name="attachment" id="attachment" class="form-control" />
                                                        </div>                                                                               
                                                    </div>
                                                </div>                                                
                                            </div>                                          
                                        </div>

                                        <input type="submit" id="submit" class="btn-main" value="Add Employee">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
			
			
        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
                
    </div>


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:23:04 GMT -->
</html>