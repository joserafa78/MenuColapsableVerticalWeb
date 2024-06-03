<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Site menu</title>
</head>

<body>
    <div id="sidemenu" class="menu-collapsed">
        <!-- HEADER -->
        <div id="header">
            <div id="title"> <span>Vida MRR</span>
            </div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>



        </div>

        <!-- PROFILE  -->
        <div id="profile">
            <div id="photo">
                <img src="imagen/JoseRafaelJimenez.jpg"></img>
            </div>
            <div id="name"><span>Jose Rafel Jimenez</span></div>
        </div>

        <!-- ITEM  -->
        <div id="menu-items">
            <div class="item">
                <a href="#">
                    <div class="icon"><img src="icons/cloud-services.png" alt=""></div>
                    <div class="title"><span>Cloud Services</span></div>
                </a>
            </div>

            <div id="item separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="icons/cloud-services.png" alt=""></div>
                    <div class="title"><span>Cloud Services</span></div>
                </a>
            </div>
            <div id="item separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="icons/cloud-services.png" alt=""></div>
                    <div class="title"><span>Cloud Services</span></div>
                </a>
            </div>
            <div id="item separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="icons/cloud-services.png" alt=""></div>
                    <div class="title"><span>Cloud Services</span></div>
                </a>
            </div>
            <div id="item separator"></div>

            <div class="item">
                <a href="#">
                    <div class="icon"><img src="icons/cloud-services.png" alt=""></div>
                    <div class="title"><span>Cloud Services</span></div>
                </a>
            </div>
        </div>

    </div>

    <div id="main-container">
        <h3>Contenido de pa pagina.</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem libero modi iste sed magnam, minima et inventore doloremque pariatur atque, repellat temporibus eum nisi ea odit tempore quia, harum ipsa!</p>
    </div>

    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle("body-expanded");
        });
    </script>
</body>

</html>