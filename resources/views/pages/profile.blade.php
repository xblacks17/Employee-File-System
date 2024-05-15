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

    <style>
   

/* Style the profile avatar */
.profile_avatar {
    border-radius: 50%;
    overflow: hidden;
    margin-bottom: 20px;
}

/* Style the profile name */
.profile_name h4 {
    margin: 0;
    font-size: 20px;
}

/* Style the menu items */
.menu-col {
    list-style: none;
    padding: 0;
}

.menu-col li {
    margin-bottom: 10px;
}

.menu-col a {
    color: #333;
    text-decoration: none;
}

.menu-col a.active {
    font-weight: bold;
}

/* Style the card */
.card {
    background-color: #fff;
    border-radius: 10px;
    padding: 20px;
    margin-bottom: 25px;
}

.card h4 {
    margin-bottom: 15px;
}

.card p {
    margin-bottom: 10px;
}

/* Style the row */
.row {
    display: flex;
}

.col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
}

/* Style the personal details section */
.col-lg-6 h3 {
    margin-top: 0;
}

/* Style the company details section */
.col-lg-6 h3 {
    margin-top: 0;
}

/* Style the attachment link */
.col-lg-6 p a {
    color: blue;
    text-decoration: underline;
}

.col-lg-6 p a:hover {
    color: navy;
}

    </style>
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

                        <div class="col-lg-9">                          

                            <div class="card p-4 rounded-5 mb25">
                                <h4>Employee Details</h4>
                                
                                <div class="row">
                            <div class="col-lg-6">
                                <h3>Personal Details</h3>
                                <p><strong>Full Name:</strong> {{ $employee->full_name }}</p>
                                <p><strong>Email Address:</strong> {{ $employee->personal_email_address }}</p>
                                <p><strong>Phone Number:</strong> {{ $employee->phone_number }}</p>
                                <p><strong>Home Address:</strong> {{ $employee->home_address }}</p>
                                <p><strong>Date of Birth:</strong> {{ $employee->dob }}</p>
                                <p><strong>Sex:</strong> {{ $employee->sex }}</p>
                                <p><strong>National ID:</strong> {{ $employee->national_id }}</p>
                                <p><strong>Next of Kin:</strong> {{ $employee->next_of_kin }}</p>
                                <p><strong>Dependents:</strong> {{ $employee->dependents }}</p>
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
                                <p><strong>Attachment:</strong>
                                @if($employee->attachment)
                                <a href="{{ route('download.attachment', $employee) }}" target="_blank">Download Attachment</a>
                                @else
                                No Attachment
                                @endif
                                </p>
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


<!-- Mirrored from www.madebydesignesia.com/themes/rentaly/account-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Jun 2023 10:23:04 GMT -->
</html>