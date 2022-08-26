<?php
session_start();
$movies = array(
    "ACT" => array("code" => "ACT", "image" => "media/prithviraj-poster.jpg", "name" => "Top Gun: Maverick - M",
        "details" => "After more than thirty years of service as one of the Navy's top aviators, 
    Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in 
    rank that would ground him.",
        "times" => array("Mon: 9pm", "Tue: 9pm", "Wed: 9pm", "Thu: 9pm", "Fri: 9pm", "Sat: 6pm", "Sun: 6pm"), "director" => "Joseph Kosinski",
        "actors" => array("Tom Cruise", "Val Kilmer", "Miles Teller"),
        "trailer" => "https://www.youtube.com/embed/giXco2jaZ_4"),

    "RMC" => array("code" => "RMC", "image" => "media/mrs-harris-goes-to-paris-poster.jpg", "name" => "Mrs. Harris Goes to Paris - PG",
        "details" => "A widowed cleaning lady in 1950s London falls madly in love with a couture
     Dior dress, and decides that she must have one of her own.",
        "times" => array("Wed: 12pm", "Thu: 12pm", "Fri: 12pm", "Sat: 3pm", "Sun: 3pm"), "director" => "Anthony Fabian",
        "actors" => array("Jason Isaacs", "Lesley Manville", "Alba Baptista"),
        "trailer" => "https://www.youtube.com/embed/iO9JcPbbmAA"),

    "FAM" => array("code" => "FAM", "image" => "media/lightyear-poster.jpg", "name" => "Lightyear - PG",
        "details" => "While spending years attempting to return home, marooned Space Ranger Buzz Lightyear 
    encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source.",
        "times" => array("Mon: 12pm","Tue: 12pm", "Wed: 6pm","Thu: 6pm", "Fri: 6pm", "Sat: 12pm", "Sun: 12pm"), "director" => "Jon Watts",
        "actors" => array("Tom Holland", "Zendaya", "Benedict Cumberbatch"),
        "trailer" => "https://www.youtube.com/embed/tEOlt3NpEvA"),

    "AHF" => array("code" => "AHF", "image" => "media/prithviraj-poster.jpg", "name" => "Prithviraj - M",
        "details" => "A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan.",
        "times" => array("Mon: 6pm","Tue: 6pm", "Sat: 9pm", "Sun: 9pm"), "director" => "Camille Griffin",
        "actors" => array("Keira Knightley", "Matthew Goode", "Roman Griffin Davis"),
        "trailer" => "https://www.youtube.com/embed/33-CQdPHyjw")
);
