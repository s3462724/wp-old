<?php
function check_movie_selected()
{
    if (!isset($_GET['movie'])) {
        header('location: index.php');
    }
}

function check_booking()
{
    include('tools.php');
    $movie_list  =  $movies;
    $error = 0;
    $error_str = "";
    //check movie code
    $codes = array("ACT", "RMC", "FAM", "AHF");
    if (isset($_POST['movie'])) {
        if (!in_array($_POST['movie'], $codes)) {
            $error++;
            $error_str = $error_str . " File code error";
        }
    } else {
        $error++;
        $error_str = $error_str . " File code not found";
    }

    // cannot select wrong movie time, since only relevant time displayed
    // But validated
    $movie = $movie_list[$_POST['movie']];
    $dayfound = 0;
    foreach ($movie['times'] as $time) {
        $day = explode( ':',$time)[0];
        $day =  strtoupper(trim($day));
        if ($day == $_POST['day']) {
            $dayfound++;
        }
    }
    if($dayfound == 0){
        $error++;
        $error_str = $error_str . " Wrong day selected";
    }

    if (isset($_POST['seats'])) {
        $seats = $_POST['seats'];
        if ($seats['STA'] >= 1 || $seats['STP'] >= 1 || $seats['STC'] >= 1 || $seats['FCA'] >= 1 || $seats['FCP'] >= 1 || $seats['FCC'] >= 1
            || $seats['STA'] == "" || $seats['STP'] == "" || $seats['STC'] == "" || $seats['FCA'] == "" || $seats['FCP'] == "" || $seats['FCC'] == "") {

        } else {
            $error++;
            $error_str = $error_str . " seat select not valid";
        }
    } else {
        $error++;
        $error_str = $error_str . " seat not selected";
    }

    if (isset($_POST['user'])) {
        $user = $_POST['user'];
        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            $error++;
            $error_str = $error_str . " Email not valid";
        }
//        if(!preg_match('/^[0-9]{10}/', $user['mobile'])){
//            $error++;
//            $error_str=$error_str. " phone not valid";
//        }
    } else {
        $error++;
        $error_str = $error_str . " User not set";
    }
    if (isset($_POST['day'])) {
        $day = $_POST['day'];
    } else {
        $error++;
        $error_str = $error_str . " day not selected";
    }


    if ($error > 0) {
        $_SESSION['error'] = $error_str;
        echo($error_str);
        echo($error);
        header('location: index.php');
    }
    else {
//        print_r($_POST);
        $_SESSION['book'] = $_POST;
    }


}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        check_booking();
    }
}
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    check_movie_selected();
}
