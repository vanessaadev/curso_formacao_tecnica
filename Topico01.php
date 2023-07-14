<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">

                        <h2 class="Titulo"> ACOMPANHAMENTO DAS MEDIDAS SOCIOEDUCATIVAS EM MEIO ABERTO</h2>
                        <hr>
                        <br>

                        <p>Antes de iniciarmos a discussão sobre o acompanhamento, abordaremos brevemente o fluxo de procedimentos das medidas socioeducativas em meio aberto a partir do encaminhamento ao SUAS.</p>


                        <br>
                        <h2 class="Titulo"> FLUXO DOS PROCEDIMENTOS DAS MEDIDAS SOCIOEDUCATIVAS EM MEIO ABERTO</h2>
                        <hr>
                        <br>


                        <p>Inicialmente precisamos destacar que segundo o art. 178 do Estatuto da Criança e do Adolescente (ECA, 1990):</p>

                        <p>O adolescente a quem se atribua autoria de ato infracional não poderá ser conduzido ou transportado em compartimento fechado de veículo policial, em condições atentatórias à sua dignidade, ou que impliquem risco à sua integridade física ou mental, sob pena de responsabilidade.</p>

                        <p>O estabelecimento do fluxo de procedimentos em medidas socioeducativas em meio aberto de Liberdade Assistida (LA) e Prestação de Serviços à Comunidade (PSC) inicia-se quando o adolescente comete o ato infracional, e sendo reconhecida sua participação na autoria, é determinada a aplicação da medida socioeducativa, respeitado o devido processo legal. Quando essa medida é de meio aberto o encaminhamento deve ser realizado ao órgão gestor da Política de Assistência Social.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Vejamos agora, o passo a passo desse processo a partir do SUAS:</p>
                                <br>

                                <div class="col-md-12 d-flex">
                                    <div class="col-md-4 col-sm-12">
                                        <p style="border: 2px solid #44833d; padding: 10px;">Encaminhamento do Poder Judiciário, através de ofício, para o Órgão Gestor da Assistência Social ou congênere da seguinte documentação:</p>
                                        <p class="text-center"><i class="fa fa-arrow-down CorVerdeClaroEstado fa-2x"></i></p>

                                        <ul class="none" style="border: 2px solid #44833d; padding: 10px;">
                                            <li>- Guia de execução;</li>
                                            <li>- Termo de audiência;</li>
                                            <li>- Cópia do processo;</li>
                                            <li>- Informações do adolescente e responsável.</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-2 col-sm-12 d-flex align-items-end">
                                        <div class="text-center">
                                            <p style="border: 2px dotted red; padding: 6px; margin: 0 15px 25px 15px;">Atestar data e hora do recebimento.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12 d-flex align-items-center flex-wrap">
                                        <div>
                                            <p style="border: 2px solid #44833d; padding: 10px; margin-left: 10px;">Lei nº 12.594/2012 - Art. 40. Autuadas as peças, a autoridade judiciária encaminhará, imediatamente, cópia integral do expediente ao <strong>órgão gestor do atendimento socioeducativo</strong>, solicitando designação do programa ou da unidade de cumprimento da medida.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        

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



                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

    <!-- BOTÃO BACK TO TOP -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

</body>

</html>