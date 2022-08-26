function validateForm() {
    var stdAdult = document.getElementById("seats[STA]");
    var stdCon = document.getElementById("seats[STP]");
    var stdChild = document.getElementById("seats[STC]");
    var fcAdult = document.getElementById("seats[FCA]");
    var fcCon = document.getElementById("seats[FCP]");
    var fcChild = document.getElementById("seats[FCC]");

    console.log(stdAdult);
    // console.log(stdAdult.getAttribute('data-fullprice'));
    console.log(stdChild);
    console.log(stdCon);
    console.log(fcAdult);
    console.log(fcChild);
    console.log(fcCon);

    if (stdAdult.value == "" && stdChild.value == "" && stdCon.value == "" && fcAdult.value == "" && fcAdult.value == "" && fcCon.value == "") {
        return false;
    }

    var tot = 0;
    if (document.getElementById("Mon") && document.getElementById("Mon").checked)
        var day = document.getElementById("Mon");
    if (document.getElementById("Tue") && document.getElementById("Tue").checked)
        var day = document.getElementById("Tue");
    if (document.getElementById("Wed") && document.getElementById("Wed").checked)
        var day = document.getElementById("Wed");
    if (document.getElementById("Thu") && document.getElementById("Thu").checked)
        var day = document.getElementById("Thu");
    if (document.getElementById("Fri") && document.getElementById("Fri").checked)
        var day = document.getElementById("Fri");
    if (document.getElementById("Sat") && document.getElementById("Sat").checked)
        var day = document.getElementById("Sat");
    if (document.getElementById("Sun") && document.getElementById("Sun").checked)
        var day = document.getElementById("Sun");

    if (day == undefined) {
        console.log("day not selected");
        return false;
    }

    var time = day.getAttribute('time');
    document.getElementById("time").value = time.toString();

    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    if (name == "" || email == "" || mobile == "") {
        console.log("name, email, phone issue");
        return false;
    } else {
        if (day.getAttribute('data-pricing') == 'disc') {
            tot = tot + (stdAdult.value * stdAdult.getAttribute('data-discprice'));
            tot = tot + (stdChild.value * stdChild.getAttribute('data-discprice'));
            tot = tot + (stdCon.value * stdCon.getAttribute('data-discprice'));
            tot = tot + (fcAdult.value * fcAdult.getAttribute('data-discprice'));
            tot = tot + (fcChild.value * fcChild.getAttribute('data-discprice'));
            tot = tot + (fcCon.value * fcCon.getAttribute('data-discprice'));
        }
        if (day.getAttribute('data-pricing') == 'full') {
            tot = tot + (stdAdult.value * stdAdult.getAttribute('data-fullprice'));
            tot = tot + (stdChild.value * stdChild.getAttribute('data-fullprice'));
            tot = tot + (stdCon.value * stdCon.getAttribute('data-fullprice'));
            tot = tot + (fcAdult.value * fcAdult.getAttribute('data-fullprice'));
            tot = tot + (fcChild.value * fcChild.getAttribute('data-fullprice'));
            tot = tot + (fcCon.value * fcCon.getAttribute('data-fullprice'));
        }
        tot = tot.toFixed(2);
        console.log(tot);
        document.getElementById("total").value = tot.toString();
        return true;
    }
}