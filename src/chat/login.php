<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php";?>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="wrapper bg-white max-w-2xl w-full rounded p-8 shadow">
        <section class="form login">
            <header class="text-2xl font-semibold mb-6">GP-EDMS Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="field input">
                    <label class="block mb-2">Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required
                        class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="field input mt-4">
                    <label class="block mb-2">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required
                        class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button mt-4">
                    <input type="submit" name="submit" value="Continue to Chat"
                        class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 cursor-pointer">
                </div>
            </form>
            <div class="link mt-4">Not yet signed up? <a href="index.php" class="text-blue-500">Signup now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>
