<?php
if (isset($_POST["login"])){


    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($koneksi, "SELECT*FROM user WHERE
        username = '$username'");

    //cek username
    if (mysqli_num_rows($result)===1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password,$row["password"])){
            header ("Location ; index.php");
            exit;
        }
    }

    $error = true;
}

?>



<html data-wf-domain="pepper-webflow-ecommerce-template.webflow.io" data-wf-page="635f628bf1c7258a2e84e36c"
    data-wf-site="635f628bf1c725f2f584e359" class=" w-mod-js w-mod-ix">

<head>
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <link
        href="https://assets.website-files.com/635f628bf1c725f2f584e359/css/pepper-webflow-ecommerce-template.webflow.5e199ba43.css"
        rel="stylesheet" type="text/css">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="https://assets.website-files.com/635f628bf1c725f2f584e359/635f628bf1c7251fe084e374_fav.svg"
        rel="shortcut icon" type="image/x-icon">
    <style>
        {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <script type="text/javascript">
        window.__WEBFLOW_CURRENCY_SETTINGS = {
            "currencyCode": "USD",
            "$init": true,
            "symbol": "$",
            "decimal": ".",
            "fractionDigits": 2,
            "group": ",",
            "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
            "hideDecimalForWholeNumbers": false
        };
    </script>
</head>

<body class="bg-dark" style="background-image: url(https://i.pinimg.com/564x/cf/ba/5d/cfba5d78a3f98961465009102f9f9664.jpg);">
    <!-- <img src="https://i.pinimg.com/564x/cf/ba/5d/cfba5d78a3f98961465009102f9f9664.jpg" alt="" style=""> -->
    <?php if (isset ($error)):?>
        <p style="color:red ; font-style;italic;">username/password salah</p>
    <?php endif; ?>
    
    <div class="page-wrapper overflow-hidden">
        <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
            role="banner" class="navbar w-nav">
            <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
        </div>
        <main class="main-wrapper">
            <div class="signup-main-section">
                <div class="wrapper-1080px">
                    <div class="sign-main-wrapper">
                        <div class="signup-form-main-block" >
                            <div class="signup-form-block w-form">
                            <center><h2>Login</h2></center>
                            <hr>
                                <form id="Username-form" name="Username-form" data-name="Username Form" method="POST" action = "fungsilogin.php"
                                    class="signup-form" aria-label="Username Form">
                                    <div class="form-field-block _100">
                                        <label for="email" class="text-label dark">Username*</label>
                                        <input type="text" class="form-input alter w-input" maxlength="256" name="username" placeholder="Enter your username" required>
                                    </div>
                                    <div class="form-field-block _100"><label for="Password"
                                            class="text-label dark">Password*</label><input type="password"
                                            class="form-input alter w-input" maxlength="256" name="password"
                                            data-name="Password" placeholder="Enter your password" id="Password"
                                            required>
                                    </div><input type="submit" value="Continue" data-wait="Please wait..."
                                        class="main-button w-button">
                                </form>
                            </div>
                        </div>
                        <div class="signup-text">Don't have an account? <a href="register.php" class="signup-link">Sign
                                up</a></div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=635f628bf1c725f2f584e359"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <!-- <script src="https://assets.website-files.com/635f628bf1c725f2f584e359/js/webflow.119d423e1.js"
        type="text/javascript"></script> -->
</body>

</html>