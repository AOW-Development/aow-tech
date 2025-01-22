<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants Details Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style type="text/css">
    /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body styling */
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

/* Main content styling */
.main-content {
    margin-left: 250px;
    padding: 20px;
    width: 100%;
}

/* Table Section */
.user-table table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.user-table th, .user-table td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.user-table th {
    background-color: #f4f4f4;
    color: #333;
}

.user-table tr:hover {
    background-color: #f9f9f9;
}

/* Status styling */
.status {
    padding: 5px 10px;
    border-radius: 4px;
    font-weight: bold;
}

.status.active {
    background-color: #4caf50;
    color: white;
}

.status.inactive {
    background-color: #f44336;
    color: white;
}

/* Button Styling */
.btn-edit {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    cursor: pointer;
}

.btn-edit:hover {
    background-color: #45a049;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
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

    .user-table table {
        font-size: 14px;
    }
}

</style>
<body>
 <section class="user-table">
            <table>
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Resume</th>
                         <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
<?php
require 'dbcredentials.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();

    $qry="SELECT * FROM `jobdata` ORDER BY `id` DESC";
   $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo '
                    <tr>
                        <td>'.$row["id"].'</td>
                      <td>  <embed class="pdf" 
               src=
"../uploads/'.$row["ref"].'"
            width="800" height="500"></td>
                        <td>'.$row["name"].'</td>
                        <td>'.$row["mail"].'</td>
                        <td>'.$row["phone"].'</td>
                        <td>'.$row["message"].'</td>
                         <td>'.$row["date"].'</td>
                    </tr> <br>                 
                ';
}}
?>
</tbody>
            </table>
        </section>
    </div>
</body>
</html>
