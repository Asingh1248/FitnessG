// alert('Hello'); Testing Purpose

/*  
  1.Get the Input
  2.Convert to Numbers if Needed
  3.Validate my Inputs
  4.If errors Inform user
  5.if No error Process and display results */


//Getting the Input

function BMIcalc() {
    let ht_txt = document.getElementById("height");
    let wt_txt = document.getElementById("weight");


    //Converting to Number

    let ht = parseInt(ht_txt.value);

    //Convert the Height  to metres
    ht = ht / 100;

    let wt = parseInt(wt_txt.value);

    //Validate my Inputs

    let errMsg = "";

    if (wt <= 0) {
        errMsg = errMsg + "Weight cannot be Negative  \n";
    }

    if (ht <= 0) {
        errMsg = errMsg + "Height can be negative  \n";
    }
    //If errors Inform user

    if (errMsg != "") {
        alert(errMsg);
    }
    // 5.if No error Process and display results 
    else {
        let BMI = ((wt) / (ht * ht));

        var resultMsg = ""

        if (BMI < 19) {
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are UnderWeight";
        } else if (BMI < 25) {
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are Healthy";
        } else if (BMI < 30) {
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are OverWeight";
        } else {
            resultMsg = "Your BMI is " + BMI.toFixed(2) + " and you are Obese";
        }
        // alert(resultMsg);
        document.getElementById("Message").innerHTML = resultMsg;
    }
}