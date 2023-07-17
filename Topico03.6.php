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

                    <p class="SubTitulo">Quando elaborar o PIA </p>
                        <hr>
                        <br>

                        <p>A elaboração do PIA inicia-se no momento da acolhida do adolescente, e deve ser monitorado e avaliado com vistas a identificar a necessidade de modificações em suas ações e metas, pactuadas durante a trajetória socioeducativa. Esta prática vale para as duas medidas socioeducativas em meio aberto, Liberdade Assistida - LA e Prestação de Serviços à Comunidade - PSC, lembrando que a última não se resume à realização das atividades nas instituições parceiras. </p>

                        <p>Cabe evidenciar que o PIA não deve se restringir à coleta de informações pessoais e nem ao plano inicial enviado ao Judiciário no prazo de até 15 dias, conforme previsto no artigo 56 da Lei 12.594/2012, pois configura-se como um processo ativo, dinâmico, no qual o fazer socioeducativo se dá em tempo integral, podendo ser modificado, justificadamente, a qualquer tempo e, repactuado, lembrando sempre que estamos trabalhando com pessoas em condição peculiar de desenvolvimento. (BRASIL, 2022).</p>

                        <p>A contagem do prazo legal para envio do PIA das medidas socioeducativas em meio aberto é de 15 (quinze) dias corridos, a contar da data da acolhida com atenção ao que determina o Art. 152, §2º do ECA. </p>



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