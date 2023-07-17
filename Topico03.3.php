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


                        <p class="SubTitulo">Objetivo do PIA</p>
                        <hr>
                        <br>

                        <div class="bd-callout bd-callout-success">
                            <p>“O PIA é um instrumento fundamental para garantir a equidade do processo socioeducativo”. (Adimari, Paes e Costa, 2013, p. 192)</p>
                        </div>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O PIA tem como objetivo garantir a compreensão de cada adolescente enquanto pessoa, revestido de uma singularidade através de um plano construído com ele e para ele. </p>

                                <div class="row align-items-center">
                                    <div class="col-md-3 col-sm-12">
                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura02.png" data-bs-toggle="modal" data-bs-target="#Imagem02">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                            </a>
                                        </div>

                                        <!-- Imagem 02 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem02" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura02.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 02 - End -->
                                        <br>
                                    </div>
                                    <div class="col-md-1 col-sm-12"></div>
                                    <div class="col-md-8 col-sm-12">
                                        <p>Todas as esferas envolvidas no atendimento ao adolescente (judicial, administrativa, pedagógica, de saúde, segurança, família e comunidade) devem respeitar sempre a ideia de que cada um desses adolescentes/jovens é único, tal como será o desenvolvimento do seu processo socioeducativo. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>



                        <p>A ênfase do PIA deve se dar no delineamento de objetivos e ações que possam nortear e facilitar o trabalho do acompanhamento de cada caso durante o período de cumprimento da medida e de um planejamento para uma vida com novos objetivos e propósitos.</p>

                        <p>O PIA, além de ser apropriado a cada um, deve ser personalizado. Ele é definido como o plano de trabalho que dá instrumentalidade para o desenvolvimento pessoal e social do adolescente em cumprimento de medida socioeducativa, respeitando a visão global e plena do ser humano e da educação (PARANÁ, 2012).</p>

                        <div class="bd-callout bd-callout-warning">
                            <p>De forma bem sucinta e para melhor compreensão temos como objetivos do PIA:</p>

                            <ul class="none">
                                <li class="wow fadeInRight" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estimular o adolescente a aderir ao processo socioeducativo, ampliando suas perspectivas futuras;</li>
                                <li class="wow fadeInRight" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> materializar o trabalho social desenvolvido com os adolescentes; </li>
                                <li class="wow fadeInRight" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> sistematizar as análises da equipe técnica e construir estratégias de intervenção com o adolescente; </li>
                                <li class="wow fadeInRight" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> estimular a responsabilização do adolescente por meio das metas estabelecidas em conjunto.</li>
                            </ul>
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
                <a href="Topico03.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.4.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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