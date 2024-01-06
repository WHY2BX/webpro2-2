function isNumber(n){
    return Number(n)=== n;
}

function validateForm() {    
    /* 
       let fname = document.forms["myForm"]["FirstName"].value;
       let fname = document.forms.myForm.FirstName.value;
    */
    let id = document.getElementById("id").value;
    let fname = document.getElementById("FirstName").value;
    let lname = document.getElementById("LastName").value;
    let code = document.getElementById("code").value;
    let prefix = document.getElementById("prefix").value;
    let province = document.getElementById("province").value;
    let district = document.getElementById("district").value;
    let amphur = document.getElementById("amphur").value;
    let add = document.getElementById("Address").value;
    // let country = document.getElementById("Country").value;


    if (id.length != 13 ){
        alert("กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง");
        return false;
    }

    else if (prefix == "00" ) {
        alert("กรุณาเลือกคำนำหน้า");
        return false;
    }

    else if (fname.length < 3 ) {
        alert("กรุณากรอกชื่อที่มีความยาวมากกว่า 3 ตัวอักษร");
        return false;
    }

    else if (fname.length > 20 ) {
        alert("กรุณากรอกชื่อที่มีความยาวไม่เกิน 20 ตัวอักษร");
        return false;
    }

    else if (lname.length < 3 ) {
        alert("กรุณากรอกนามสกุลที่มีความยาวมากกว่า 3 ตัวอักษร");
        return false;
    }

    else if (lname.length > 20 ) {
        alert("กรุณากรอกนามสกุลที่มีความยาวไม่เกิน 20 ตัวอักษร");
        return false;
    }

    else if (add.length < 15 ) {
        alert("กรุณากรอกที่อยู่ให้ถูกต้อง");
        return false;
    }

    else if (district.length < 2 ) {
        alert("กรุณากรอกตำบล/แขนงให้ถูกต้อง");
        return false;
    }

    else if (amphur.length < 2 ) {
        alert("กรุณากรอกอำเภอให้ถูกต้อง");
        return false;
    }

    else if (province =="" ) {
        alert("กรุณาเลือกจังหวัด");
        return false;
    }

    else if (code.length != 5 ) {
        alert("กรุณากรอกรหัสไปรษณีย์ให้ถูกต้อง");
        return false;
    }
    
    else {
        alert("ข้อมูลถูกต้อง");
    }


}



/**
     - การตรวจสอบความยาวของตัวอักษร
     let str = new String( "This is string" );
     document.write("str.length is:" + str.length);
     // str.length is: 14
     - การหาตำแหน่งข้อความในชุดตัวอักษร
     let str = "Hello world, welcome to the universe.";
     let n = str.indexOf("welcome"); 
     // n = 13
*/
