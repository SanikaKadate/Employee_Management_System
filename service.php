<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management Services</title>
    <style>
        /* Basic inline styles for simplicity */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        h1, h2 {
            color: #2c3e50;
        }

        .services {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .service-card {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .service-card h3 {
            color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>

<body>
    <header>
        <h1 style="color:white;">Employee Management Services</h1>
        <p>Your solution for streamlined workforce management</p>
    </header>

    <div class="container">
        <h2>Our Services</h2>
        <p>We offer a range of services to help you manage your workforce efficiently and effectively:</p>

        <div class="services">
			<div class="service-card">
				<h3>Employee Onboarding</h3>
				<p>Streamline the employee onboarding process with automated forms, task management, and welcome messages.</p>
			</div>
			
            <div class="service-card">
                <h3>Employee Data Management</h3>
                <p>Store and organize employee information in one central, secure location. Easy access to records, profiles, and documents.</p>
            </div>

            <div class="service-card">
                <h3>Payroll Management</h3>
                <p>Automate payroll processing and ensure compliance with tax laws and company policies. Secure and accurate salary distribution.</p>
            </div>

            <div class="service-card">
                <h3>Performance Tracking</h3>
                <p>Track and evaluate employee performance with custom reports, feedback, and goal-setting tools to foster growth and development.</p>
            </div>

            <div class="service-card">
                <h3>Attendance and Leave Management</h3>
                <p>Monitor employee attendance, vacation, and sick leave using automated systems that integrate with payroll processing.</p>
            </div>
			
			<div class="service-card">
                <h3>Time Tracking</h3>
				<p>Monitor employee working hours, attendance, and clock-in/out data for accurate payroll calculation.</p>
            </div>

            <div class="service-card">
                <h3>Recruitment Tools</h3>
                <p>Streamline the hiring process with recruitment management tools. From job posting to interview scheduling and candidate tracking.</p>
            </div>

            <div class="service-card">
                <h3>Employee Benefits Administration</h3>
                <p>Manage employee benefits, including health insurance, retirement plans, and more, with automated systems to ensure timely enrollment.</p>
            </div>
			
			<div class="service-card">
                <h3>Reports & Analytics</h3>
				<p>Generate custom reports to analyze employee performance, payroll data, and other critical metrics.</p>
            </div>
        </div>
    </div>
</body>

</html>