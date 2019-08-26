<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Canais de Contato</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SiBBr - Sistemas de Informações sobre s Biodiversidade Brasileira</title>

    <!-- Favicon -->
    <link href="https://ala-dev.vertigo.com.br/img/sibbr.ico" rel="shortcut icon"
          type="image/x-icon">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../css/ala-styles.css" rel="stylesheet">

    <!-- FontAwesome -->
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom paginas complementares -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/content.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div data-include="banner-interno"></div>

<!-- Breadcrumb -->
<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <ul class="breadcrumb-list">
                <li><a href="https://ala-dev.vertigo.com.br">Home</a></li>
                <li class="active">Conheça o SiBBr</li>
                <li class="active">Canais de Contato</li>
            </ul>
        </div>
    </div>
</section>
<!-- Content -->
<div class="container">
    <section class="content-container">
        <div class="row">

            <article class="col-md-12 header-wrap margin-bottom-half-1">
                <h5 class="subject-category-overline">Conheça o SiBBr</h5>
                <h2 class="subject-title">Canais de Contato</h2>
            </article>

            <article class="col-md-12" id="alaEditable">
                <p>Conheça os canais de contato do SiBBr.</p>

                <div class="contato">
                    <h5>Redes Sociais</h5>
                </div>

                <div class="col-lg-12">
                    <div class="contato col-lg-2">
                        <a href="https://facebook.com/sibbr.gov.br">
                            <img src="../img/icone/icon-face.png">
                            <p>Facebook</p>
                        </a>
                    </div>

                    <div class="contato col-lg-2">
                        <a href="https://twitter.com/sib_br">
                            <img src="../img/icone/twitter.png">
                            <p>Twitter</p>
                        </a>
                    </div>

                    <div class="contato col-lg-2">
                        <a href="https://www.youtube.com/user/SiBBr/videos">
                            <img src="../img/icone/youtube.png">
                            <p>Youtube</p>
                        </a>
                    </div>
                </div>

                </br></br></br></br></br>

                <div class="contato">
                    <h5>Contatos</h5>
                </div>

                <div class="contato">
                    <p>Captação de Dados</p>
                    <a href="mailto:captacao@sibbr.gov.br">captacao@sibbr.gov.br</a>
                </div>

                <div class="contato">
                    <p>Engajamento e Comunicação</p>
                    <a href="mailto:engajamento@sibbr.gov.br">engajamento@sibbr.gov.br</a>
                </div>

            </article>
        </div>
    </section>

    <section class="content-container">
        <h2 class="subject-title">Entre em contato</h2>
        <p>Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto
            Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto Texto texto
            Texto texto Texto texto Texto texto Texto texto
            Texto texto </p>
        <br>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<div class="message-error">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }

        if (isset($_SESSION['sucesso'])) {
            echo '<div class="message-sucesso">' . $_SESSION['sucesso'] . '</div>';
            unset($_SESSION['sucesso']);
        }
        ?>
        <form class="form-horizontal" name="contactform" method="post" action="enviar.php">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label heading-medium">Nome</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-lg" id="inputEmail3" name="name"
                           placeholder="Nome" required autofocus>
                    <!-- <p class="help-block">Sign up to be notified when the next article drops.</p> -->
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label heading-medium">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control input-lg" id="inputEmail4" name="email" maxlength="80"
                           size="30"
                           placeholder="email@example.com">
                    <!-- <p class="help-block">Sign up to be notified when the next article drops.</p> -->
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label heading-medium">Assunto</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control input-lg" id="inputEmail5" name="assunto"
                           placeholder="Assunto">
                    <!-- <p class="help-block">Sign up to be notified when the next article drops.</p> -->
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label heading-medium">Mensagem</label>
                <div class="col-sm-8">
                            <textarea class="form-control input-lg" rows="4" name="menssagem" maxlength="1000"
                                      placeholder="Mensagem"></textarea>
                    <!-- <p class="help-block">Sign up to be notified when the next article drops.</p> -->
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-8">
                    <button type="submit" class="btn btn-ala btn-lg" value=”Send”>Enviar</button>
                </div>
            </div>
        </form>
    </section>
</div>

<div data-include="footer"></div>

<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../js/component.js"></script>

</body>
</html>