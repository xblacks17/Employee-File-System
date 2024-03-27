<!DOCTYPE html>
<html lang="zxx">


<head>
    <title>Edit Employee Details</title>
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
    <div id="wrapper">
        <div id="content">
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
                                    <li><a href="/past"><i class="fa fa-calendar"></i>Past Employees</a></li>
                                    <li><a href="/add"><i class="fa fa-calendar"></i>Add Employee</a></li>
                                    <li><a href="/login"><i class="fa fa-calendar"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="card p-4  rounded-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="form-edit-item" class="form-border" method="post" action="/employee/{{ $employee->id }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="de_tab tab_simple">
                                                <h4>Edit Employee Details</h4>
                                                
                                            <ul class="de_nav">
                                                <li class="active"><span>Personal Details</span></li>
                                            </ul>
                                            
                                            <div class="de_tab_content">                            
                                                <div class="tab-1">
                                                    <div class="row">
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Full Name</h5>
                                                            <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Full Name" value="{{ $employee->full_name }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Email Address</h5>
                                                            <input type="text" name="personal_email_address" id="personal_email_address" class="form-control" placeholder="Enter Email" value="{{ $employee->personal_email_address }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Phone</h5>
                                                            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number" value="{{ $employee->phone_number }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Home Address</h5>
                                                            <input type="text" name="home_address" id="home_address" class="form-control" placeholder="Enter Address" value="{{ $employee->home_address }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Date of Birth</h5>
                                                            <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter DOB" value="{{ $employee->dob }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>National ID No.</h5>
                                                            <input type="text" name="national_id" id="national_id" class="form-control" placeholder="Enter National ID" value="{{ $employee->national_id }}" value="{{ $employee->national_id }}"/>
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
                                                            <input type="text" name="company_id" id="company_id" class="form-control" placeholder="Enter Company ID" value="{{ $employee->company_id }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Email</h5>
                                                            <input type="text" name="company_email_address" id="company_email_address" class="form-control" placeholder="Enter Email" value="{{ $employee->company_email_address }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Position</h5>
                                                            <input type="text" name="position" id="position" class="form-control" placeholder="Enter Position" value="{{ $employee->position }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Company Department</h5>
                                                            <input type="text" name="department" id="department" class="form-control" placeholder="Enter Department" value="{{ $employee->department }}">
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Start Date</h5>
                                                            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Enter Start Date" value="{{ $employee->start_date }}"/>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>Status</h5>
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="current">Current</option>
                                                                <option value="past">Past</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6 mb20">
                                                            <h5>CV</h5>
                                                            <input type="file" name="cv" id="cv" class="form-control" placeholder="Enter National ID" value="{{ $employee->cv }}"/>
                                                        </div>                              
                                                    </div>
                                                </div>                                                
                                            </div>                                          
                                        </div>
                                            <input type="submit" id="submit" class="btn-main" value="Update Employee">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <a href="#" id="back-to-top"></a>
                
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>
</html>
