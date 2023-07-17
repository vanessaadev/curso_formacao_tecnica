<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.4';
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

                    <p class="SubTitulo">Acompanhamento da Liberdade Assistida - LA</p>
                        <hr>
                        <br>

                        <p>Durante o acompanhamento da Liberdade Assistida, precisamos nos atentar a algumas etapas, como:</p>

                        <div class="bd-callout bd-callout-primary">
                            <p><strong>Acolhida:</strong> a equipe técnica realizará o agendamento com a família para o atendimento, quando a mesma não comparecer de forma voluntária à unidade. Todavia, a equipe tem autonomia quanto a metodologia utilizada no acompanhamento, incluindo as visitas domiciliares para o primeiro atendimento, conforme o perfil do adolescente. Na realização desse atendimento é preciso considerar:</p>

                            <ul class="none">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Apresentação do serviço e da equipe técnica;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Orientações acerca da metodologia do acompanhamento;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Esclarecimentos sobre as consequências do descumprimento da LA;</li>
                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Identificação de demandas urgentes da família e os possíveis encaminhamentos para a rede de apoio.</li>
                            </ul>
                        </div>


                        <p>Após a acolhida, a equipe consultará os dados socioassistenciais da família no Cadastro Único, visando coletar dados básicos de forma mais ágil, priorizando nos atendimentos a qualificação das informações. A partir da data de registro de evolução no prontuário do adolescente, com tempo mínimo de 6 (seis) meses, se inicia o prazo de cumprimento da LA.</p>

                        <p>Ressalta-se que, caso a acolhida não seja exitosa, a equipe deve encaminhar ofício para o Poder Judiciário informando a situação e, se necessário, solicitando dilação de prazo para resposta. Persistindo do não comparecimento do adolescente ao atendimento inicial, a equipe enviará relatório circunstancial ao Poder Judiciário comunicando a situação e solicitando providências.</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Atendimento inicial de elaboração do PIA:</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <p>Na Acolhida, a equipe realiza o atendimento individual com a família e o adolescente, para subsidiar informações iniciais para o preenchimento do PIA, que deve ser elaborado em até 15 dias, a contar da data de do atendimento inicial.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Acompanhamento do PIA – Instrumentos e estratégias de acompanhamento:</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>Comunicação interinstitucional: </strong> o fluxo de relação entre a equipe técnica e as instituições para onde o adolescente for encaminhado devido a aplicação do PIA. A equipe técnica acordará com as instituições a periodicidade do envio dos relatórios técnicos de acompanhamento, onde deve constar informações sobre sua assiduidade, comportamento e sua evolução, e o mesmo deve ser anexado junto ao prontuário, bem como fundamentar os relatórios emitidos pelo CREAS;</p>

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i><strong> Atendimento individual:</strong> são os atendimentos técnicos realizados pela equipe técnica com o adolescente, em que deve haver periodicidade prevista no PIA. A equipe avaliará se os atendimentos serão realizados com o adolescente e a família em conjunto ou separado.</p>

                                        <p>A finalidade destes atendimentos sempre avaliará os compromissos acordados do PIA. Caso seja identificado algum sinal de descumprimento da LA, a equipe verificará os impedimentos, na perspectiva restaurativa e não punitiva, e a partir das condições expostas deve-se estabelecer novos acordos.</p>

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i><strong> Visita domiciliar:</strong> realizada pela equipe técnica no domicílio do adolescente e sua família. Demandas serão identificadas e encaminhadas pela equipe para a rede de apoio.</p>

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i><strong>Visita institucional:</strong> realizada pela equipe técnica à instituição/unidade da rede de apoio onde foi realizado o(s) encaminhamento(s) do adolescente, ou quando solicitado pela rede, a fim de obter informações para o preenchimento do PIA.</p>

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i><strong> Atendimento de avaliação da medida socioeducativa:</strong> a equipe técnica agendará o atendimento com o adolescente e a família a fim de avaliar o cumprimento da LA. Inicialmente é necessário ouvir a opinião do adolescente quanto a autoavaliação durante o acompanhamento para cumprimento da medida. Seguidamente, é importante ouvir a opinião da família/responsável. Por fim, deve-se analisar juntamente ao PIA, sobre os acordos que foram descumpridos e os motivos que o levaram a isso.</p>

                                        <p><i class="fa fa-dot-circle CorVerdeClaroEstado"></i><strong> Elaboração do Relatório Final:</strong> será elaborado pela equipe técnica com base nas evoluções do prontuário, relatórios técnicos recebidos e encaminhados e registros do PIA, acrescentado com a avaliação final sobre o cumprimento da medida. Vale destacar a importância da equipe técnica sugerir ao Poder Judiciário, algum parecer acerca do cumprimento total ou parcial. Quando o relatório técnico final for enviado ao Poder Judiciário (Vara da Infância e da Juventude), cessará o acompanhamento da equipe, que aguardará a devolutiva.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->
                        </div>
                        <!-- FIM Accordion -->
                        <br><br>



                        <p>Se o adolescente cumprir por total a LA, porém, os encaminhamentos realizados durante o acompanhamento não forem finalizados, a equipe técnica encaminhará o adolescente e a família para o CRAS dar continuidade. No entanto, havendo demanda decorrente de violação de direitos, o mesmo continua o atendimento pela equipe de referência através do Serviço PAEFI.</p>

                        <p>No caso do adolescente que foi engajado na LA, a equipe construirá um novo PIA e avaliará o que foi elaborado inicialmente, para identificar e corrigir possíveis equívocos do acompanhamento, que fizeram o Poder Judiciário aumentar o prazo do cumprimento.</p>

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
                    <a href="Topico02.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico03.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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