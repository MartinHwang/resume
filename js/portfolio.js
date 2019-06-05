function displayWordpress()
{
    let wordpress       = document.getElementById("wordpress");
    let mean       = document.getElementById("mean");
    mean.innerHTML = "";
    wordpress.innerHTML = `
    <main>
        <section>
            <h1>WORDPRESS</h1>
            <h3>Themes: OceanWp Page; Builder: Elementor</h3>
            <h2>Home_Header</h2>
            <img src="../img/portfolio/wordpress/wordpress_home_header.png">
            <h2>Home_Body1</h2>
            <img src="../img/portfolio/wordpress/wordpress_home_body_1.png">
            <h2>Home_Body2</h2>
            <img src="../img/portfolio/wordpress/wordpress_home_body_2.png">
            <h2>Home_Body3</h2>
            <img src="../img/portfolio/wordpress/wordpress_home_body_3.png">
            <h2>Home_Footer</h2>
            <img src="../img/portfolio/wordpress/wordpress_home_footer.png">
        </section>
    </main>
    `;
}

function displayMean()
{
    let mean       = document.getElementById("mean");
    let wordpress       = document.getElementById("wordpress");
    wordpress.innerHTML = "";
    mean.innerHTML = `
    <main>
        <section>
            <h1>MEAN</h1>
            <h3>MongoDB; ExpressJs; AngularJs; NodeJs</h3>
            <h2>Expressivecafe_Home</h2>
            <img src="../img/portfolio/mean/expressivecafe_home.png">
            <h2>Expressivecafe_Page</h2>
            <img src="../img/portfolio/mean/expressivecafe_page.png">
            <h2>Expressivecafe_Book</h2>
            <img src="../img/portfolio/mean/expressivecafe_Book_Payment.png">
            <h2>Expressivecafe_Signup</h2>
            <img src="../img/portfolio/mean/expressivecafe_Signup.png">
        </section>
    </main>
    `;
}
