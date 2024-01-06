function shuffle(){
    let i1 = document.getElementById("1").src;
    let i2 = document.getElementById("2").src;
    let i3 = document.getElementById("3").src;
    let i4 = document.getElementById("4").src;
    // let spare = document.getElementById("1").src;

    document.getElementById('1').src = i3;
    document.getElementById('2').src = i1;
    document.getElementById('3').src = i4;
    document.getElementById('4').src = i2;
}

window.onload = () => {
    document.querySelectorAll("button.particleButton").forEach(btn => {
        let btnBg = btn.parentNode.querySelector(".particles")
        let initalListener = () => {
            btnBg.classList.add("animated")
            btn.removeEventListener("click", initalListener)
        }
        btn.addEventListener("click", initalListener)
    })
}
