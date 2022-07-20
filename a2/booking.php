<html>

<head>
  <!-- <script type="text/javascript"></script> -->
  <script type="text/javascript">
    function displayDate() {
      document.getElementById("date").value = Date();
    }
  </script>


<script type="text/javascript">
window.onload = function(){
  let params = new URLSearchParams(window.location.search)
    params.has('movie')
  let movie = params.get('movie')
    console.log(movie)
console.log(movie)
  if (movie == "ACT") {
    let image = "top-gun-maverick-poster.jpg"
    let title = "Top Gun: Maverick - M"
    let synopsis = "After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would ground him."
    let director = "Joseph Kosinski"
    let starA = "Tom Cruise"
    let starB = "Jennifer Connolly"
    let starC = "Miles Teller"
    let timeSlotA = "Mon-Tue: 9pm"
    let timeSlotB = "Wed-Fri: 9pm"
    let timeSlotC = "Sat-Sun: 6pm"
    console.log(starA)
    document.getElementById("image").src = image;
    document.getElementById("title").innerHTML = title;
    document.getElementById("synopsis").innerHTML = synopsis;
    document.getElementById("director").innerHTML = director;
    document.getElementById("str1").innerHTML = starA;
    document.getElementById("str2").innerHTML = starB;
    document.getElementById("str3").innerHTML = starC;
    document.getElementById("ta").innerHTML = timeSlotA;
    document.getElementById("tb").innerHTML = timeSlotB;
    // SWISS MILITARY
  }
  if (movie == "RMC") {

    let image = "mrs-harris-goes-to-paris-poster.jpg"
    let title = "Mrs. Harris Goes to Paris - PG"
    let synopsis = "A widowed cleaning lady in 1950s London falls madly in love with a couture Dior dress, and decides that she must have one of her own."
    let director = "Anthony Fabian"
    let starA = "Jason Isaacs"
    let starB = "Lesley Manville"
    let starC = "Rose Williams"
    let timeSlotA = "Wed-Fri: 12pm"
    let timeSlotB = "Sat-Sun: 3pm"
    document.getElementById("image").src = image;
    document.getElementById("title").innerHTML = title;
    document.getElementById("synopsis").innerHTML = synopsis;
    document.getElementById("director").innerHTML = director;
    document.getElementById("str1").innerHTML = starA;
    document.getElementById("str2").innerHTML = starB;
    document.getElementById("str3").innerHTML = starC;
    document.getElementById("ta").innerHTML = timeSlotA;
    document.getElementById("tb").innerHTML = timeSlotB;
  }

  if (movie == "FAM") {

    let image = "lightyear-poster.jpg"
    let title = "Lightyear - PG"
    let synopsis = "While spending years attempting to return home, marooned Space Ranger Buzz Lightyear encounters an army of ruthless robots commanded by Zurg who are attempting to steal his fuel source."
    let director = "Angus MacLane Campaillette? c'est plus  c'est moins"
    let starA = "Chris Evans"
    let starB = "Keke Palmer"
    let starC = "Peter Sohn"
    let timeSlotA = "Mon-Tue: 12pm"
    let timeSlotB = "Wed-Fri: 6pm"
    let timeSlotC = "Sat-Sun: 12pm"
    document.getElementById("image").src = image;
    document.getElementById("title").innerHTML = title;
    document.getElementById("synopsis").innerHTML = synopsis;
    document.getElementById("director").innerHTML = director;
    document.getElementById("str1").innerHTML = starA;
    document.getElementById("str2").innerHTML = starB;
    document.getElementById("str3").innerHTML = starC;
    document.getElementById("ta").innerHTML = timeSlotA;
    document.getElementById("tb").innerHTML = timeSlotB;
  }

  if (movie == "AHF") {

    let image = "prithviraj-poster.jpg"
    let title = "Prithviraj - M Sylvester Stallone"
    let synopsis = "A fearless warrior. An epic love story. Witness the grand saga of Samrat Prithviraj Chauhan."
    let director = "Chandra Prakash Dwivedi"
    let starA = "Akshay Kumar"
    let starB = "Manushi Chhillar"
    let starC = "Sanjay Dutt"
    let timeSlotA = "Mon-Tue: 6pm"
    let timeSlotB = "Sat-Sun: 9pm"
    console.log(starA)
    document.getElementById("image").src = image;
    document.getElementById("title").innerHTML = title;
    document.getElementById("synopsis").innerHTML = synopsis;
    document.getElementById("director").innerHTML = director;
    document.getElementById("str1").innerHTML = starA;
    document.getElementById("str2").innerHTML = starB;
    document.getElementById("str3").innerHTML = starC;
    document.getElementById("ta").innerHTML = timeSlotA;
    document.getElementById("tb").innerHTML = timeSlotB;
    // Sat-Sun: 3pm
  }

  // This is where it all happens!
  function formValidate() {
    // clear all errors, even if it's the first run
    clearErrors();
    let countErrors = 0;
    // Is the name not blank?
    if (!nameCheck()) countErrors++;
    // Is the email not blank?
    if (!emailCheck()) countErrors++;
    // Is the mobile number not blank?
    if (!mobileCheck()) countErrors++;
    // Block or allow submission depending on number of errors
    console.log(countErrors);
    return (countErrors == 0);
  }


  function nameCheck() {
    let name = getid('name').value;
    let names = name.split(" ");
    if (names[0] == null) {
      getid('nameError').innerHTML = "<br>Sorry, name field must not be left blank!";
      getid('name').style.backgroundColor = '#fee';
      return false;
    }
    else {
      return true;
    }
  }

  function emailCheck() {
    let email = getid('email').value;
    let emails = email.split(" ");
    if (emails[0] == null) {
      getid('emailError').innerHTML = "<br>Sorry, email field must not be left blank!";
      getid('email').style.backgroundColor = '#fee';
      return false;
    }
    else {
      return true;
    }
  }
  function mobileCheck() {
    let mobile = getid('mobile').value;
    let mobiles = mobile.split(" ");
    if (mobiles[0] == null) {
      getid('mobileError').innerHTML = "<br>Sorry, mobile number field must not be left blank!";
      getid('mobile').style.backgroundColor = '#fee';
      return false;
    }
    else {
      return true;
    }
  }

  function calculatePrice() {
    let seat = document.getElementById('seat');
    let seatQty = parseInt(seat.value);
    let seatPrice = parseFloat(seat.dataset.seatprice);
    if (isNaN(numSeats)) {
      alert('You are a bad customer! Type numbers next time.');
      document.getElementById('seats').focus();
      document.getElementById('seats').select();
      return false;
    }
    if (isNaN(seatPrice)) {
      alert('You are a bad coder! Fix the seat price data attribute in the seat field.');
      return false;
    }
    let salePrice = seatPrice * seatQty;
    document.getElementById('price').innerHTML = salePrice.toFixed(2);
    return true;
  }
  }
</script>

</head>
<body>
      <div style="display: flex;">
        <img id='image' src='' width="450px"></img>
        <div style="margin: 10%;">
          <h2 id = 'title'></h2>
          <p id ='synopsis'></p>
    
          <div style="display: flex;">
            <p>Director : </p>
            <p id= 'director'></p>
          </div>
    
          <p>Starring:</p>
          <li id= 'str1'></li>
          <li id= 'str2'></li>
          <li id= 'str3'></li>
    
          <p id='ta'></p>
          <p id='tb'></p>  
        </div>
      </div>
</body>
<form method='post' action="/booking.php" onsubmit="return formValidate();">

  <!-- <label for="name">Name:</label>
  <input type="hidden" id="name" name="name"><br><br>
  <label for="code">Code:</label>
  <input type="hidden" id="movie" name="movie" value="movie"><br><br> -->
  <br><br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="code">Code:</label>
  <input type="text" id="code" name="code"><br><br>
  <!-- <label for="STA">Standard Adult Seats:</label>
  <select id="STA" name="seats[STA]" size='10'>
    <option value="" >Please select</option>
    <option value="1" >1</option>
    <option value="2" >2</option>
    <option value="3" >3</option>
    <option value="4" >4</option>
    <option value="5" >5</option>
    <option value="6" >6</option>
    <option value="7" >7</option>
    <option value="8" >8</option>
    <option value="9" >9</option>
    <option value="10" >10</option>
  </select> -->
  <!-- <br> -->
    <!-- <label for="STP">Standard Concession Seats:</label>
    <select id="STP" name="seats[STP]" size='10'>
      <option value="" >Please select</option>
      <option value="1" >1</option>
      <option value="2" >2</option>
      <option value="3" >3</option>
      <option value="4" >4</option>
      <option value="5" >5</option>
      <option value="6" >6</option>
      <option value="7" >7</option>
      <option value="8" >8</option>
      <option value="9" >9</option>
      <option value="10" >10</option>
    </select> -->
    <!-- <br>
      <label for="STC">Standard Child Seats:</label>
      <select id="STC" name="seats[STC]" size='10'>
        <option value="" >Please select</option>
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        <option value="4" >4</option>
        <option value="5" >5</option>
        <option value="6" >6</option>
        <option value="7" >7</option>
        <option value="8" >8</option>
        <option value="9" >9</option>
        <option value="10" >10</option>
      </select> -->
      <!-- <br>
        <label for="FCA">First Class Adult Seats:</label>
        <select id="FCA" name="seats[FCA]" size='10'>
          <option value="" >Please select</option>
          <option value="1" >1</option>
          <option value="2" >2</option>
          <option value="3" >3</option>
          <option value="4" >4</option>
          <option value="5" >5</option>
          <option value="6" >6</option>
          <option value="7" >7</option>
          <option value="8" >8</option>
          <option value="9" >9</option>
          <option value="10" >10</option>
        </select>
        <br> -->
          <!-- <label for="FCP">First Class Concession Seats:</label>
          <select id="FCP" name="seats[FCP]" size='10'>
            <option value="" >Please select</option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
            <option value="5" >5</option>
            <option value="6" >6</option>
            <option value="7" >7</option>
            <option value="8" >8</option>
            <option value="9" >9</option>
            <option value="10" >10</option>
          </select> -->

          <!-- <br>
            <label for="FCC">First Class Child Seats:</label>
            <select id="FCC" name="seats[FCC]" size='10'>
              <option value="" >Please select</option>
              <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
              <option value="4" >4</option>
              <option value="5" >5</option>
              <option value="6" >6</option>
              <option value="7" >7</option>
              <option value="8" >8</option>
              <option value="9" >9</option>
              <option value="10" >10</option>
            </select>
            <br> -->




            
              <label for="STA">Standard Adult Seats:</label>
              <select id="STA" name="seats[STA]" data-fullprice="20.5" data-discprice="15">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>
              <label for="STP">Standard Concession Seats:</label>
              <select id="STP" name="seats[STP]" data-fullprice="18" data-discprice="13.5">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>

              <label for="STC">Standard Child Seats:</label>
              <select id="STC" name="seats[STC]" data-fullprice="16.5" data-discprice="12">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>

              
              <label for="FCA">First Class Adult Seats:</label>
              <select id="FCA" name="seats[FCA]" data-fullprice="30" data-discprice="24">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>

              
              <label for="FCP">First Class Concession Seats:</label>
              <select id="FCP" name="seats[FCP]" data-fullprice="27" data-discprice="22.5">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>


              <label for="FCC">First Class Child Seats:</label>
              <select id="FCC" name="seats[FCC]" data-fullprice="24" data-discprice="21">
                <option value="" >Please select</option>
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
              </select>
              <br><br>

              
              <!-- <label for="FCC">First Class Child Seats:</label>
              <select name="" id="">
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
              </select> -->
              <br>

              <input type="radio" id="monday" name="day" value="monday">
              <label for="monday">Monday</label><br>
              <input type="radio" id="tuesday" name="day" value="tuesday">
              <label for="tuesday">Tuesday</label><br>
              <input type="radio" id="wednesday" name="day" value="wednesday">
              <label for="wednesday">Wednesday</label><br>
              <input type="radio" id="thursday" name="day" value="thursday">
              <label for="thursday">Thursday</label><br>
              <input type="radio" id="friday" name="day" value="friday">
              <label for="friday">Friday</label><br>
              <input type="radio" id="saturday" name="day" value="saturday">
              <label for="saturday">Saturday</label><br>
              <input type="radio" id="sunday" name="day" value="sunday">
              <label for="sunday">Sunday</label><br>
              <!-- <label for="name">Name:</label><br>
              <input type="text" id="name" name="user[name]"><br><br>
              <label for="name">Full name:</label>
              <span class='error' id='nameError'></span>
              <input type="text" id="email" name="user[email]"><br><br>
              <label for="email">Email:</label>
              <span class='error' id='emailError'></span>
              <input type="text" id="mobile" name="user[mobile]"><br><br>
              <label for="mobile">Mobile number:</label>
              <span class='error' id='mobileError'></span> -->

              <br><br>
              <input type="submit" value="Submit">
</form>
