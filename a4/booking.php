<?php
include('tools.php');
include('post-validation.php');
$movie = $movies[$_GET['movie']];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
    <script src="script.js" language="JavaScript"></script>
</head>

<f>
    <h1><?php echo($movie['name']); ?></h1>
    <iframe width="560" height="315" src="<?php echo($movie['trailer']); ?>" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    <h3>Director : <?php echo($movie['director']); ?> </h3>
    <h4> Actors: </h4>
    <?php
    foreach ($movie["actors"] as $a) {
        echo('<p>' . $a . '</p>');
    }
    ?>


    <h2> Add Booking Details</h2>
    <form name="booking"  action="receipt.php" onsubmit="return validateForm();" method="post">
        <input name="movie" value="<?php echo($movie['code']); ?>" hidden>
        <label for="STA">Standard Adult Seats:</label>
        <select id="seats[STA]" name="seats[STA]" data-fullprice="20.5" data-discprice="15">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <label for="STP">Standard Concession Seats:</label>
        <select id="seats[STP]" name="seats[STP]" data-fullprice="18" data-discprice="13.5">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <label for="STC">Standard Child Seats:</label>
        <select id="seats[STC]" name="seats[STC]" data-fullprice="16.5" data-discprice="12">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <label for="FCA">First Class Adult Seats:</label>
        <select id="seats[FCA]" name="seats[FCA]" data-fullprice="30" data-discprice="24">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <label for="FCP">First Class Concession Seats:</label>
        </select>
        <br>
        <select id="seats[FCP]" name="seats[FCP]" data-fullprice="27" data-discprice="22.5">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <label for="FCC">First Class Child Seats:</label>
        <select id="seats[FCC]" name="seats[FCC]" data-fullprice="24" data-discprice="21">
            <option value="" selected>Please select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <br>
        <?php
        $showing_times = $movie['times'];
        foreach ($showing_times as $st) {
            $day = explode( ':',$st)[0];
            $time = explode(':', $st)[1];

            if ($day == "Mon") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="monday">Monday  '.$time.'</label><br>';
            }
            else if ($day == "Tue") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="tuesday">Tuesday  '.$time.'</label><br>';
            }
            else if ($day == "Wed") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="wednesday">Wednesday  '.$time.'</label><br>';
            }
            else if ($day == "Thu") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="thursday">Thursday  '.$time.'</label><br>';
            }
            else if ($day == "Fri") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="friday">Friday  '.$time.'</label><br>';
            }
            else if ($day == "Sat") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="saturday">Saturday  '.$time.'</label><br>';
            }
            else if ($day =="Sun") {
                if (strpos($time, "12") !== false) {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="disc">';
                } else {
                    echo '<input type="radio" id="'.$day.'" name="day" value="'.strtoupper($day).'" time = "'.$time.'" data-pricing="full">';
                }
                echo '<label for="sunday">Sunday  '.$time.'</label><br>';
            }
        }
        ?>
        <input type="text" id="time" name="time" hidden>

        <label for="name">Name:</label>
        <input type="text" id="name" name="user[name]" pattern="[a-z]{1,15}" placeholder="Name"><br><br>
        <label for="name">Email:</label>
        <input type="email" id="email" name="user[email]" ><br><br>
        <label for="name">Mobile:</label>
        <input type="text" id="mobile" name="user[mobile]" pattern="[0-9]{10}" placeholder="0774215263"><br><br>
        <input type="text" id="total" name="total" hidden>
        <input type="submit" value="Submit" name="submit">
        //Remember me and forget me buttons for appending and removing remembered name, mobile and email details on localStorage array.
        <button type"button" onclick>Remember Me</button>
        <button type"button">Forget Me</button>
        <div id="error"></div>
    </form>
    </body>
    <script>
  
    //Initialise localStorage array.
    remember = array("Name", "Mobile", "Email")
    );
  
    //Check for name and email combination match for valid bookings in .csv file.
    else {
        var count = 0;
        var found = false;
        var file = fopen("bookings.csv", "a");
        foreach (book as line) {
            //fputcsv(file, fields, separator, enclosure, escape)
            fputcsv(file, line);
            if (name == header[count][1] && email == header[count][2]) {
               found = true;
            }
            count++;
        }
        if (found == false) {
           Sorry, no bookings found under your name and email combination specified.
        }
        
        fclose($file);
    }

    </script>
    <footer>
       <p>Jordan Kerever - s3462724 - Group B (Sama). My github repo: <a href="https://github.com/jordan3462724/wp">https://github.com/jordan3462724/wp</a></p>
       //Find your bookings here by entering your name and email below:
       <p>Find your bookings here by entering your name and email below:</p>
       <input type="text" id="name" name="user[name]"><br><br>
       <label for="name">Full name:</label>
       <span class='error' id='nameError'></span>
       <input type="text" id="email" name="user[email]"><br><br>
       <label for="email">Email:</label>
       <span class='error' id='emailError'></span>
       <input type="submit" value="Submit" href="currentbookings.php">
</footer>
</html>

