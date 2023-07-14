<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.1';
include('layout/header.php');
?>

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

                        <!-- Título -->
                        <p class="SubTitulo">DESACELERANDO A MUDANÇA CLIMÁTICA </p>
                        <hr>
                        <br>

                        <p>Se não é possível impedir as mudanças climáticas, é preciso freá-la e mitigá-la. Mitigação é a ação de atenuar, diminuir os efeitos causadores da mudança do clima. Ela envolve diferentes ações que visam à diminuição de emissão de GEE e com isso reduzir a ocorrência ou a intensidade dos efeitos das mudanças climáticas listados no tópico anterior.</p>

                        <p>Ela possui duas áreas de ação: <strong>a redução de emissões e aumento de sumidouros de carbono</strong>. A redução de emissões deve ser realizada pelas atividades humanas que emitem GEE, como indústria, energia e transportes. Ela pode ser feita por meio da utilização de tecnologias limpas, que não emitem GEE ou que tenham uma emissão bem menor se comparada a outros métodos.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Um exemplo de ação de mitigação é a utilização de energias renováveis, como solar e eólica, que emitem bem menos que a energia produzida por uma termelétrica a carvão, por exemplo. O desenvolvimento de carros elétricos, e produtos que utilizam menos matéria prima, também contribuem para a mitigação de emissões, já que todo processo industrial emite GEE. É preciso descarbonizar as atividades humanas!</p>
                            </div>
                        </div>
                        <br><br>

                        <p>Isso também passa pelo comportamento de cada um, pois consumimos produtos e serviços e, ao consumi-los, também emitimos GEE. Por isso, o objetivo de toda a sociedade deve ser fazer a transição para uma economia e um estilo de vida com baixo teor de emissão de carbono e, eventualmente, com emissão zero de carbono.</p>

                        <div class="row">
                            <div class="col-sm">

                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura18.png" data-bs-toggle="modal" data-bs-target="#Imagem18">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura">Parque eólico em Trairi/CE. <br> Foto: Mais FM</p>
                                    </a>
                                </div>

                                <!-- Imagem 18 - MODAL -->
                                <div class="modal fade text-center" id="Imagem18" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura18.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 18 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura20.png" data-bs-toggle="modal" data-bs-target="#Imagem20">
                                        <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                        <p class="TituloFigura"> Parque solar em Tabuleiro do Norte/CE. <br> Foto: Diário do Nordeste</p>
                                    </a>
                                </div>

                                <!-- Imagem 20 - MODAL -->
                                <div class="modal fade text-center" id="Imagem20" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura20.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 20 - End -->
                            </div>

                        </div>

                        <p>Já os sumidouros são outra forma de contribuir com a mitigação das emissões. Eles são áreas que captam carbono, e um exemplo clássico de sumidouro são as florestas. Através da fotossíntese, as plantas absorvem carbono do ar e o armazenam em suas raízes e no solo, reduzindo assim, a concentração de CO2 que está na atmosfera. Por isso, o reflorestamento de áreas degradadas e o plantio de árvores, são muito utilizados na compensação e neutralização de emissões. Outra ação fundamental para o aumento desses sumidouros, é a redução no desmatamento e o fim das queimadas. Precisamos reflorestar o mundo e a cabeça das pessoas!</p>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura21.jpg" data-bs-toggle="modal" data-bs-target="#Imagem21">
                                        <img class="img-fluid wow fadeInDown" width="400" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura21.jpg" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>

                                <!-- Imagem 21 - MODAL -->
                                <div class="modal fade text-center" id="Imagem21" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura21.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 21 - End -->
                            </div>

                            <div class="col-sm">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura22.png" data-bs-toggle="modal" data-bs-target="#Imagem22">
                                        <img class="img-fluid wow fadeInUp" width="530" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">

                                    </a>
                                </div>

                                <!-- Imagem 22 - MODAL -->
                                <div class="modal fade text-center" id="Imagem22" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura22.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 22 - End -->
                            </div>
                        </div>

                        <p class="TituloFigura text-center">Ajas de Croatá/CE e de Juazeiro do Norte/CE em ação contra as mudanças climáticas. <br> Fotos: SEMA e @agente.jovem</p>

                        <p>A mitigação das mudanças climáticas é vital para conter o aquecimento global e os prejuízos que ele está causando no planeta. Segundo o IPCC, mesmo estabilizando as emissões de GEE hoje, o mundo continuaria esquentando. Isso significa que precisamos agir rápido e de forma mais intensa, ou então continuaremos a ver os efeitos crescentes das mudanças climáticas por muito mais tempo. As soluções já são conhecidas, resta aos seres humanos agir em prol de um bem maior que o lucro ou o ego!</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura23.png" data-bs-toggle="modal" data-bs-target="#Imagem23">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura">Imagem: WRI Brasil</p>
                            </a>
                        </div>

                        <!-- Imagem 23 - MODAL -->
                        <div class="modal fade text-center" id="Imagem23" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura23.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 23 - End -->




















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
                <a href="Topico03.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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