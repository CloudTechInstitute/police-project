<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: login.html");
    exit(); // Always exit after redirection
}
?>
<?php include_once "header.php";?>
<body class="bg-gray-100">
    <div class="wrapper">
        <section class="chat-area">
            <header class="flex items-center justify-start p-4">
                <?php
if (isset($_GET['user_id'])) {
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
    if ($sql && mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    } else {
        header("location: users.php");
        exit(); // Always exit after redirection
    }
} else {
    header("location: users.php");
    exit(); // Always exit after redirection
}
?>
                <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                <img src="../images/<?php echo $row['file']; ?>" alt=""
                    class="w-10 h-10 rounded-full object-cover ml-4">
                <div class="details">
                    <span class="text-lg font-semibold"><?php echo $row['firstname'] . " " . $row['lastname'] ?></span>
                    <p class="text-gray-500 text-xs"><?php echo $row['status']; ?></p>
                </div>
            </header>
            <div class="chat-box"></div>
            <form action="#" class="typing-area p-4">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                <input type="text" name="message" class="input-field border border-gray-300 px-3 py-2 rounded focus:outline-none focus:border-blue-500" placeholder="Type a message here..." autocomplete="off">
                <button class="ml-2"><i class="fab fa-telegram-plane"></i></button>
            </form>
        </section>
    </div>

    <script src="javascript/chat.js"></script>
</body>
</html>
