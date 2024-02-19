function savedat() { 
    let id = document.getElementById("id").value;
    let prefix = document.getElementById("prefix").value;
    let fname = document.getElementById("FirstName").value;
    let lname = document.getElementById("LastName").value;
    let addr = document.getElementById("Address").value;
    let dis = document.getElementById("district").value;
    let amphur = document.getElementById("amphur").value;
    let province = document.getElementById("province").value;
    let code = document.getElementById("code").value;
    // save data to local storage
        localStorage.setItem('userFirstName',fname);
        localStorage.setItem('userFirstName', fname);
        localStorage.setItem('userLastName', lname);
        localStorage.setItem('userAddress', addr);
        localStorage.setItem('userDistrict', dis);
        localStorage.setItem('userProv', province);
        localStorage.setItem('useraAmphur', amphur);
        localStorage.setItem('userId', id);
        localStorage.setItem('userPrefix', prefix);
        localStorage.setItem('userCode', code);

        alert("Data saved");   

    }

function showdat(){
    // load data from local storage
    let fn = localStorage.getItem('userFirstName');
    let ln = localStorage.getItem('userLastName');
    let adr = localStorage.getItem('userAddress');
    let dis = localStorage.getItem('userDistrict');
    let pr = localStorage.getItem('userProv');
    let ap = localStorage.getItem('useraAmphur');
    let code = localStorage.getItem('userCode');
    let id = localStorage.getItem('userId');
    let prefix = localStorage.getItem('userPrefix');
    
    
    
    let out = document.getElementById("out");
    out.innerHTML = id + "<br>" + prefix + " " +  fn + " " +  ln 
    + "<br>" + adr + ", " + dis + " " + ap + " " +pr + "<br>" + "<br>" + code;
}
