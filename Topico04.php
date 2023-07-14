<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico04';
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
                        <p class="Titulo">ROLÊ INVESTIGATIVO </p>
                        <hr>


                        <p>Esse Módulo foi quente, né?</p>

                        <p>Muita responsabilidade pela frente. Talvez seja bom você reler, com calma, porque este tema é fundamental para entender o presente e pensar o futuro.</p>




                        <div class="bd-callout bd-callout-primary">
                            <p>Antes de voltar ao texto, vou te propor um rolê diferente. Desta vez, nada de caderninho, nada de desenhos ou reflexões. Desta vez você vai pensar com o coração, refletir com afeto.</p>

                            <p>Procure um lugar nos arredores de sua casa em que você se sinta bem em estar lá. Lá você vai apenas sentar e sentir o seu território. Deixe o pensamento livre. Fique descalço. Bote o pé no chão. Fique nesse lugar o tempo que você quiser. Em silêncio de preferência. Faça respirações profundas e sinta o local. Observe, escute por alguns minutos. Esse é o seu planeta. Depois volte para casa.</p>

                        </div>
                        <br>


                        <p><strong>É só isso. No próximo módulo a gente comenta essa experiência. Até lá. Agora siga para a avaliação.</strong></p>






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
                <a href="Referencias.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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