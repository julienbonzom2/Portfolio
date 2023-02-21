    /*let bouton = ['','','','','',''];
    let cacher = ['','','','','',''];
    for (let pas = 0; pas < 6 ; pas++) {

        bouton[pas] = 'bouton' + pas;
        cacher[pas] = 'caché' + pas

        let window(boutton = document.getElementById(bouton[pas]);
        let caché = document.getElementById(cacher[pas]);
    }
    for (let pas = 0; pas < 6 ; pas++) {
        window [bouton[pas]].addEventListener('click', function () {
            if (document.getElementById(cacher[pas]).style.display === "none") {
                window [cacher[pas]].style.display = "block";
                window[bouton[pas]].src = "menu2.jpg";
                window[bouton[pas]].title = "Cliquez pour réduire";
            }
            else
            {
                window [cacher[pas]].style.display = "none";
                window[bouton[pas]].src = "menu.jpg";
                window[bouton[pas]].title = "Cliquez pour étendre";

            }
    });*//


    let bouton1 = document.getElementById("bouton1");
    let bouton2 = document.getElementById("bouton2");
    let bouton2 = document.getElementById("bouton3");
    let bouton3 = document.getElementById("bouton4");
    let bouton4 = document.getElementById("bouton5");
    let bouton5 = document.getElementById("bouton6");

    let cacher1 = document.getElementById("cacher1");
    let cacher2 = document.getElementById("cacher2");
    let cacher3 = document.getElementById("cacher3");
    let cacher4 = document.getElementById("cacher4");
    let cacher5 = document.getElementById("cacher5");
    let cacher6 = document.getElementById("cacher6");



    cliquage()

    function cliquage() {
        bouton1.addEventListener('click', function () {
                if (document.getElementById(cacher1).style.display === "none") {
                    cacher1.style.display = "block";
                    bouton1.src = "menu2.jpg";
                    bouton1.title = "Cliquez pour réduire";
                } else {
                    cacher1.style.display = "none";
                    bouton1.src = "menu.jpg";
                    bouton1.title = "Cliquez pour étendre";

                }
            }
        )}





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

