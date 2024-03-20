<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: grey;
        }
        .employee-details {
            display: block;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .employee-details label {
            font-weight: bold;
            color: orange;
        }
        .employee-details span {
            font-weight: normal;
        }
        .company-details {
            margin-top: 20px;
        }
        .company-details p {
            margin-bottom: 10px;
        }
        .container {
            margin-top: 30px;
        }

        h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: grey;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1>Employee Details</h1>        
        <h2>Personal Details</h2>
        <div class="employee-details">
            <div>
                <label>Name:</label>
                <span>John Doe</span>
            </div>
            <div>
                <label>DOB:</label>
                <span>14 July 1994</span>
            </div>
            <div>
                <label>National ID No.:</label>
                <span>John Doe</span>
            </div>
            <div>
                <label>Employee ID:</label>
                <span>12345</span>
            </div>
        </div>
        <div class="employee-details">
            <div>
                <label>Email:</label>
                <span>john.doe@example.com</span>
            </div>
            <div>
                <label>Phone:</label>
                <span>(123) 456-7890</span>
            </div>
            <div>
                <label>Home Address:</label>
                <span>11 Boston Ave, Eastlea, Harare</span>
            </div>
        </div>        
        <h2>Company Details</h2>
        <div class="company-details">
            <p>Company: ABC Corporation</p>
            <p>Department: Marketing</p>
            <p>Position: Marketing Specialist</p>
            <p>Location: New York</p>
        </div>
    </div>
</body>
</html>
