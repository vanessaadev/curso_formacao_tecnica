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

                        <!-- Sub Título -->
                        <p class="SubTitulo"> ACORDO DE PARIS E JUSTIÇA CLIMÁTICA </p>
                        <hr>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura16.png" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 16 - MODAL -->
                        <div class="modal fade text-center" id="Imagem16" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura16.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 16 - End -->
                        <br><br>


                        <p>Com o passar do tempo, a crise climática foi se agravando e surgiu a necessidade de metas de redução de emissões mais ambiciosas. Com isso, em 2015 durante a COP 21 em Paris, foi assinado o <strong>Acordo de Paris</strong>, que é um tratado mundial sobre as alterações climáticas. Tem como objetivo reduzir o aquecimento global e <strong>limitar o aumento da temperatura média mundial a 1,5 ºC</strong>, quando comparado a níveis pré-industriais. Para isso, ele estabeleceu metas de redução das emissões, além de outros instrumentos.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura17.jpg" data-bs-toggle="modal" data-bs-target="#Imagem16">
                                <img class="img-fluid wow fadeInLeft" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 17 - MODAL -->
                        <div class="modal fade text-center" id="Imagem17" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura17.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 17 - End -->
                        <br><br>





                        <p>Além da redução das emissões de GEE, uma outra meta do Acordo de Paris é estimular os países desenvolvidos a dar suporte financeiro e tecnológico aos países subdesenvolvidos, de modo a colaborar na ampliação de ações de combate às mudanças climáticas propostas pelos países em desenvolvimento. Outras metas do Acordo de Paris são:</p>

                        <ul class="none">
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Recomendações quanto à adaptação dos países signatários às mudanças climáticas, em especial para os países menos desenvolvidos, de modo a reduzir a vulnerabilidade a eventos climáticos extremos;</li><br>
                            <li class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Estimular o suporte financeiro e tecnológico por parte dos países desenvolvidos para ampliar as ações que levam ao cumprimento das metas para 2020 dos países menos desenvolvidos;</li><br>
                            <li class="wow fadeInUp" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Promover o desenvolvimento tecnológico, transferência de tecnologia e capacitação para adaptação às mudanças climáticas;</li><br>
                            <li class="wow fadeInUp" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Proporcionar a cooperação entre a sociedade civil, o setor privado, instituições financeiras, cidades, comunidades e povos indígenas para ampliar e fortalecer ações de mitigação do aquecimento global.</li>
                        </ul>


                        <p>Uma outra instituição que também é fundamental nos trabalhos voltados para as Mudanças Climáticas é o <strong>Painel Intergovernamental sobre Mudanças Climáticas (IPCC)</strong>, um órgão das Nações Unidas que reúne cientistas independentes de todo o mundo, incluindo pesquisadores brasileiros, responsáveis por avaliar a ciência relacionada às mudanças climáticas.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura19.jpg" data-bs-toggle="modal" data-bs-target="#Imagem19">
                                <img class="img-fluid wow fadeInRight" width="200" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura19.jpg" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 19 - MODAL -->
                        <div class="modal fade text-center" id="Imagem19" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura19.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 19 - End -->
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>O IPCC avalia as informações científicas, técnicas e socioeconômicas mais significativas para contribuir na compreensão sobre os riscos da mudança do clima, seus impactos e as possíveis alternativas de adaptação e mitigação, consolidando essas informações em relatórios periodicamente publicados, chamados Relatórios de Avaliação. O primeiro foi publicado em 1992, e o último em 2023.</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p><a href="https://www.wribrasil.org.br/noticias/10-conclusoes-do-relatorio-do-ipcc-sobre-mudancas-climaticas-de-2023" target="_blank">Saiba quais foram as principais conclusões dos cientistas.</a></p>
                            </div>
                        </div>



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
                <a href="Topico02.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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