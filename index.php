<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Site Institucional do SENAI - Brusque</title>
        <meta charset="UTF-8">

        <!-- CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/estilo.css" />

        <!-- Javascript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/meuscript.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <header class="jumbotron text-center" id="topo">
            <h1>SENAI/SC Brusque</h1>
            <p>Ola mundo do Bootstrap</p>
            <form role="form"class="form-inline">

                <!-- Gerador de Bootstrap Form http://embed.plnkr.co/ZrnnkFR3Yv9HGQHrRMiW/preview -->
                <!-- Em caso de sucesso na validação: <div class="form-group has-feedback has-success"> -->
                <!-- Em caso de falha na validação: <div class="form-group has-feedback has-error"> -->
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="seunome@provedor.com.br" size="40px"/>
                    <i class="form-control-feedback glyphicon glyphicon-envelope"></i>
                </div>

                <button type="submit" class="btn btn-success">
                    Cadastrar
                </button>
                </div>
            </form>
        </header>

        <!-- Barra de navegação-->
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#">SENAI</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#section1">Home</a></li>
                            <li><a href="#section2">Cursos</a></li>
                            <li><a href="#section3">Notícias</a></li>
                            <li><a href="#section4">Fotos</a></li>
                            <li><a href="#section5">Vídeos</a></li>
                            <li><a href="#section6">Contato</a></li>
                            <li><a href="#section7">Localização</a></li>
                            <!-- 
                               <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#section41">Section 4-1</a></li>
                                        <li><a href="#section42">Section 4-2</a></li>
                                    </ul>
                                </li>
                            -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>    

        <!--Fim da barra de navegação-->

        <div id="section1" class="container-fluid">

            <!--Carrosel de imagens-->
            <h1>Home</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-pause="hover">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="http://www.tornosmecanico.com.br/wp-content/uploads/139342.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="http://www.colunistas.com/anos/pc2012/rj/design/SISTEMA_FIRJAN-senai_moda_design(design)-3.jpg" alt="Chania">
                    </div>

                    <div class="item">
                        <img src="http://www.galaxcms.com.br/imgs_redactor/273/images/programador-web-1.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="http://www.duochic.fr/images/guide-des-tailles.jpg" alt="Flower">
                    </div> 

                    <div class="item">
                        <img src="http://mlb-s2-p.mlstatic.com/torno-mecnico-senai-completo-14227-MLB2891560110_072012-O.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="http://www.florania.rn.gov.br/wp-content/uploads/2014/09/PRONATEC.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="http://www2.fiescnet.com.br/web/uploads/release_noticia/medium/9f7b22c68ed08cea6d2464c1f18c85f6.jpg" alt="Flower">
                    </div>


                    <div class="item">
                        <img src="http://www.diplomatafm.com.br/2012/arquivos/noticias/fotos/0575094001340966024/5b031c9903448d89f710eaa7033e4dc2.jpg" alt="Flower">
                    </div> 

                    <div class="item">
                        <img src="http://saborbelga.com/wp-content/uploads/2014/05/Senai_Brusque.jpg" alt="Flower">
                    </div> 

                    <div class="item">
                        <img src="http://infograficos.estadao.com.br/uploads/galerias/7353/74526.jpg" alt="Flower">
                    </div> 

                    <div class="item">
                        <img src="http://cdn1.sempretops.com/wp-content/uploads/T%C3%AAxtil-e-Vestu%C3%A1rio-Design-de-Moda-Designer-02.png" alt="Flower">
                    </div> 

                    <div class="item">
                        <img src="http://www.rededecursos.com.br/wp-content/uploads/2014/09/cursos-senai.jpg" alt="Flower">
                    </div> 


                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div id="section2" class="container-fluid">
                <h1>Cursos</h1>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </div>
            <div id="section3" class="container-fluid">
                <h1>Notícias</h1>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </div>
            <div id="section4" class="container-fluid">
                <h1>Fotos</h1>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
                <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
            </div>
            <div id="section5" class="container-fluid">
                <h1>Vídeos</h1>
                <center>
                <iframe width="800" height="500" src="https://www.youtube.com/embed/__Fbgg4F7Zs?list=PLXTxMOByxQKOZcxIvbgx_93ItPjnbqYIk" frameborder="0" allowfullscreen></iframe>
                </center>
            </div>
            
            <div id="section6" class="container-fluid">
                <h1>Contato</h1>
              <div class=row">
                   <div class="col-lg-4"
                        <p> Entre em contato, responderemos nas próximas 24 horas.</p>
                       <p> <i class="glyphicon glyphicon-map-marker" aria-hidden=true"></i>
                           Brusque/SC
                       </p>
            </div>
            
            <div id="section7" class="container-fluid">
                <h1>Localização</h1>
                <center>
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d227288.32113596884!2d-49.036749028605655!3d-27.112838058208546!3m2!1i1024!2i768!4f13.1!2m1!1ssenai+brusque+l!5e0!3m2!1spt-BR!2sbr!4v1447799900553" width="900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </center>
            </div>
    </body>
</html>