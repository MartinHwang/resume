function displayDarceeRecommendation()
{
    document.getElementById("markMcCaulay").style.display = "none";
    document.getElementById("sunitaThakur").style.display = "none";
    let d = document.getElementById("darcee");
    d.setAttribute("style", "display: block; margin-left: 10em;")
}
function displayMarkMcCaulayRecommendation()
{
    document.getElementById("sunitaThakur").style.display = "none";
    document.getElementById("darcee").style.display = "none";
    let m = document.getElementById("markMcCaulay");
    m.setAttribute("style", "display: block; margin-left: 10em;")
}
function displaySunitaThakurRecommendation()
{
    document.getElementById("darcee").style.display = "none";
    document.getElementById("markMcCaulay").style.display = "none";
    let s = document.getElementById("sunitaThakur");
    s.setAttribute("style", "display: block; margin-left: 10em;");
}
