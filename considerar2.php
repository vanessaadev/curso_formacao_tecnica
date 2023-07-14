<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.3';
include('layout/header.php');
?>

<style>
    .sintese {
        border-top: 30px;
    }
</style>

<body>
    <!-- PLUGIN DO FADE IN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- MENU -->
    <?php include('layout/menu.php') ?>

    <div id="main">
        <!-- NAV TOP -->
        <?php include('layout/nav.php') ?>
        <!-- CONTEUDO INICIO -->
        <div class="main-content container-fluid Texto">
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <h2 class="SubTitulo"> CAUSAS E EFEITOS DAS MUDANÇAS CLIMÁTICAS </h2>
                        <hr>
                        <br>



                        <p>Dentre as principais causas, podemos destacar:</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Clique aqui para conferir!</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">
                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>1. Geração de energia</strong></p>

                                        <p>A geração de eletricidade e calor pela queima de combustíveis fósseis é responsável pela maioria das emissões globais. A maior parte da eletricidade ainda é gerada pela queima de carvão, petróleo ou gás, o que produz poderosos gases de efeito estufa que recobrem o planeta e retêm o calor do sol.</p>


                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>2. Indústria poluente</strong></p>

                                        <p>A indústria produz emissões, principalmente pela queima de combustíveis fósseis para gerar energia para fabricar cimento, ferro, aço, eletrônicos, plástico, roupas e outros produtos. A mineração e outros processos industriais também liberam gases, assim como a indústria da construção civil.</p>


                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>3. Desmatamento florestal</strong></p>

                                        <p>O desmatamento, assim como a agricultura e outras mudanças no uso da terra, é responsável por cerca de um quarto das emissões globais de gases do efeito estufa.</p>


                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>4. Transporte movido a combustíveis fósseis</strong></p>

                                        <p>A maioria dos carros, caminhões, navios e aviões funcionam com combustíveis fósseis. O transporte é responsável por quase um quarto das emissões globais de dióxido de carbono relacionadas à energia.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>5. Atual Modelo de Produção de Alimentos</strong></p>

                                        <p>O Agronegócio e a Pesca Industrial geram emissões de dióxido de carbono, metano e outros gases do efeito estufa de várias maneiras: pelo desmatamento e limpeza de terras para agricultura e pastagem, produção e uso de fertilizantes químicos para a agricultura e uso de energia para o funcionamento de equipamentos agrícolas ou barcos de pesca, geralmente com combustíveis fósseis.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>6. Energia nos edifícios</strong></p>

                                        <p>No mundo todo, prédios residenciais e comerciais consomem mais da metade de toda a eletricidade. A crescente demanda de energia para aquecimento e resfriamento, com o maior uso de aparelhos de ar-condicionado, bem como o aumento do consumo de eletricidade para iluminação, eletrodomésticos e dispositivos conectados, têm contribuído para o aumento nas emissões de dióxido de carbono dos edifícios nos últimos anos.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>7. Excesso de consumo</strong></p>
                                        <p>Sua casa e seu uso de energia, a forma como você se locomove, o que você come e quanto lixo você produz contribuem para as emissões de gases de efeito estufa. Os mais ricos têm a maior responsabilidade: a parcela 1% mais rica da população global responde por mais emissões de gases do efeito estufa do que os 50% mais pobres.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->
                        </div>
                        <!-- FIM Accordion -->
                        <br><br>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura08.png" data-bs-toggle="modal" data-bs-target="#Imagem08">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 08 - MODAL -->
                        <div class="modal fade text-center" id="Imagem08" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura08.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 08 - End -->
                        <br><br>


                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Perceba que boa parte das causas das mudanças climáticas está ligada ao consumo de combustíveis fósseis, oriundos da exploração de petróleo. Contudo, já temos tecnologias limpas que podem (e devem) substituir o petróleo urgentemente, como a energia solar e a eólica, transportes elétricos, etc.. O petróleo deve ficar debaixo da terra, onde sempre esteve por milhões de anos.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>No Brasil, as principais fontes de emissão de carbono são o desmatamento e as queimadas. Por isso a importância de se reflorestar (REGENERAR) e de se trabalhar um modelo agropecuário ecológico.</p>
                            </div>
                        </div>
                        <br><br>

                        <p>Vamos conhecer agora os efeitos das mudanças climáticas no planeta. Tente fazer uma comparação com os efeitos aí na sua cidade:</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>
                                            Clique aqui para conferir as comparações de cada efeito
                                        </strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">
                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>1. Temperaturas mais altas</p>

                                        <p>Desde os anos 1980, cada década tem sido mais quente do que a anterior. Quase todas as áreas têm tido mais dias quentes e ondas de calor. E na sua cidade, o calor está mais intenso a cada ano?</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>2. Tempestades mais severas</p>

                                        <p>Conforme as temperaturas aumentam, mais umidase alimentam da água quente na superfície do oceano, agravando chuvas e inundações extremas e causando tempestades mais destrutivas.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>3. Aumento da seca e escassez de água em algumas regiões</p>

                                        <p>O aquecimento global agrava os períodos de seca em regiões onde a falta de água já é comum, aqui na Caatinga por exemplo, e leva a um risco maior de secas agrícolas, afetando plantações e aumentando a vulnerabilidade dos ecossistemas.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>4. Derretimento das calotas polares e aumento do nível do mar</p>

                                        <p>O derretimento do gelo dos Polos causado pelo aumento da temperatura provoca a elevação do nível do mar, ameaçando comunidades do litoral e os habitantes das ilhas. Aqui no Ceará já se observa esse fenômeno em quase todo o litoral.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>5. Perda de Biodiversidade e danos a diversos ecossistemas</p>

                                        <p>O mundo está perdendo espécies a uma taxa 1.000 vezes maior do que em qualquer outro momento na história da humanidade. Um milhão de espécies estão em risco de extinção nas próximas décadas.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>6. Insegurança Alimentar</p>

                                        <p>O aumento de eventos climáticos extremos estão entre as razões da fome e da subnutrição. A agropecuária e a pesca tendem a se tornar menos produtivas.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>7. Mais riscos para a saúde</p>

                                        <p>A poluição do ar, as pandemias, eventos climáticos extremos, pressões sobre a saúde mental e aumento da fome e subnutrição já estão prejudicando a saúde de toda população mundial, sobretudo os mais pobres.</p>

                                        <p class="wow fadeInDown" data-wow-delay="1.0s"><strong>8. Pobreza e deslocamento de populações</p>

                                        <p>Na última década (2010–2019), eventos relacionados ao clima provocaram o deslocamento estimado em 23,1 milhões de pessoas por ano, deixando-as muito mais vulneráveis à pobreza.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->
                        </div>
                        <!-- FIM Accordion -->
                        <br><br>


                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura09.png" data-bs-toggle="modal" data-bs-target="#Imagem09">
                                            <img class="img-fluid wow fadeInDown" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura img-fluid wow fadeInLeft">Praia de Morro Branco, em Beberibe/CE. <br> Foto: Diário do Nordeste</p>
                                        </a>
                                    </div>

                                    <!-- Imagem 09 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem09" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura09.png" alt="Alt da imagem fica aqui">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Imagem 09 - End -->
                                </div>

                                <div class="col">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura10.png" data-bs-toggle="modal" data-bs-target="#Imagem10">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura img-fluid wow fadeInLeft">Desertificação avançando no município de Irauçuba/CE. <br> Foto: OPOVO</p>
                                        </a>
                                    </div>

                                    <!-- Imagem 10 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura10.png" alt="Alt da imagem fica aqui">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 10 - End -->
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura11.png" data-bs-toggle="modal" data-bs-target="#Imagem11">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura img-fluid wow fadeInLeft"> Alguns municípios cearenses já registram temperaturas acima dos 40ºC. Dentre eles, Jaguaribe/CE. <br> Foto: Diário do Nordeste / Honório Barbosa .</p>
                                        </a>
                                    </div>

                                    <!-- Imagem 11 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura11.png" alt="Alt da imagem fica aqui">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 11 - End -->
                                </div>

                                <div class="col">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura12.png" data-bs-toggle="modal" data-bs-target="#Imagem12">
                                            <img class="img-fluid wow fadeInUp" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                            <p class="TituloFigura img-fluid wow fadeInLeft"> Perda da produção aumenta a pobreza e a insegurança alimentar. <br> Foto: Diário do Nordeste.</p>
                                        </a>
                                    </div>

                                    <!-- Imagem 12 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura12.png" alt="Alt da imagem fica aqui">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 12- End -->
                                </div>
                            </div>
                        </div>






                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });


                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->
                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- CONTEUDO FIM -->

        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>