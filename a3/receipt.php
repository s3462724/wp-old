<?php
include('post-validation.php');
if (!isset($_SESSION['book'])) {
    //header("location: index.php");
} else {
    $book = array(
        array(date("Y/m/d"),
            $_SESSION['book']['user']['name'], $_SESSION['book']['user']['email'], $_SESSION['book']['user']['mobile'],
            $_SESSION['book']['movie'], $_SESSION['book']['day'], $_SESSION['book']['time'],
            $_SESSION['book']['seats']['STA'], $_SESSION['book']['seats']['STP'], $_SESSION['book']['seats']['STC'], $_SESSION['book']['seats']['FCA'], $_SESSION['book']['seats']['FCP'], $_SESSION['book']['seats']['FCC'],
            $_SESSION['book']['total']
        )
    );

    if (!file_exists("bookings.csv")) {
        $file = fopen("bookings.csv", "a");

        $header = array(
            array("Date", "Name", "Email", "Mobile", "MovieID", "Day", "Hour", "STA Qty", "STP Qty", "STC Qty", "FCA Qty", "FCP Qty", "FCC Qty", "Total"));
        foreach ($header as $line) {
            //fputcsv(file, fields, separator, enclosure, escape)
            fputcsv($file, $line);
        }

        foreach ($book as $line) {
            //fputcsv(file, fields, separator, enclosure, escape)
            fputcsv($file, $line);
        }

        fclose($file);
    } else {
        $file = fopen("bookings.csv", "a");
        foreach ($book as $line) {
            //fputcsv(file, fields, separator, enclosure, escape)
            fputcsv($file, $line);
        }
        fclose($file);
    }
    ?>

    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Assignment 4</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
        <script src='../wireframe.js'></script>


    </head>

    <body>
    <div id="invoice">

        <center id="top">
            <div class="info">
                <h1>Lunardo Cinema</h1>
            </div><!--End Info-->
        </center><!--End InvoiceTop-->

        <div id="mid">
            <div class="info">
                <p>
                    Address : 22 Boardway Drive, Melbourne 3000 </br>
                    Email : Lunardo_cinema@gmail.com</br>
                    Phone : (03)583-94-933</br>
                    ABN number : 00 123 456 789 </br>
                </p>
            </div>
        </div><!--End Invoice Mid-->

        <div id="bot">

            <div id="table">
                <h3>Customer Details</h3>
                <table style="text-align: center; margin-left:10%; margin-right:10%; width: 80%;" ;>
                    <tr class="tabletitle">
                        <td class="item"><h5>Customer Name</h5></td>
                        <td class="Hours"><h5>Customer Email</h5></td>
                        <td class="Rate"><h5>Contact NO</h5></td>
                    </tr>
                    <tr>
                        <td class="tableitem"><h6><?php echo($_SESSION['book']['user']['name']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['user']['email']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['user']['mobile']); ?></h6></td>
                    </tr>
                </table>
            </div><!--End Table-->

            <div id="table">
                <h3>Film Details </h3>
                <table style="text-align: center; margin-left:10%; margin-right:10%; width: 80%;" ;>
                    <tr class="tabletitle">
                        <td class="Hours"><h5>Film Name</h5></td>
                        <td class="Hours"><h5>Date</h5></td>
                        <td class="Hours"><h5>Hour</h5></td>
                    </tr>
                    <tr>
                        <td><h6><?php echo($_SESSION['book']['movie']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['day']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['time']); ?></h6></td>
                    </tr>
                </table>
            </div><!--End Table-->

            <div id="table">
                <h3>Seat Details </h3>
                <table style="text-align: center; margin-left:10%; margin-right:10%; width: 80%;" ;>
                    <tr class="tabletitle">
                        <td class="Hours" colspan="3"><h5>Standard</h5></td>
                        <td class="Hours" colspan="3"><h5>First</h5></td>
                    </tr>
                    <tr>
                        <td class="Hours"><h5>STA Qty</h5></td>
                        <td class="Hours"><h5>STP Qty</h5></td>
                        <td class="Hours"><h5>STC Qty</h5></td>
                        <td class="Hours"><h5>FCA Qty</h5></td>
                        <td class="Hours"><h5>FCP Qty</h5></td>
                        <td class="Hours"><h5>FCC Qty</h5></td>
                    </tr>
                    <tr>
                        <td><h6><?php echo($_SESSION['book']['seats']['STA']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['seats']['STP']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['seats']['STC']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['seats']['FCA']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['seats']['FCP']); ?></h6></td>
                        <td><h6><?php echo($_SESSION['book']['seats']['FCC']); ?></h6></td>
                    </tr>
                </table>
            </div><!--End Table-->

            <div id="table">
                <h3>Payments</h3>
                <table style="text-align: center; margin-left:10%; margin-right:10%; width: 80%;" ;>
                    <tr>
                        <td><h5>Total Payment</h6></td>
                        <td><h6><?php echo($_SESSION['book']['total']); ?></h6></td>
                    </tr>
                </table>
            </div><!--End Table-->

            <div id="legalcopy">
                <p class="legal"><strong>Thank you for your business!<br></strong>  Payment is expected within 31 days;
                    please process this invoice within that time. There will be a 5% interest charge per month on late
                    invoices.
                </p>
            </div>

        </div><!--End InvoiceBot-->
    </div><!--End Invoice-->

    <div id="p">
        <script>
            function doprint() {
                window.print();
                //Confirm("Print");
                window.location = "index.php";
            }

            function exit() {
                window.location = "index.php";
            }
        </script>

        <button onclick="doprint()">Print</button>
        <button onclick="exit()">Exit</button>
    </div>
    </body>
    </html>

    <?php
    unset($_POST);
// remove all session variables
    session_unset();

// destroy the session
    session_destroy();


}
?>