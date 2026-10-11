<?php
    if(isset($_POST["keycheck-submit"])) {
        $checking = ord(substr($_POST['checking'], 0, 1)) - ord('0');
        $key = substr($_POST['checking'], 3, strlen($_POST['checking']) - 3);
        $guess = strtoupper($_POST['guess']);

        if(($checking == 1 && $guess == "HOCKEYNOAH") || ($checking == 2 && $guess == "CRYPTOGRAPHY") ||
           ($checking == 3 && $guess == "") || ($checking == 4 && $guess == "")) {
            header("Location: ../../cameroah/mystery?key=$key&check=correct#keyguess");
        }
        else {
            header("Location: ../../cameroah/mystery?key=$key&check=incorrect#keyguess");
        }
    }
    else {
        header("Location: ../../cameroah/mystery");
    }