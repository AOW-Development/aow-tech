<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: 'Arial', sans-serif;
    display: flex;
    height: 100vh;
}

/* Sidebar Styling */
.sidebar {
    width: 250px;
    background-color: #333;
    color: white;
    display: flex;
    flex-direction: column;
    padding-top: 30px;
    position: fixed;
    height: 100%;
}

.sidebar .logo {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
}

.sidebar .nav-links {
    list-style-type: none;
    padding: 0;
}

.sidebar .nav-links li {
    padding: 15px;
    text-align: center;
}

.sidebar .nav-links li a {
    color: white;
    text-decoration: none;
    display: block;
    font-size: 18px;
}

.sidebar .nav-links li:hover {
    background-color: #555;
}

/* Main Content Styling */
.main-content {
    margin-left: 250px;
    padding: 20px;
    width: 100%;
}

/* Header Styling */
header {
    margin-bottom: 20px;
}

header h1 {
    font-size: 28px;
}

/* Stats Section */
.stats {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}

.card {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 8px;
    flex: 1;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.card h2 {
    font-size: 22px;
    margin-bottom: 10px;
}

.card p {
    font-size: 24px;
    font-weight: bold;
}

/* Recent Activity Section */
.recent-activity {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.recent-activity h2 {
    margin-bottom: 15px;
    font-size: 24px;
}

.recent-activity ul {
    list-style-type: none;
    padding-left: 0;
}

.recent-activity ul li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
    }

    .stats {
        flex-direction: column;
    }

    .stats .card {
        margin-bottom: 20px;
    }
}

@media (max-width: 480px) {
    .sidebar {
        width: 100%;
        height: auto;
        padding-top: 10px;
    }

    .main-content {
        margin-left: 0;
    }

    .stats {
        flex-direction: column;
    }

    .stats .card {
        margin-bottom: 15px;
    }
}
.column {
  float: left;
height: 100%;
 /* Should be removed. Only for demonstration */
}
.loader {
    position: fixed;
    top: 30%;
    left: 49%;
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid blue;
  border-right: 8px solid green;
  border-bottom: 8px solid red;
  border-left: 8px solid pink;
  width: 30px;
  height: 30px;
  z-index: 9999;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">Dashboard</div>
        <ul class="nav-links">
            <li><a href="">Dashboard</a></li>
            <li><a href="dream1.php" target="iframe_a">Customers</a></li>
            <li><a href="dream2.php" target="iframe_a">Applicants</a></li>
        </ul>
    </div>
    <!-- Main content -->
    <div class="main-content">
        <header style="position: fixed;width: 100%;margin-top:0;height: 100px;margin-bottom: 30px;background-color: white;">
            <h1>Welcome to Your Dashboard</h1>
        </header>
        <div class="column" style="height: 100%;width: 100%;margin-top: 130px;">
<iframe name="iframe_a" height="100%" width="100%" style="border:none;" title="Iframe A"></iframe>
  </div>
    </div>
</body>
</html>
