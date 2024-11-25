const cond = ["@", "#", "$", "%", "^", "&", "*", ".", ",", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

function nameCheck() {
    let msg = document.getElementById("msg");
    msg.style.display = "none";
    let name = document.getElementById("name").value;
    if (cond.some((ele) => name.includes(ele))) {
        msg.style.display = "block";
    }
    document.getElementById("name").onclick = function () {
        msg.style.display = "none";
    };
}

function rollCheck() {
    let msg1 = document.getElementById("msg1");
    msg1.style.display = "none";
    let roll_no = document.getElementById("rollno").value;
    if (roll_no.length != 9) {
        msg1.style.display = "block";
    }
    document.getElementById("rollno").onclick = function () {
        msg1.style.display = "none";
    };
}

function numCheck() {
    let msg2 = document.getElementById("msg2");
    msg2.style.display = "none";
    let mob_no = document.getElementById("mobno").value;
    if (mob_no.length != 10 || isNaN(mob_no)) {
        msg2.style.display = "block";
    }
    document.getElementById("mobno").onclick = function () {
        msg2.style.display = "none";
    };
}

function pinCheck() {
    let msg3 = document.getElementById("msg3");
    msg3.style.display = "none";
    let pin_no = document.getElementById("pin").value;
    if (pin_no.length != 6 || isNaN(pin_no)) {
        msg3.style.display = "block";
    }
    document.getElementById("pin").onclick = function () {
        msg3.style.display = "none";
    };
}

function checkAll() {
    let msg = document.getElementById("msg");
    let msg1 = document.getElementById("msg1");
    let msg2 = document.getElementById("msg2");
    let msg3 = document.getElementById("msg3");
    let msg4 = document.getElementById("msg4");
    let msg5 = document.getElementById("msg5");
    let msg6 = document.getElementById("msg6");
    let msg7 = document.getElementById("msg7");
    let opt1 = document.getElementById("opt1");
    let opt2 = document.getElementById("opt2");
    let opt3 = document.getElementById("opt3");
    let radio = document.getElementById("radio");

    let name = document.getElementById("name").value;
    let roll_no = document.getElementById("rollno").value;
    let mob_no = document.getElementById("mobno").value;
    let pin_no = document.getElementById("pin").value;
    let year = document.getElementById("year").value;
    let dept = document.getElementById("dept").value;
    let section = document.getElementById("section").value;
    let email = document.getElementById("email").value;
    let addr = document.getElementById("addr").value;
    let city = document.getElementById("city").value;
    let country = document.getElementById("country").value;
    let gender = document.querySelector('input[name="gender"]:checked');

    if (name == "" || name == null) {
        msg.style.display = "block";
    }
    if (roll_no == "") {
        msg1.style.display = "block";
    }
    if (mob_no == "") {
        msg2.innerHTML = "Input field is empty !!!";
        msg2.style.display = "block";
    }
    if (pin_no == "") {
        msg3.innerHTML = "Input field is empty !!!";
        msg3.style.display = "block";
    }
    if ((email.includes("@") && email.includes(".")) == false) {
        msg4.innerHTML = "Invalid Email.. Please enter again..";
        msg4.style.display = "block";
    }
    if (email == "") {
        msg4.innerHTML = "Input field is empty !!!";
        msg4.style.display = "block";
    }
    if (addr == "") {
        msg5.style.display = "block";
    }
    if (city == "") {
        msg6.style.display = "block";
    }
    if (country == "") {
        msg7.style.display = "block";
    }
    if (gender == null) {
        radio.style.display = "block";
    }
    if (year == "none") {
        opt1.style.display = "block";
    }
    if (dept == "none") {
        opt2.style.display = "block";
    }
    if (section == "none") {
        opt3.style.display = "block";
    }

    let msg_dis = document.getElementsByClassName("input");
    let msgs = document.getElementsByClassName("msgs");
    for (let i = 0; i < msg_dis.length; i++) {
        msg_dis[i].onclick = function () {
            msgs[i].style.display = "none";
        };
    }

    let mes_disp = document.getElementsByClassName("gender");
    for (let i = 0; i < mes_disp.length; i++) {
        mes_disp[i].onclick = function () {
            radio.style.display = "none";
        };
    }

    return false; 
}

function clearAll() {
    const msgs = document.getElementsByClassName("msgs");
    let radio = document.getElementById("radio");
    for (let i = 0; i < msgs.length; i++) {
        msgs[i].style.display = "none";
    }
    radio.style.display = "none";
}