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
        <div class="main-content container-fluid">
            <div class="row"> <!-- Begin row -->
                <div class="col-md-1"></div>
                <div class="col-md-10"> <!-- Begin col-md-10 -->
                    <div class="page-title">

                        <div class="bd-callout bd-callout-success">

                            <h2 class="Titulo">REFERÊNCIAS</h2>
                            <br><br>

                            <p class="Texto">Luiz Marques - <strong>“O DECENIO DECISIVO - Propostas para uma política de sobrevivência”</strong> - EDITORA ELEFANTE, 2023</p>

                                <p class="Texto">Malcom Ferdinand - <strong>“Uma ecologia decolonial: pensar a partir do mundo caribenho”</strong>, UBU Editora, 2022</p>

                                <p class="Texto">Bruno Latour - <strong>“Diante de Gaia: Oito conferências sobre a natureza no Antropoceno”</strong> – UBU Editora, 2020</p>

                                <p class="Texto">Amitav Ghosh - <strong>“O Grande Desatino: mudanças climáticas e o impensável”</strong> – Quina Editora, 2022</p>

                                <p class="Texto"><a href="https://ecokidsecoteens.mpba.mp.br/noticias/conheca-os-principais-gases-de-efeito-estufa-gee/" target="_blank">https://ecokidsecoteens.mpba.mp.br/noticias/conheca-os-principais-gases-de-efeito-estufa-gee/</a></p>

                                <p><a href="https://netzero.projetodraft.com/cop-27-conheca-a-historia-e-as-principais-decisoes-da-mais-importante-conferencia-climatica-do-mundo" target="_blank"> https://netzero.projetodraft.com/cop-27-conheca-a-historia-e-as-principais-decisoes-da-mais-importante-conferencia-climatica-do-mundo</a></p>

                                <p><a href="https://www.wribrasil.org.br/noticias/10-conclusoes-do-relatorio-do-ipcc-sobre-mudancas-climaticas-de-2023" target="_blank">https://www.wribrasil.org.br/noticias/10-conclusoes-do-relatorio-do-ipcc-sobre-mudancas-climaticas-de-2023</a></p>

                                <p><a href="https://www.sema.ce.gov.br/wp-content/uploads/sites/36/2018/11/M5-Mudan%C3%A7as-Clim%C3%A1ticas-e-Ambientais.pdf" target="_blank">https://www.sema.ce.gov.br/wp-content/uploads/sites/36/2018/11/M5-Mudan%C3%A7as-Clim%C3%A1ticas-e-Ambientais.pdf</a></p>

                                <p><a href="https://antigo.mctic.gov.br/mctic/opencms/ciencia/SEPED/clima/ciencia_do_clima/painel_intergovernamental_sobre_mudanca_do_clima.html" target="_blank">https://antigo.mctic.gov.br/mctic/opencms/ciencia/SEPED/clima/ciencia_do_clima/painel_intergovernamental_sobre_mudanca_do_clima.html</a></p>


                        </div>



                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });
                        </script>

                    </div> <!-- CLASS PAGE TITLE FIM -->
                </div> <!-- End col-md-10 -->

                <div class="col-md-1"></div>
            </div> <!-- End row-->

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico04.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <!-- <a href="http://cursos.egp.ce.gov.br/mod/quiz/view.php?id=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"> Realizar Atividade Avaliativa <i class="fa fa-chevron-right"></i></a> -->
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