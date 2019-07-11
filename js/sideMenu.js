function openMenu()
{
    document.getElementById('nav').style.visibility = 'visible';
    document.getElementById('nav').style.WebkitAnimation = "moveLeft 1s 1";
    document.getElementById('nav').style.animation = "moveLeft 1s 1";
    document.getElementById('nav').style.left = "0px";
    document.getElementById('menu_open').style.display = 'none';
    document.getElementById('menu_close').style.display = 'block';
}

function closeMenu()
{
    document.getElementById('nav').style.WebkitAnimation = "moveRight 1s 1";
    document.getElementById('nav').style.animation = "moveRight 1s 1";
    document.getElementById('nav').style.left = "-400px";
    document.getElementById('menu_open').style.display = 'block';
    document.getElementById('menu_close').style.display = 'none';
}
