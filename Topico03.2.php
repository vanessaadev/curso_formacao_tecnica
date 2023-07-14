<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.2';
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

                        <p class="SubTitulo">MITIGAR E SE ADAPTAR</p>
                        <hr>
                        <br>

                        <p>Ações de mitigação são prioritárias, pois atuam nos processos que causam mudança do clima. Reduzindo as emissões, teremos menos desafios na adaptação ao clima. Contudo, as duas ações devem ser implementadas ao mesmo tempo e podem ser motivadas por interesses e prioridades locais, regionais ou pelas preocupações globais.</p>
                        <p>Temos as diferenças entre o alcance dos efeitos das ações de mitigação e de adaptação: <button class="toggle btn btn-success" data-state="more"> Clique aqui para conferir</button></p>

                        <div class="text2">
                            <table class="table" style="border: 1px solid #ffa73e;">
                                <thead style="background-color: #ffa73e;">
                                    <tr class="text-center">
                                        <th scope="col"><strong>Ação</strong></th>
                                        <th scope="col"><strong>Efeitos</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row"><strong>Mitigação</strong></td>
                                        <td>
                                            <ul class="none">
                                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Tem efeitos globais, mesmo que suas ações tenham sido realizadas localmente. Envolve um maior número de países.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> As ações de reduções de emissões de CO2 podem ser alcançadas por diferentes ações de mitigação, podendo haver comparação entre uma ação e outra, da sua eficácia e do seu custo efetividade.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Os benefícios das medidas de mitigação hoje serão sentidos em algumas décadas e não imediatamente, devido ao caráter de permanência dos GEE na atmosfera.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O retorno dos custos aplicados em medidas de mitigação é mais demorado do que o retorno dos seus benefícios.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row"><strong>Adaptação</strong></td>
                                        <td>
                                            <ul class="none">
                                                <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Funciona em uma escala de sistema de impactos regionais, mas que geralmente são sentidos localmente.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> Por seu caráter local ou regional, os efeitos e benefícios das medidas de adaptação serão valorizados diferentemente, dependendo das questões sociais, econômicas e do contexto político no qual a ação está inserida.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> As medidas de adaptação são eficazes a curto prazo, trazendo benefícios na redução da vulnerabilidade à variabilidade climática natural.</li>
                                                <li class="wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> O retorno dos gastos com adaptação e redução de vulnerabilidades são bem mais rápidos e mais fáceis de serem visualizados pela população e agentes políticos.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <span class="overflow2" data-state="visible" aria-hidden="true"></span>
                        </div>
                        <br>

                        <p>Para a adoção dessas ações, é necessário considerar as especificidades regionais, as diferenças de percepção, a identificação do problema e a aceitação local da medida.</p>

                        <p>As ações de combate à mudança do clima tendem a ser muito mais duradouras, eficazes e sustentáveis se estiverem atribuídas e atreladas a outros benefícios, tais como o ganho efetivo de geração de emprego e renda e incremento do desenvolvimento sustentável. Isso acarreta em uma maior força técnica e política na sua implementação, e contribui para uma maior aceitação das pessoas e consequente mudança de comportamento.</p>

                        <p>A problemática das mudanças climáticas é real, e são necessários não apenas compromissos globais pelo clima, mas também ações coletivas e individuais que reduzam as emissões, promovam a adaptação e acima de tudo conduzam a humanidade para uma nova forma de ser e estar no mundo que considere as questões ambientais como prioridade, pois sem o meio ambiente não há vida na Terra.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura24.png" data-bs-toggle="modal" data-bs-target="#Imagem24">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                <p class="TituloFigura">AJAs de Barroquinha/CE em ação. <br> Foto: @ajaambiental_barroquinha <br> Foto: SEMA.</p>
                            </a>
                        </div>

                        <!-- Imagem 24 - MODAL -->
                        <div class="modal fade text-center" id="Imagem24" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura24.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 24 - End -->
                        <br>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Essa é sua principal missão como um AGENTE JOVEM AMBIENTAL. Qualquer que seja o tema do seu Projeto, ele deve contribuir contra as mudanças climáticas de algum modo. Por isso você tem que agir e incentivar os outros a agir também! Todos juntos pelo clima!</p>
                            </div>
                        </div>






                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script src="cdn-2022/assets/js/show-more.js"></script>

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
                <a href="Topico04.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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