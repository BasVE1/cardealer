<?php

$discord_url = "https://discord.com/api/oauth2/authorize?client_id=1047866176602116156&redirect_uri=http%3A%2F%2Flocalhost%2Fcardealer%2Fincludes%2Fprocess-oauth.php&response_type=code&scope=identify%20guilds";
header("Location: $discord_url");
exit();