<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.2';
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

                        <h2 class="SubTitulo"> SE O CLIMA MUDA, TUDO MUDA </h2>
                        <hr>
                        <br>

                        <div class="container">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura06.jpg" data-bs-toggle="modal" data-bs-target="#Imagem05">
                                            <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 05 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura06.jpg" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 05 - End -->
                                </div>
                                <div class="col-6 col-md-6">
                                    <!-- Titulo Figura -->
                                    <div class="text-center">
                                        <a href="imagens/Figura07.jpg" data-bs-toggle="modal" data-bs-target="#Imagem07">
                                            <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura07.jpg" alt="Alt da imagem fica aqui">
                                        </a>
                                    </div>

                                    <!-- Imagem 07 - MODAL -->
                                    <div class="modal fade text-center" id="Imagem07" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img class="img-fluid" src="imagens/Figura07.jpg" alt="Alt da imagem fica aqui">
                                                </div>
                                                <div class="modal-footer text-center">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Imagem 07 - End -->
                                </div>
                            </div>
                            <br><br>


                            

                            <p>As mudanças climáticas geram diversos tipos de consequências que afetam a todos no Planeta, desde a biodiversidade das Calotas Polares até a moradia das pessoas que vivem na Caatinga.</p>


                            <div class="bd-callout bd-callout-warning">
                                <p>“Neste sentido, as regiões semiáridas do mundo, como o Ceará e boa parte do Nordeste do Brasil, são caracterizadas como uma das regiões de maior vulnerabilidade ambiental e climática, que irão sofrer com perdas na qualidade e disponibilidade água para a agricultura, refletindo em impactos socioeconômicos como perdas de produtividade e êxodo rural. A agricultura em ambientes semiáridos será severamente afetada pelas mudanças do clima, uma vez que o aumento na temperatura e a diminuição da precipitação resulta em um aumento na evapotranspiração e uma diminuição na quantidade de água no solo disponível para os cultivos, associado a uma menor oferta de água para a irrigação. Além disso, as previsões para as mudanças climáticas apontam para uma intensificação de processos de degradação dos solos, como salinização, erosão, redução dos estoques de matéria orgânica e perda de biodiversidade do solo. Assim, a agricultura cearense encontra-se em um eminente risco, o que poderá decorrer em uma diminuição da segurança alimentar e redução de renda dos agricultores.”</p>

                                <p>Fonte: Plano Estadual para Adaptação à Mudança do Clima e Baixa Emissão de Carbono na Agropecuária com vistas ao Desenvolvimento Sustentável (ABC+CE, 2020-2030)</p>
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
                    <a href="Topico01.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico01.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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