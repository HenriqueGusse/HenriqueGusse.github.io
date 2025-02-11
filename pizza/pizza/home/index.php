<?php 
session_start();

if (!isset($_SESSION['cpf'])) {}else{$nome = $_SESSION['nome'];}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>X Pizzas</title>
    <link rel="stylesheet" href="./CSS/style.css"/>
</head>
<body>

    <!-- modelos de pizza na lista e no carrinho -->
    <div class="models">
        <!-- pizza na lista -->
        <div class="pizza-item">
            <a href="">
                <div class="pizza-item--img"><img src="" alt="Imagem da Pizza" /></div>
                <div class="pizza-item--add">+</div>
            </a>
            <div class="pizza-item--price">R$ --</div>
            <div class="pizza-item--name">--</div>
            <div class="pizza-item--desc">--</div>
        </div>

        <!-- pizza no carrinho -->
        <div class="cart--item">
            <img src="" alt="Imagem da Pizza no Carrinho" />
            <div class="cart--item-nome">--</div>
            <div class="cart--item--qtarea">
                <button class="cart--item-qtmenos">-</button>
                <div class="cart--item--qt">1</div>
                <button class="cart--item-qtmais">+</button>
            </div>
        </div>
    </div>
    <!-- /models -->

    <header>
        <div class="content">

            <?php
            if(!isset($_SESSION['cpf'])){}else{ ?>
            <div class="bemvindo" style="color:white; font-size:large; position:fixed; inset-inline-start:25px;">Bem-vindo <?php echo htmlspecialchars($nome);?>!</div>
            <?php }?>
            <div class="logo">
                <img src="./images/logo.png" alt="Logo da X Pizzas">
                <h3 style="margin: 15px;">Xpizzas</h3>
            </div>
            <ul class="list-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#sobrenos">Sobre nós</a></li>
                <li><a href="#cardapio">Cardápio</a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                <li><a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                <li>
                    <div class="menu-openner"><span>0</span><i class="bi bi-cart"></i></div>
                </li>

                <?php
                if (!isset($_SESSION['cpf'])) { ?>
                    <li><a href="../login/pagina.php">Login</a></li>
                <?php } else { ?>
                    <li><a href="../login/logout.php">Sair</a></li>
                <?php } ?>
            </ul>
        </div>
    </header>

    <section class="first-section" id="home">
        <div class="conteudo-principal">
            <h1>Deixe seu dia mais saboroso!!!</h1>
            <h2>As pizzas mais recheadas da Região</h2>
            <div class="btn" style="justify-content:center;">
                <a href="#cardapio"><button class="montar">Montar a sua pizza!</button></a>
            </div>
        </div>    
    </section>    

    <section class="sobre-nos" id="sobrenos"> 
        <div class="main">
            <div class="contentsobre">
                <h2>Sobre nós</h2>
                <p>Fundada em 2024, a Xpizzas nasceu com a missão de oferecer pizzas artesanais feitas com ingredientes frescos e de qualidade. Inspirados em receitas tradicionais da família, buscamos criar uma experiência única para cada cliente. Com carinho e dedicação, conquistamos o paladar de quem ama uma pizza de verdade. Venha fazer parte dessa história com a gente!</p>
            </div>     
            <div class="img-cozinha">
                <img src="./images/cozinha.jpg" alt="Imagem da Cozinha">
            </div>
        </div>    
    </section>

    <section class="cardapio" id="cardapio">
        <h2>Cardápio</h2>
        <main>
            <div class="pizza-area"></div>
        </main>
    </section>

    <aside>
        <div class="cart--area">
            <div class="menu-closer">X</div>
            <h1>Suas Pizzas</h1>
            <div class="cart"></div>
            <div class="cart--details">
                <div class="cart--totalitem subtotal">
                    <span>Subtotal</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem desconto">
                    <span>Desconto</span>
                    <span>R$ --</span>
                </div>
                <div class="cart--totalitem total big">
                    <span>Total</span>
                    <span>R$ --</span>
                </div>
                <?php if (!isset($_SESSION['cpf'])) {?>
                    <a href="../login/pagina.php"><div class="logarse">Fazer Login</div></a>
                <?php }else{?>
                <div class="cart--finalizar">Finalizar a compra</div>
                <?php };?>
            </div>
        </div>
    </aside>

    <section class="contatos" id="contatos">
        <h3>Contatos</h3>
        <div class="contatos-secao">
            <div>
                <i class="bi bi-telephone-fill"></i>
                <span>(41) 98702-6975</span>
            </div>
            <div>
                <i class="bi bi-instagram"></i>
                <a href="https://www.instagram.com" target="_blank" style="color:white">@Xpizzas</a>
            </div>
            <div>
                <i class="bi bi-facebook"></i>
                <span><a href="https://www.facebook.com" target="_blank" style="color:white">Xpizzas</a></span>
            </div>
        </div>
    </section>
    
    <footer>
        <h4>Desenvolvido por Henrique, Phellaz, Maycon, Ian</h4>
    </footer>

    <div class="pizzaWindowArea">
        <div class="pizzaWindowBody">
            <div class="pizzaInfo--cancelMobileButton">Voltar</div>
            <div class="pizzaBig">
                <img src="" alt="Imagem Grande da Pizza" />
            </div>
            <div class="pizzaInfo">
                <h1>--</h1>
                <div class="pizzaInfo--desc">--</div>
                <div class="pizzaInfo--sizearea">
                    <div class="pizzaInfo--sector">Tamanho</div>
                    <div class="pizzaInfo--sizes">
                        <div data-key="P" class="pizzaInfo--size">PEQUENA <span>--</span></div>
                        <div data-key="M" class="pizzaInfo--size">MÉDIA <span>--</span></div>
                        <div data-key="G" class="pizzaInfo--size selected">GRANDE <span>--</span></div>
                    </div>
                </div>
                <div class="pizzaInfo--pricearea">
                    <div class="pizzaInfo--sector">Preço</div>
                    <div class="pizzaInfo--price">
                        <div class="pizzaInfo--actualPrice">R$ --</div>
                        <div class="pizzaInfo--qtarea">
                            <button class="pizzaInfo--qtmenos">-</button>
                            <div class="pizzaInfo--qt">1</div>
                            <button class="pizzaInfo--qtmais">+</button>
                        </div>
                    </div>
                </div>
                <div class="pizzaInfo--addButton">Adicionar ao carrinho</div>
                <div class="pizzaInfo--cancelButton">Cancelar</div>
            </div>
        </div>
    </div>

    <script src="./script/pizzas.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>
