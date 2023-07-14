<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03';
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
                        <p class="Titulo">ADAPTAÇÕES A UM CLIMA EM MUDANÇA </p>
                        <hr>
                        <br>

                        <p>O clima está mudando, e continuará mudando, mesmo que as emissões de GEE parem por completo. Com essa terrível constatação dos cientistas, a adaptação aos efeitos adversos da mudança do clima tornou-se uma preocupação ainda maior, após a divulgação do 4º Relatório do IPCC, que afirma que <em><strong>“o aquecimento do sistema climático é inequívoco, como agora é evidente pelas observações dos aumentos das temperaturas médias do ar e dos oceanos, o derretimento generalizado de neve e gelo e o aumento global médio do nível do mar”.</strong></em></p>

                        <p>Há um consenso entre os países de que será necessário promover medidas de adaptação em escala nacional e global, independente dos esforços de redução das emissões, já que a ocorrência de algum nível de mudança do clima é inevitável. O estabelecimento de medidas de adaptação representa uma estratégia essencial para a redução da severidade do impacto e dos custos da mudança do clima atual e futuro.</p>

                        <p>Existem várias ações para se adaptar melhor a um planeta em aquecimento, como o planejamento dos espaços onde as pessoas vivem, para que seja possível lidar melhor com verões mais quentes e chuvas mais intensas, intercalados com períodos cada vez mais longos de seca.</p>

                        <p>No caso do Nordeste, a gestão adequada dos recursos hídricos é fundamental para as épocas de seca, que estão sendo cada vez mais frequentes.</p>

                        <p>Independente da ação, o importante é que ela seja planejada para resolver o problema ou o risco criado com a mudança do clima. Por isso, o sucesso das medidas de adaptação dependerá:</p>

                        <ul class="none">
                            <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da detecção do risco;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da percepção do risco tanto pelo indivíduo como pela sociedade;</li>
                            <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dos objetivos, critérios e justificativas adotados para intervenção;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Da escala de implementação das ações;</li>
                            <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Do contexto no qual o risco se insere para que a ação e adaptação seja realizada.</li>
                        </ul>





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
                <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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