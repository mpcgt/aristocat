<?php
require('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    
    <h1>Bienvenue !</h1>

    <div id="g_id_onload"
     data-client_id="100398336398-1lji2ljkosj90fp5q5f0q24avv9632ck.apps.googleusercontent.com"
     data-context="signin"
     data-ux_mode="popup"
     data-login_uri="https://aristocat.gitlab.io/login.php"
     data-auto_prompt="false">
</div>

<div class="g_id_signin"
     data-type="standard"
     data-shape="rectangular"
     data-theme="filled_blue"
     data-text="signin_with"
     data-size="large"
     data-logo_alignment="left">
</div>

    <script src="https://accounts.google.com/gsi/client" 
    async></script>

</body>
</html>