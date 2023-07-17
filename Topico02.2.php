<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.2';
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

                    <p class="SubSubTitulo">Prontuário SUAS físico</p>
                        <hr>
                        <br>

                        <p>Utilizado pelas equipes de referência das Unidades Socioassistenciais, CRAS, CREAS e Centro POP, tem como principal característica, o registro detalhado acerca dos atendimentos e acompanhamentos realizados juntos às famílias/indivíduos. Além disso, permite apontamentos, concomitantes, do acompanhamento realizado por mais de um Serviço na mesma Unidade.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O Prontuário SUAS físico deverá ser utilizado concomitantemente com o Prontuário Eletrônico Simplificado.</p>

                                <p>A Resolução da CIB-CE nº 013/2018 pactua e a Resolução do CEAS nº 022/2018 aprova que no Ceará o Prontuário SUAS deve ser utilizado pelos profissionais de nível superior das equipes de referência das Unidades CRAS e CREAS responsáveis pelo acompanhamento familiar realizado pelo PAIF e PAEFI, independente da existência de conselho ou organização de classe.
                                </p>
                            </div>
                        </div>
                        <br><br>


                        <p>Conforme o Caderno de Orientações Técnicas – Serviço de Medidas Socioeducativas em Meio Aberto:</p>

                        <div class="bd-callout bd-callout-success">
                            <p>Sempre que é aberto um novo Prontuário SUAS, ou realizado algum registro/atualização das informações nele contidas, os registros correspondentes a essas novas informações devem ser inseridos também no Prontuário Eletrônico. (Brasil, 2016, pág.71)</p>
                        </div>

                        <p class="SubSubTitulo">Prontuário SUAS Eletrônico Simplificado</p>
                        <hr>
                        <br>


                        <p>O Prontuário SUAS eletrônico simplificado tem como característica o registro de informações de forma célere e de fácil manuseio, facilitando a visualização dos atendimentos realizados junto às famílias e indivíduos. Ele teve origem do Formulário 2 anexo ao Registro Mensal de Atendimento – RMA inicialmente utilizado pelas Unidades.</p>

                        <p>Para o registro de informações sobre as ações realizadas especificamente junto aos adolescentes em cumprimento de MSE, o prontuário simplificado através do NIS do adolescente possibilita o acesso aos seguintes dados:</p>

                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="2.5s">O registro das medidas em cumprimento</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="2.5s">O local de cumprimento da medida</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.9s" data-wow-duration="2.5s">Data do desligamento do Serviço</p>
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="1.3s" data-wow-duration="2.5s">Data de início do Acompanhamento</p>
                        </div>


                        <p>Outro ponto importante, diz respeito à inserção dos adolescentes em cumprimento de LA e PSC e sua família no CadÚnico (2016, p. 68):</p>

                        <div class="bd-callout- bd-callout-success">
                            <p>(…) a inserção das famílias no Cadastro Único e a devida identificação do adolescente e seu respectivo NIS no Prontuário Eletrônico Simplificado constituem procedimentos que devem ser, obrigatoriamente, incorporados ao processo de trabalho de técnicos e gestores, iniciados desde o momento da acolhida.</p>
                        </div>

                        <p>O acesso ao Prontuário Eletrônico Simplificado é online, a partir da criação de usuário e senha, via Sistema de Autenticação e Autorização – SAA Web, sendo esse o mesmo acesso concedido ao RMA.</p>

                        <p>Realçamos que a efetividade do trabalho social realizado com os adolescentes em cumprimento de medidas socioeducativas em meio aberto e suas famílias, dependerá da união de esforços envolvendo o adolescente, a família e a rede proteção local.</p>



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
                <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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