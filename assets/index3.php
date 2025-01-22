<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <style>
        /* Reset some basic styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            transition: transform 0.3s ease;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 28px;
            font-size: 1.5em;
            margin-left: 7px;
            margin-top: 8px;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 1.3em;
            margin-left: 42px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        /* Main content area */
        .main-content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s ease;
        }

        .main-content .top-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .main-content h1 {
            margin: 20px 0;
            font-size: 1.8em;
            color: #333;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Grid layout for the dashboard */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* Responsive adjustments */
        @media (max-width: 1000px) {
            .dashboard-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                transform: translateY(-100%);
                position: fixed;
                z-index: 10;
            }

            .sidebar.show {
                transform: translateY(0);
            }

            .main-content {
                margin-left: 0;
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Menu toggle button for mobile */
        .menu-toggle {
            font-size: 1.5em;
            cursor: pointer;
            display: none;
        }

        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
                color: #333;
            }
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <h2>Dashboard</h2>
     <span class="menu-toggle" style="color: white;" onclick="toggleSidebar()">X</span>
     <a href="dream1.php" target="iframe_a">Customers</a>
    <a href="dream2.php" target="iframe_a">Applicants</a>
    <a href="dream3.php" target="iframe_a">Create new Page</a>
</div>

<!-- Main content -->
<div class="main-content">
    <!-- Top navbar -->
    <div class="top-nav" style="position: fixed;width: 100%;margin-top:0;height: 100px;margin-bottom: 30px;">
        <span class="menu-toggle" onclick="toggleSidebar()">☰</span>
        <h2>Welcome to Dashboard</h2>
    </div>

  <div class="column" style="height: 100%;width: 100%;margin-top: 130px;">
<iframe name="iframe_a" height="100%" width="100%" style="border:none;" title="Iframe A"></iframe>
  </div>
</div>

<!-- JavaScript to toggle sidebar on mobile -->
<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("show");
    }
</script>

</body>
</html>
