<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>
<?php include_once "header.php";?>
<body class="bg-gray-100">
    <div class="wrapper">
        <section class="users p-8">
            <header class="flex justify-between items-center mb-6">
                <div class="content flex items-center">
                    <?php
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
?>
                    <img src="../images/<?php echo $row['file']; ?>" alt=""
                        class="w-10 h-10 rounded-full object-cover mr-4">
                    <div class="details">
                        <span class="text-lg font-semibold"><?php echo $row['firstname'] . " " . $row['lastname'] ?></span>
                        <p class="text-gray-500 text-xs"><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="../dashboard.php"
                    class="logout bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-600 text-uppercase">Dashboard</a>
            </header>
            <div class="search flex items-center mb-4">
                <span class="text-gray-400 mx-4">Click on the icon to search user...</span>
                <input type="text" placeholder="Enter name to search..."
                    class="border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500 ml-2">
                <button class="ml-2"><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>

    <script src="javascript/users.js"></script>
</body>
</html>
