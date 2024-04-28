<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Abrigo de Animais</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <!-- Logo ou Nome da Marca -->
                <a class="navbar-brand" href="#"><img class="logo" src="img/cachorro logo.png" alt="cachorro logo"></a>
                <!-- Botão de Colapso (para dispositivos móveis) -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens da Navegação -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Canil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Adote</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="slider">
            <div class="slides">

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img class=""
                        src="https://static.wixstatic.com/media/3b6078_e57d826803de4a44aabfb4fcb6962427~mv2.jpg/v1/fill/w_1903,h_397,al_t,q_85,usm_0.66_1.00_0.01,enc_auto/3b6078_e57d826803de4a44aabfb4fcb6962427~mv2.jpg"
                        alt="Cachorro caramelo">
                </div>
                <div class="slide">
                    <img class=""
                        src="https://static.wixstatic.com/media/3b6078_63582cd655454616a3d9e688a9c3390b~mv2.jpg/v1/fill/w_1903,h_397,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/3b6078_63582cd655454616a3d9e688a9c3390b~mv2.jpg"
                        alt="Cachorro caramelo">
                </div>
                <div class="slide">
                    <img class=""
                        src="https://static.wixstatic.com/media/3b6078_3a3ae57c6e8e4f76bf807e5c050fea6e~mv2.jpg/v1/fill/w_1903,h_397,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/3b6078_3a3ae57c6e8e4f76bf807e5c050fea6e~mv2.jpg"
                        alt="Cachorro caramelo">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>


            </div>
            <div class="manual-navigation">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>
        <section>
            <h1 class="titulo">Sobre</h1>
            <hr>
            <div class="containers">
                <div class="box-text">
                    <p class="titulo-box">Adote</p>
                    <div class="box-content">
                        <p>Agora você pode adotar seu animalzinho da sua casa!!</p>
                        <button>Entenda Mais!</button>
                    </div>

                </div>
                <div class="box-text">
                    <p class="titulo-box">Vacinas</p>
                    <div class="box-content">
                        <p>As Vacinas são muito importante para seu pet!!</p>
                        <button>Entenda Mais!</button>
                    </div>
                </div>
                <div class="box-text">
                    <p class="titulo-box">Cuidados</p>
                    <div class="box-content">
                        <p>Você sabe os cuidados que precisa ter com seus pets?</p>
                        <button>Entenda Mais!</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <hr>
            <div class="box-adote">
                <h1 class="box-titulo-adote">Adote</h1>
                <div class="content-box">
                    <p>Transforme uma vida, adote um pet! Ao abrir seu coração e lar para um 
                        animal de estimação, você não apenas ganha um amigo leal, mas também salva uma vida. 
                        Milhares de pets esperam ansiosamente por 
                        um lar amoroso. Seja a mudança que eles precisam. Adote hoje e faça a diferença!</p>
                        <button style="width: 50%; margin: 0 auto;">Clique aqui</button>
                </div>
            </div>
        </section>
        <section>
            <hr>
            <div class="box-adote">
                <h1 class="box-titulo-adote">Vacinas</h1>
                <div class="content-box">
                    <p>Proteja quem você ama, vacine seu pet! 
                        Assim como nós, nossos amigos peludos também precisam de proteção contra doenças. 
                        As vacinas são a chave para garantir uma vida longa e saudável para seus companheiros de quatro patas. 
                        Não deixe a saúde do seu pet ao acaso. Vacine hoje e garanta um futuro cheio de amor e bem-estar</p>
                    <button style="width: 50%; margin: 0 auto;">Clique aqui</button>
                </div>
            </div>
        </section>
        <section>
            <hr>
            <div class="box-adote">
                <h1 class="box-titulo-adote">Cuidados</h1>
                <div class="content-box">
                    <p>Amor é cuidado. Cuide do seu pet! Eles confiam em nós para tudo, desde comida até carinho e, acima de tudo, cuidados médicos adequados. 
                        De banhos regulares a visitas ao veterinário, cada gesto de cuidado conta para garantir a saúde e felicidade do seu companheiro peludo. 
                        Não economize em amor e cuidados. Seja o melhor amigo do seu pet, cuide dele com todo o seu coração!</p>
                </div>
            </div>
        </section>



    </main>
    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
</body>

</html>