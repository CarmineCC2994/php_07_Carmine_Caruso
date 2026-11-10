<?php

$pwd = readline("Insert password: \n");

function check_lenght($stringa) {
if (strlen($stringa) >= 8) {
return true;
} else {
echo "The password must contain at least 8 characters.\n";
return false;
}
}

$check_lenght = check_lenght($pwd);




function check_number($stringa) {
    for ($i = 0; $i < strlen($stringa); $i++) {
        if (is_numeric($stringa[$i])) {
            return true;
        }
    }

    echo "Must contain at least one number.\n";
    return false;
}

$check_number = check_number($pwd);

function check_special($stringa){
$special_chars = ["!", "@", "*", "#","$", "£","?"];
for($i = 0; $i < strlen($stringa); $i++){
    if(in_array($stringa[$i], $special_chars)){
        return true;
    }
}
echo"Must contain at least one special character. \n";
return false;

}

$check_special = check_special ($pwd);


function check_uppercase($stringa){
for($i = 0; $i < strlen($stringa); $i++){
if(ctype_upper($stringa[$i])){

return true;
}

}
echo "Must contain at least one uppercase letter. \n";
return false;

}

$check_uppercase= check_uppercase($pwd);


function check_password($step1, $step2, $step3, $step4) {

    if ($step1 && $step2 && $step3 && $step4) {
        echo "Password accepted!\n";
        return true;
    } else {
        echo "Password not accepted. Try again!\n";
        return false;
    }
}

check_password($check_lenght, $check_number, $check_special, $check_uppercase);

do {

    $pwd = readline("Insert password: \n");

    $check_lenght = check_lenght($pwd);
    $check_number = check_number($pwd);
    $check_special = check_special($pwd);
    $check_uppercase = check_uppercase($pwd);

    $result = check_password(
        $check_lenght,
        $check_number,
        $check_special,
        $check_uppercase
    );

} while (!$result);

echo "Access granted!\n";






?>

