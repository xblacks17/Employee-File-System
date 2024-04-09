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
    <div id="wrapper">
        
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->

        <!-- Employee Details Section Begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Employee Details</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Personal Details</h3>
                                <p><strong>Full Name:</strong> {{ $employee->full_name }}</p>
                                <p><strong>Email Address:</strong> {{ $employee->personal_email_address }}</p>
                                <p><strong>Phone Number:</strong> {{ $employee->phone_number }}</p>
                                <p><strong>Home Address:</strong> {{ $employee->home_address }}</p>
                                <p><strong>Date of Birth:</strong> {{ $employee->dob }}</p>
                                <p><strong>National ID:</strong> {{ $employee->national_id }}</p>
                                <!-- Add other details as needed -->
                            </div>
                            <div class="col-lg-6">
                                <h3>Company Details</h3>
                                <p><strong>Company ID:</strong> {{ $employee->company_id }}</p>
                                <p><strong>Company Email:</strong> {{ $employee->company_email_address }}</p>
                                <p><strong>Position:</strong> {{ $employee->position }}</p>
                                <p><strong>Department:</strong> {{ $employee->department }}</p>
                                <p><strong>Start Date:</strong> {{ $employee->start_date }}</p>
                                <p><strong>Status:</strong> {{ $employee->status }}</p>
                                <p><strong>CV:</strong> <a href="{{ url('/employee/cv/'.$employee->id) }}">Download CV</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Employee Details Section End -->
    </div>

    <!-- JavaScript Files -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
</body>

</html>
