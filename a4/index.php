<?php include('tools.php'); ?>
<!DOCTYPE html>
<head>
    <link rel='stylesheet' href='style.css' type='text/css'/>
    <link rel='stylesheet' href='flip.css' type='text/css'/>
    <link rel='stylesheet' href='responsive.css' type='text/css'/>
    <script>

    </script>
    <noscript> ... helpful message for those without javascript enabled ...</noscript>
</head>
<body>
<header>
    <img src=media/lunardo-logo.png>
    <h1>Lunardo</h1>
</header>
<div class=topnav>
        <a class="active" href=seat-prices.html>Seat Prices</a>
        <a href=weekly-session-times.html>Weekly Session Times</a>
        <a href=about-us.html>About Us</a>
</div>
<main>
    <section>
        <h2>About Us</h2>
        <p>- The cinema has reopened after extensive improvements and renovations.</p>
        <p>- There are new seats: standard seats and reclinable first class seats.</p>
        <p>- The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound.</p>
        <p>- See <a href="https://www.dolby.com/us/en/cinema">https://www.dolby.com/us/en/cinema</a> for more
            information.</p>
    </section>
    <section>
        <h2>Seats and Prices</h2>

        <img src=media/Profern-Standard-Twin.png>
        <p>Standard Seats</p>
        <img src=media/Profern-Verona-Twin.png>
        <p>First Class Seats</p>

        <p>Seat Prices</p>
        <table>
            <tr>
                <th>Seat Type</th>
                <th>Seat Code</th>
                <th>Discounted Prices</th>
                <th>Normal Prices</th>
            </tr>
            <tr>
                <td>Standard Adult</td>
                <td>STA</td>
                <td>15.00</td>
                <td>20.50</td>
            </tr>
            <tr>
                <td>Standard Concession</td>
                <td>STP</td>
                <td>13.50</td>
                <td>18.00</td>
            </tr>
            <tr>
                <td>Standard Child</td>
                <td>STC</td>
                <td>12.00</td>
                <td>16.50</td>
            </tr>
            <tr>
                <td>First Class Adult</td>
                <td>FCA</td>
                <td>24.00</td>
                <td>30.00</td>
            </tr>
            <tr>
                <td>First Class Concession</td>
                <td>FCP</td>
                <td>22.50</td>
                <td>27.00</td>
            </tr>
            <tr>
                <td>First Class Child</td>
                <td>FCC</td>
                <td>21.00</td>
                <td>24.00</td>
            </tr>
        </table>
    </section>
    <section>
        <h2>Now Showing</h2>
        <div id='now-showing'>
            <?php
            foreach($movies as $x => $m) {
                echo("<div class='card3D'>");
                echo('<div><img width="160" height="270" src=' .$m["image"] . '>
                        <h2>' . $m["name"] . '</h2>
                        </div>');
                echo('<div>
                        <p>' . $m["details"] . '</p>');

                foreach ($m["times"] as $t) {
                    echo('<p>' . $t . '</p>');
                }
                echo('<button type="button" onclick=""><a href="booking.php?movie=' . $m["code"] . '">Book Now</a></button>
                        </div>');
                echo('</div>');
            }
            ?>
        </div>

    </section>
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
       <input type="submit" value="Submit">
       <input type="submit" value="Submit" href="currentbookings.php">
    </footer>
</main>
</body>
</html>
