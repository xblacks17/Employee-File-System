<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:23:03 GMT -->
<head>
    <title>Grimco Employees</title>
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

            <section id="section-cars" class="bg-gray-100">
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
                                    <li><a href="/" class="active"><i class="fa fa-home"></i>All Employees</a></li>
                                    <li><a href="/current"><i class="fa fa-user"></i>Current Employee</a></li>
                                    <li><a href="/past"><i class="fa fa-calendar"></i>Past Employees</a></li>
                                    <li><a href="/add"><i class="fa fa-calendar"></i>Add Employee</a></li>
                                    <li><a href="/login"><i class="fa fa-calendar"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-3 col-6 mb25 order-sm-1">
                                    <div class="card p-4 rounded-5">
                                        <div class="symbol mb40">
                                            <i class="fa id-color fa-2x fa-calendar-check-o"></i>
                                        </div>
                                        <span class="h1 mb0">{{ $allEmployeesCount }}</span>
                                        <span class="text-gray">All Employees</span>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6 mb25 order-sm-1">
                                    <div class="card p-4 rounded-5">
                                        <div class="symbol mb40">
                                            <i class="fa id-color fa-2x fa-tags"></i>
                                        </div>
                                        <span class="h1 mb0">{{ $currentEmployeesCount }}</span>
                                        <span class="text-gray">Current Employees</span>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-6 mb25 order-sm-1">
                                    <div class="card p-4 rounded-5">
                                        <div class="symbol mb40">
                                            <i class="fa id-color fa-2x fa-calendar"></i>
                                        </div>
                                        <span class="h1 mb0">{{ $pastEmployeesCount }}</span>
                                        <span class="text-gray">Past Employees</span>
                                    </div>
                                </div>

                            </div>

                            <div class="card p-4 rounded-5 mb25">
                                <h4>All Employees
                                <a href="/add" class="btn btn-primary" style="margin-left: 80%; margin-top: 0px;">Add Employee</a>
                                </h4>
                                <table class="table de-table">
                                  <thead>
                                    <tr>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Employee ID</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Employee Name</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Position</span></th>
                                      <th scope="col"><span class="text-uppercase fs-12 text-gray">Department</span></th>
                                  </thead>
                                  <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td><span class="d-lg-none d-sm-block">Employee ID</span>{{ $employee->company_id }}</td>
                                        <td><span class="d-lg-none d-sm-block">Employee Name</span><a href="/employee/{{ $employee->id }} " style="color: grey;">{{ $employee->full_name }}</a></td>
                                        <td><span class="d-lg-none d-sm-block">Position</span>{{ $employee->position }}</td>
                                        <td><span class="d-lg-none d-sm-block">Department</span>{{ $employee->department }}</td>
                                        <!-- Add other columns as needed -->
                                        <td>
                                            <a href="/employee/{{ $employee->id }}/{edit}" class="btn btn-primary">Edit</a>
                                            <form action="/employee/{{ $employee->id }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- Add more rows for other employees if needed -->
                                  </tbody>
                                </table>
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


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:23:04 GMT -->
</html>