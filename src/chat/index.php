<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: users.php");
}
?>

<?php include_once "header.php";?>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="wrapper bg-white max-w-2xl w-full rounded p-8 shadow">
        <section class="form signup">
            <header class="text-2xl font-semibold mb-6">Realtime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="field input">
                        <label class="block mb-2">First Name</label>
                        <input type="text" name="fname" placeholder="First name" required
                            class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="field input">
                        <label class="block mb-2">Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" required
                            class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    </div>
                </div>
                <div class="field input mt-4">
                    <label class="block mb-2">Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required
                        class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="field input mt-4">
                    <label class="block mb-2">Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required
                        class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image mt-4">
                    <label class="block mb-2">Select Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required
                        class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500">
                </div>
                <div class="field button mt-4">
                    <input type="submit" name="submit" value="Continue to Chat"
                        class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 cursor-pointer">
                </div>
            </form>
            <div class="link mt-4">Already signed up? <a href="login.php" class="text-blue-500">Login now</a></div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>
