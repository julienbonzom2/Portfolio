/*let bouton = ['','','','','',''];*/
/*let cacher = ['','','','','',''];*/
/*for (let pas = 1; pas < {{ iteration +1 }} ; pas++) {*/

/*bouton[pas]='bouton' + pas;*/
/*cacher[pas]='bouton' + pas */

/* window [bouton[pas]]= document.getElementById(bouton[pas]);*/
/*window [cacher[pas]] = document.getElementById(cacher[pas]);*/
}



document.getElementById("bouton1").addEventListener("click", function(){
    if (document.getElementById("cacher1").style.display === "none") {
        document.getElementById("cacher1").style.display = "block";
        document.getElementById("bouton1").src="./images/menu2.jpg";
        document.getElementById("bouton1").title="Cliquez pour réduire";
    } elseif {
        document.getElementById("cacher1")style.display  = "none";
        document.getElementById("bouton1").src="./images/menu.jpg";
        document.getElementById("bouton1").title="Cliquez pour étendre";

    }});

document.getElementById("bouton2").addEventListener("click", function(){
    if (document.getElementById("cacher2").style.display === "none") {
        document.getElementById("cacher2").style.display = "block";
        document.getElementById("bouton2").src="./images/menu2.jpg";
        document.getElementById("bouton2").title="Cliquez pour réduire";
    } elseif {
        document.getElementById("cacher2")style.display  = "none";
        document.getElementById("bouton2").src="./images/menu.jpg";
        document.getElementById("bouton2").title="Cliquez pour étendre";

    }});
document.getElementById("bouton3").addEventListener("click", function(){
    if (document.getElementById("cacher3").style.display === "none") {
        document.getElementById("cacher3").style.display = "block";
        document.getElementById("bouton3").src="./images/menu2.jpg";
        document.getElementById("bouton3").title="Cliquez pour réduire";
    } elseif {
        document.getElementById("cacher3").style.display  = "none";
        document.getElementById("bouton3").src="./images/menu.jpg";
        document.getElementById("bouton3").title="Cliquez pour étendre";

    }});
document.getElementById("bouton4").addEventListener("click", function(){
    if (document.getElementById("cacher4").style.display === "none") {
        document.getElementById("cacher4").style.display = "block";
        document.getElementById("bouton4").src="./images/menu2.jpg";
        document.getElementById("bouton4").title="Cliquez pour réduire";
    } elseif {
        document.getElementById("cacher4")style.display  = "none";
        document.getElementById("bouton4").src="./images/menu.jpg";
        document.getElementById("bouton4").title="Cliquez pour étendre";

    }});
document.getElementById("bouton5").addEventListener("click", function(){
    if (document.getElementById("cacher5").style.display === "none") {
        document.getElementById("cacher5").style.display = "block";
        document.getElementById("bouton5").src="./images/menu2.jpg";
        document.getElementById("bouton5").title="Cliquez pour réduire";
    } elseif {
        document.getElementById("cacher5")style.display  = "none";
        document.getElementById("bouton5").src="./images/menu.jpg";
        document.getElementById("bouton5").title="Cliquez pour étendre";

    }});












function AdapterDivAResolution() {
    let x_res = screen.width;
    let y_res = screen.height;
    const bouton1 = document.getElementById("bouton1")
    if(x_res < 1024)
    {
        bouton1.src="./images/menu2.jpg";
        bouton1.style.display = "block";
        bouton1.style.visibility="visible";
    }
}
AdapterDivAResolution()
bouton1.addEventListener('click',cliquage, false);

