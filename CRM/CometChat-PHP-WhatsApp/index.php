<?php
// register
if (isset($_GET['register'])) {
    $phone = $_GET['phone'];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api-us.cometchat.io/v2.0/users",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{\"uid\":\"$phone\",\"name\":\"$phone\"}",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Content-Type: application/json",
            "apiKey: 159c868346b15e8d6b624f3630db63e8f49b94c3",
            "appId: 21358638cfe964b8",
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo '<script type="text/javascript">login(' . $phone . ');</script>';
    }
}



if (isset($_GET['login'])) {
    $phone = $_GET['phone'];

    echo '<script type="text/javascript">login(' . $phone . ');</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CometChat WhatsApp</title>
    <link rel="stylesheet" href="style.css">
    <!-- cometchat -->
    <script
        type="text/javascript"
        src="https://unpkg.com/@cometchat-pro/chat@2.3.1/CometChat.js"
    ></script>

    <script
        defer
        src="https://widget-js.cometchat.io/v2/cometchatwidget.js"
    ></script>
</head>
<body>
<h2>Welcome to CometChat WhatsApp</h2>
<!-- authentication section -->
<main id="auth_section">
    <!-- registration -->
    <section>
        <form action="index.php" method="get">
            <legend>Register</legend>
            <!-- phone -->
            <label>Phone Number</label> <br />
            <input
                type="tel"
                required
                name="phone"
                value=""
            />
            <br />
            <button type="submit" name="register">Register</button>
        </form>
    </section>

    <!-- login -->
    <section>
        <form action="index.php" method="get">
            <legend>Login</legend>
            <label>Phone Number</label> <br />
            <input
                type="text"
                required
                name="phone"
                value=""
            />
            <br />
            <button type="submit" name="login">Login</button>
        </form>
    </section>
</main>

<!-- chat section -->
<main id="chat_section" style="display: none">
    <section>
        <!-- logout -->
        <button onclick="logout();">Logout</button>

        <!-- add friend -->
        <form method="post">
            <input
                type="tel"
                required
                name="friend_phone"
            />
            <button type="submit" name="add_friend">Add Friend</button>
        </form>
    </section>

    <div id="cometchat"></div>
</main>

<!-- jQuery -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<script src="init.js"></script>
<script src="functions.js"></script>
</body>
</html><?php
