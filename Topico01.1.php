<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico01.1';
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

                        <p class="SubTitulo"> Inserção do Adolescente no SUAS</p>
                        <hr>
                        <br>

                        <p><strong>Legenda:</strong></p>

                        <div class="row col-md-12">
                            <div class="col-md-1"></div>
                            <div class="col-md-5 col-sm-12 d-flex align-items-center justify-content-center">
                                <p class="p-2 m-3 bg-primary text-white"><strong>Liberdade Assistida (LA) e Prestação de Serviços à Comunidade (PSC)</strong></p>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <p class="p-2 m-3 bg-success" style="color: #274f23;"><strong>Liberdade Assistida (LA)</strong></p>

                                <p class="p-2 m-3 bg-warning" style="color: #be531c;"><strong>Prestação de Serviços à Comunidade (PSC)</strong></p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23; border-top: 1px solid #274f23;">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>1 - Recebimento e conferência da devida documentação pela Unidade CREAS</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <ul class="none">
                                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Caso a documentação chegue à Unidade e o adolescente não se apresente, realizar busca ativa:</li>
                                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Não localizando o adolescente, comunicar ao Poder Judiciário (Vara responsável).</li>
                                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Caso o adolescente se apresente e o CREAS não tenha recebido a documentação necessária para execução da medida, a coordenação do equipamento deverá solicitá-la ao Poder Judiciário, via ofício, no prazo de 24 horas.</li>
                                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Nos casos em que a documentação seja enviada ao CREAS e o adolescente compareça à Unidade, deve-se iniciar os procedimentos para o acompanhamento através do Serviço de Proteção Social a Adolescentes em Cumprimento de medida socioeducativa de Liberdade Assistida e Prestação de Serviços à Comunidade.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->
                            <!-- Accordion 02 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>2 - Acolhida Inicial do Adolescente e seu responsável (escuta qualificada e entrevista inicial)</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <ul class="none">
                                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Início da elaboração do PIA (levantamento das informações iniciais), abertura do Prontuário SUAS e realização de encaminhamentos pertinentes;</p>
                                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Definição em conjunto com o adolescente acerca do local de cumprimento da PSC;</p>
                                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Caso necessário, a inserção da família no PAEFI.</p>
                                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Visita institucional ao local de prestação de serviços para apresentar o socioeducando a fim de facilitar a construção dos vínculos, conhecer o espaço e as atividades a serem desenvolvidas.</p>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->
                            <!-- Accordion 03 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>3 - Construção e pactuação do PIA com a participação do adolescente e sua família</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Envio do PIA para homologação pelo Poder Judiciário respeitando o prazo máximo de 15 dias após a acolhida inicial pelo Serviço (Lei 12.594/2012 - Art. 56).</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 03 -->
                            <!-- Accordion 04 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>4 - Acompanhamento do adolescente e sua família</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <ol class="none">
                                            <li>4.1 - Interlocução com os Serviços, Programas e Benefícios do SUAS (CadÚnico, PAEFI, PAIF, SCFV, ACESSUAS Trabalho, Auxílio Brasil, BPC, Benefícios Eventuais, dentre outros);</li>
                                            <li>4.2 - Articulação e encaminhamento para as demais políticas setoriais (educação, saúde, cultura, esporte, trabalho e profissionalização);</li>
                                            <li>4.3 - Acompanhar a frequência e o desempenho do adolescente no cumprimento das atividades realizadas no local da prestação de serviços junto a referência socioeducativa.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 04 -->
                            <!-- Accordion 05 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>5 - Monitoramento do PIA</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <ol class="none">
                                            <li>5.1 - Elaboração e envio periódico de relatório circunstancial de evolução do PIA;</li>
                                            <ol class="none">
                                                <li>5.1.1 - Elaboração e envio periódico de relatório circunstancial de evolução do PIA, considerando o prazo máximo de aplicação da PSC (até 6 meses);</li>
                                            </ol>
                                            <li>5.2 - Reuniões periódicas de avaliação entre as equipes das políticas setoriais que compõem a rede de serviço de atendimento socioeducativo;</li>
                                            <li>5.3 - Participação nas audiências agendadas pelo Poder Judiciário para avaliação da MSE;</li>
                                            <li>5.4 - Registros sistemáticos dos atendimentos prestados e dos dados referentes ao Adolescente (RMA, Prontuário SUAS eletrônico e físico).</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 05 -->
                            <!-- Accordion 06 -->
                            <div class="accordion-item" style="border-bottom: 1px solid #274f23">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>6 - Avaliação e conclusão da MSE</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <ol class="none">
                                            <li>6.1 - Avaliação do processo da MSE junto ao adolescente e sua família;</li>
                                            <li>6.2 - Elaboração e encaminhamento do relatório conclusivo do cumprimento da medida socioeducativa ao Poder Judiciário;</li>
                                            <li>6.3 - Monitoramento da decisão do Poder Judiciário quanto à finalização do processo de MSE:</li>
                                            <br>
                                            <ol class="none">
                                                <li>6.3.1 - Caso o adolescente seja liberado, finalizar o acompanhamento do cumprimento da MSE registrando a avaliação no Prontuário SUAS;</li>
                                                <li>6.3.2 - Caso o adolescente não seja liberado e a medida seja prorrogada ou alterada (mas permaneça em meio aberto), readequar o PIA;</li>
                                                <br>
                                                <ol class="none">
                                                    <li>6.3.2.1 - Caso a família seja acompanhada pelo PAEFI, analisar a possibilidade de readequação do PAF e continuar acompanhamento;</li>
                                                </ol>
                                            </ol>
                                            <br>
                                            <li>6.4 - Devolutiva para o adolescente e sua família da decisão judicial.</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 06 -->

                        </div>
                        <!-- FIM Accordion -->
                        <br><br>

                        <!-- Reflita -->
                        <div class="ReflitaCaixa">
                            <p class="ReflitaTitulo"> Dica</p>
                            <div class="ReflitaTexto">
                                <p>Destacamos a necessidade da pactuação e formalização do fluxo acima com o Poder Judiciário, visando ofertar agilidade, evitar a interrupção do atendimento e, consequentemente, qualificar o acompanhamento com vistas a proteção social e responsabilização dos socioeducandos.</p>
                            </div>
                        </div>
                        <br><br>

                        <p>A seguir, trataremos do acompanhamento oferecido aos adolescentes em cumprimento de medidas socioeducativas, e suas famílias, através do Serviço de proteção social a adolescentes em cumprimento de medida socioeducativa de Liberdade Assistida (LA) e de Prestação de Serviços à Comunidade (PSC) executado pelos CREAS.</p>

                        <p>Vale destacar que, na ausência dessa Unidade, o órgão gestor da Política de Assistência Social, através da Proteção Social Especial, deve atender a demanda adaptando o que prevê o Serviço mas respeitando o SINASE.</p>












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
                <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar </a>
                <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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