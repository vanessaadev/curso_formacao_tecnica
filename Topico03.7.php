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

                    <p class="SubTitulo">Princípios norteadores na elaboração do PIA </p>
                        <hr>
                        <br>


                        <p>Garantia do direito e do superior interesse do adolescente - Todo o processo de elaboração e desenvolvimento do PIA, deve buscar a garantia dos direitos fundamentais (saúde, educação, cultura, esporte e lazer, direito à profissionalização e a proteção no trabalho, direito à liberdade, ao respeito e a dignidade e convivência familiar e comunitária);</p>
                        <p>Atenção as especificidades, respeito à diversidade e não discriminação - A elaboração e a implementação do PIA deve contar, também, com ações que considerem a atenção às diversidades, especificidades e o reconhecimento da singularidade de cada adolescente e de sua família, com vistas a atender adequadamente suas necessidades e fortalecer suas potencialidades;</p>
                        <p>Temporalidade - A elaboração do PIA e o desenvolvimento de suas estratégias e ações devem, necessariamente, contar com prazos e o menor tempo necessário para que possa viabilizar com segurança, a reintegração do adolescente a suas atividades cotidianas;</p>
                        <p>Participação do adolescente e da família no PIA - Na elaboração e desenvolvimento do PIA, deve-se assegurar a escuta e o olhar individualizado para o adolescente, a fim de conhecer suas expectativas, desejos, medos e opiniões.</p>

                        <p>É de suma importância que sejam oportunizados momentos nos quais os adolescentes possam ter acesso a informações sobre a situação jurídica e familiar, demonstrar o que esperam e participar das decisões que impactem no seu desenvolvimento e na sua trajetória. Essa participação deve estar sempre associada à avaliação quanto aos riscos à sua integridade física e psíquica, e a promoção aos direitos assegurados no ECA.</p>

                        <p>É importante que a participação do adolescente seja conduzida de forma cuidadosa, por meio de estratégias adequadas ao seu estágio de desenvolvimento, como também não é menos importante que a família seja incluída, participativamente, no processo de elaboração e implementação do PIA. Visando que as suas expectativas, motivações, potencialidades, dificuldades, necessidades e desejos sejam conhecidos e possam opinar, sobretudo, quanto ao desenvolvimento das atividades na perspectiva de novas conquistas para a construção de uma “nova vida”.</p>



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