function displayDarceeRecommendation()
{
    document.getElementById("chelseaWin").style.display = "none";
    document.getElementById("sunitaThakur").style.display = "none";
    document.getElementById("markMcCaulay").style.display = "none";
    let d = document.getElementById("darcee");
    d.setAttribute("style", "display : block; text-align : center");
}
function displayMarkMcCaulayRecommendation()
{
    document.getElementById("sunitaThakur").style.display = "none";
    document.getElementById("darcee").style.display = "none";
    document.getElementById("chelseaWin").style.display = "none";
    let m = document.getElementById("markMcCaulay");
    m.setAttribute("style", "display : block; text-align : center");
}
function displaySunitaThakurRecommendation()
{
    document.getElementById("darcee").style.display = "none";
    document.getElementById("chelseaWin").style.display = "none";
    document.getElementById("markMcCaulay").style.display = "none";
    let s = document.getElementById("sunitaThakur");
    s.setAttribute("style", "display : block; text-align : center");
}
function displayChelseaWinRecommendation()
{
    document.getElementById("darcee").style.display = "none";
    document.getElementById("markMcCaulay").style.display = "none";
    document.getElementById("sunitaThakur").style.display = "none";
    let c = document.getElementById("chelseaWin");
    c.setAttribute("style", "display : block; text-align : center");
}
