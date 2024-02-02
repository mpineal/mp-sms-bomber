// script by mpineal

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];


    if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
        <div id="error" class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
    <?php } elseif (isset($_GET['ok']) && $_GET['ok'] == true) { ?>
        <div id="done" class="done">ارسال پیامک ها با موفقیت به اتمام رسید</div>
    <?php }
}
?>

<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
    <link href="assets/img/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
    <link href="assets/img/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>sms-bomber</title>
</head>
<body>
<form action="src.php" class="bomber-form" method="POST">
    <?php

    if (isset($_GET['number']) && $_GET['number'] == 0) { ?>
        <div id="error" class="error">!فرمت شماره وارد شده اشتباه می باشد</div>
    <?php } elseif (isset($_GET['ok']) && $_GET['ok'] == true) { ?>
        <div id="done" class="done">ارسال پیامک ها با موفقیت به اتمام رسید</div>
    <?php } ?>

    <div id="pending" class="pending">Sending (sms/call) 🔥</div>

    <h3>SMS Bomber💣</h3>
    <label for="phone">💯 every request sends 30 sms</label>
    <input id="phone" name="phone" placeholder="09XXXXXXXXX" type="text">
    <button name="submit">Send 🚀 </button>
    <a href="https://github.com/mpineal" target="_blank"><img alt="mpineal-Github" class="git"
                                                              src="assets/img/github.png"></a>
    <a href="https://instagram.com/sorenadelavar" target="_blank"><img alt="mpineal-instagram" class="ins"
                                                                       src="assets/img/instagram.png"></a>
</form>
<script>
    function sending() {
        if (document.getElementById('error') !== null) {
            let error = window.getComputedStyle(document.getElementById('error')).display
            if (error === 'block') {
                document.getElementById('error').style.display = 'none';
            }
        }

        if (document.getElementById('done') !== null) {
            let done = window.getComputedStyle(document.getElementById('done')).display
            if (done === 'block') {
                document.getElementById('done').style.display = 'none'
            }
        }

        document.getElementById("pending").style.display = "block";
    }
</script>
</body>
</html>
