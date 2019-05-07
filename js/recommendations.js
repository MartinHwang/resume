
function displayDarceeRecommendation()
{
    let chelseaWin = document.getElementById("chelseaWin");
    let darcee = document.getElementById("darcee");
    chelseaWin.style.display = "none";
    darcee.setAttribute("style", "display : block; text-align : center");
}

function displayChelseaWinRecommendation()
{
    let chelseaWin = document.getElementById("chelseaWin");
    let darcee = document.getElementById("darcee");
    darcee.style.display = "none";
    chelseaWin.setAttribute("style", "display : block; text-align : center");
}
