<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Employee Details</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/coloring.css">
</head>

<body>
    <div id="wrapper">
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
                                <p><strong>CV:</strong> <a href="{{ route('download.cv', ['id' => $employee->id]) }}">Download CV</a></p>
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
