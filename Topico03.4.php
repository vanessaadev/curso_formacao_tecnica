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

                        <br>
                        <p class="SubTitulo">O PIA deve conter: </p>
                        <hr>
                        <br>

                        <p>Tendo como referência o Art. 54º da Lei nº 12.594/2012 constarão no Plano Individual de Atendimento, no mínimo: </p>

                        <ol type="I">
                            <li class="wow fadeInRight" data-wow-delay="0.3s">os resultados da avaliação interdisciplinar; </li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s">os objetivos declarados pelo adolescente; </li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s">a previsão de suas atividades de integração social e/ou capacitação profissional; </li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s">atividades de integração e apoio à família; </li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s">as formas de participação da família para efetivo cumprimento do plano individual; </li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s">as medidas específicas de atenção à sua saúde. </li>
                        </ol>



                        <p> O Caderno de Orientações do Serviço de MSE em Meio Aberto (2016) apresenta elementos que deverão constar na proposta do PIA. São eles:</p>

                        <ul class="none">
                            <li class="wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Dados de identificação do adolescente: nome, idade, apelido, nome do pai, mãe ou responsável, endereço, composição familiar, telefone, e-mail ou outras formas de contato; </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Escolaridade (série e escola em que estuda) e histórico educacional; </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Vida profissional (habilidade, experiência de trabalho, interesses profissionais e cursos que eventualmente já tenha feito); </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Saúde (estado geral de saúde: se possui alguma enfermidade, se usa algum medicamento, última visita média, se possui informações sobre IST’s, se faz uso abusivo de substâncias psicoativas, entre outros); </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Vida sexual (se tem vida sexual ativa, se usa algum método contraceptivo); </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Histórico em relação à execução de medidas socioeducativas; </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Informações sobre atividades de cultura, esporte, lazer (o que gosta de fazer, se tem algum hobby, o que faz nas horas vagas, se já fez algum tipo de curso ou oficina para o desenvolvimento da expressão ou da criatividade, se existem grupos/equipamentos culturais em seu bairro); </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Informações processuais (sentença de aplicação da medida socioeducativa que passará a cumprir, ou decisão judicial com as informações necessárias, no caso de homologação, ou de progressão de medida; ato infracional praticado; informações sobre datas referentes ao processo, defensor, promotor e juiz responsáveis);</li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Registro de Documentos do adolescente ou tomada de providências em caso de não possuir carteira de identidade, CPF, Carteira de Trabalho – quando couber – e outros referentes à sua identificação; </li>
                            <br>
                            <li class="wow fadeInUp" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Atuais perspectivas, projetos de vida e áreas de interesse. </li>
                        </ul>
                        <br>

                        <p>Segundo Adimari, Paes e Costa (2013) o planejamento das metas e ações previstas na construção do PIA deverão ser sinalizadas nas demandas do adolescente e sua família relativas aos seguintes aspectos, considerados indissociáveis: <button class="btn btn-success" onclick="toggleText('texto2')"><span class="text-white botaoEscondidoLink"><strong>Clique aqui para ver mais <i class="fa fa-search" aria-hidden="true"></i></strong></span></button></p>
                        <!-- Texto escondido -->
                        <span id="texto2" class="oculto">
                            <div class="caixaEscondido">
                                <ul class="none">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>jurídico:</strong> acompanhamento da situação processual relativa ao ato infracional e à medida aplicada;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>saúde física e mental:</strong> análise de demandas de assistência específicas, bem como ações preventivas e curativas;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>psicológico:</strong> análise dos recursos psíquicos, da subjetividade, das condições de desenvolvimento;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>psicossocial:</strong> análise das relações sociais, familiares e comunitárias, identificação de aspectos facilitadores e dos obstáculos à inclusão social;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> <strong>pedagógico:</strong> análise dos aspectos relativos à escolarização, profissionalização, cultura, esporte e lazer.</li>
                                </ul>
                            </div>

                        </span>
                        <br><br>
                        <!-- Fim Texto Escondido  -->


                        <p>Diante do exposto, entende-se que o PIA é o plano de trabalho que dá instrumentalidade para o desenvolvimento pessoal e social do adolescente em cumprimento de medida socioeducativa, respeitando suas características pessoais e circunstâncias concretas de sua vida, devendo, portanto atentar as individualidades e as ações do sujeito na sua singularidade, temporalidade e no superior interesse do adolescente. Não esquecendo também de considerar a forma de comunicação, o diálogo, respeito a trajetória de vida e suas demais dimensões.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura03.png" data-bs-toggle="modal" data-bs-target="#Imagem03">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                            </a>
                            <p class="FonteFigura">Fonte: Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto (BRASIL, 2022, p. 31).</p>
                        </div>

                        <!-- Imagem 03 - MODAL -->
                        <div class="modal fade text-center" id="Imagem03" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura03.png" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 03 - End -->


                        <br><br><!-- SCRIPT LIGHTBOX -->
                        <script src="./cdn-2022/assets/js/hidediv.js"></script>
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
                <a href="Topico03.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.5.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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