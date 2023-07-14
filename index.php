<?php
$page = 'Apresentacao';
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

        <div class="main-content container-fluid" id="#Apresentacao">
            <!-- Begin main-content -->
            <div class="row">
                <!-- Begin row -->
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <!-- Begin col-md-10 -->
                    <div class="page-title Texto">


                        <h2 class="Titulo">Apresentação</h2>
                        <hr>
                        <br>

                        <p>Olá, AJA!</p>
                        <p>Pronto para mais um passo?</p>
                        <p>Depois de entendermos que a <strong>Vida é conexão e troca</strong>, que nós estamos conectados com a atmosfera através da respiração, que nosso alimento está conectado com o solo onde ele é produzido, que os rios estão conectados com a cidade em que moramos e que as florestas estão conectadas com o ar que respiramos, aprendemos que nós humanos e não humanos (plantas e bichos) formamos uma grande paisagem chamada Biosfera.</p>

                        <p>Aprendemos também, que todos os elementos dessa paisagem estão em relação ativa com todos os outros elementos, onde cada ação, cada comportamento, cada gesto de um dos integrantes dessa paisagem altera em maior ou menor escala toda a paisagem, como em uma grande Teia da Vida.</p>

                        <p>Nos módulos 02 e 03 estudamos sobre o consumo, os ciclos de produção e descarte dos resíduos sólidos e dos usos da água. Naqueles módulos, nós vimos que o ser humano, a partir do desenvolvimento da agricultura, começou a alterar suas relações com a natureza. Vimos também que, nos últimos 500 anos, com o sistema de produção agrícola denominado <em>Plantation</em>, essa pressão sobre o Meio Ambiente se intensificou. E por fim, a partir da Revolução Industrial, o sistema de produção e circulação de mercadorias ganhou velocidade, causando uma pressão extrema sobre os solos, as florestas, os rios, os oceanos e sobre a atmosfera.</p>
                        
                        <br><h2 class="Titulo">MUDANÇAS CLIMÁTICAS</h2>
                        <hr>
                        <br>

                        <p>No módulo 04, vamos nos aprofundar sobre os efeitos dessas alterações causadas no meio ambiente, decorrentes do aquecimento global, fruto dessa sobrecarga no Planeta.</p>

                        <p>Este módulo é fundamental para uma compreensão do nosso tempo em escala global. Nele compreenderemos a importante tarefa que você AJA desempenhará na sua comunidade.</p>

                        

                        <!-- SCRIPT LIGHTBOX -->
                        <script>
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                event.preventDefault();
                                $(this).ekkoLightbox();
                            });

                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            });

                            $(function() {
                                $('.example-popover').popover({
                                    container: 'body'
                                })
                            });
                        </script>

                    </div> <!-- End page-title -->
                </div> <!-- End page-title -->

                <div class="col-md-1"></div>
            </div> <!-- End row -->

            <br>
            <br>

            <!-- Botões de navegação -->
            <div class="text-center">
                <a href="Topico01.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
            </div>

        </div> <!-- End main-content -->


        <!-- FOOTER -->
        <?php include('layout/footer.php') ?>

    </div> <!-- DIV MAIN FIM -->

    <!-- FOOTER JS -->
    <?php include('layout/js.php') ?>

</body>

</html>

