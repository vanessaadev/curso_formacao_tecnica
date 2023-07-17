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


                        <p class="Titulo">O PIA COMO INSTRUMENTO METODOLÓGICO DO ACOMPANHAMENTO AO ADOLESCENTE EM CUMPRIMENTO DE MEDIDA SOCIOEDUCATIVO.</p>
                        <hr>
                        <br>

                        <p class="SubTitulo">Conceituação</p>
                        <hr>
                        <br>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>O Plano Individual de Atendimento (PIA) está previsto na Lei do SINASE (Lei nº 12.594//2012), que estabelece a obrigatoriedade de sua elaboração na execução das medidas socioeducativas, definindo-o como “instrumento de previsão, registro e gestão das atividades a serem desenvolvidas com o adolescente” (Art. 52º).</p>
                            </div>
                        </div>
                        <br><br>

                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <p>Dentre várias conceituações existentes acerca do que é, efetivamente, o Plano Individual de Acompanhamento - (PIA) das medidas socioeducativas, elencamos duas abaixo que trazem entendimento bastante pertinente no contexto do meio aberto:</p>
                            </div>

                            <div class="col-md-2 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                    </a>
                                </div>

                                <!-- Imagem 01 - MODAL -->
                                <div class="modal fade text-center" id="Imagem01" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura01.png" alt="Alt da imagem fica aqui">
                                            </div>
                                            <div class="modal-footer text-center">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Imagem 01 - End -->
                                <br>

                            </div>
                        </div>

                        <div class="bd-callout bd-callout-success">
                            <p>Para Adimari, Paes e Costa (2013, p.110) o PIA é “um instrumento fundamental para garantir a equidade do processo socioeducativo, por se tratar da memória registrada e ativa dos mais importantes aspectos da vida e do processo socioeducativo do adolescente”.</p>
                        </div>

                        <p>Segundo o Caderno de Orientações Técnicas: Serviço de Medidas Socioeducativas em Meio Aberto (2016, p.59)</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O PIA é um instrumento de planejamento que deve ser pactuado entre o técnico e o adolescente envolvendo a sua família e as demais políticas setoriais, conforme os objetivos e as metas consensuadas na sua elaboração. Deve ser utilizado como ferramenta para a convergência das ações intersetoriais, estabelecendo objetivos e metas a serem cumpridas pelo adolescente.</p>
                            </div>
                        </div>
                        <br><br>

                        <p>Dessa forma nos permite concluir que o PIA não é um documento pro forma, cartorário, e sim um projeto de vida que assegura os 5 direitos fundamentais elencados no ECA: direito à vida e à saúde; direito à liberdade, ao respeito e à dignidade; direito à convivência familiar e comunitária; direito à educação, à cultura, ao esporte e ao lazer e direito à profissionalização e à proteção no trabalho, devendo ser cumprido de forma gradual, real e inacabada, podendo a qualquer momento ser alterado de forma a contemplar maiores informações acerca do perfil e das singularidades de cada adolescente.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>Para Adimari, Paes e Costa (2013, p. 24) “o PIA é o ‘coração’ da execução da medida socioeducativa”. Trata-se de uma ferramenta VIVA por meio da qual o adolescente pode construir projetos de vida diferentes, que ampliem suas perspectivas de vida e fortaleçam seus laços familiares e comunitários. (BRASIL, 2022, p. 07)</p>
                            </div>
                        </div>
                        <br><br>


                        <p>Para Adimari, Paes e Costa (2013, p. 192) o PIA</p>

                        <div class="bd-callout bd-callout-primary wow fadeIn" data-wow-delay="0.5s">
                            <p>(…) não é apenas um registro passivo da vida e das atitudes do adolescente, mas um instrumento dinâmico que visa acompanhar seu desenvolvimento em relação a uma proposta socioeducativa pactuada entre o adolescente e a equipe multiprofissional e […] também a família. Registra o passado, ao mesmo tempo em que faz planos para o futuro, com atividades práticas e objetivos a serem alcançados no seu processo socioeducativo, pontuando os seus avanços e retrocessos em relação ao plano, visando ao desenvolvimento consciente do adolescente sobre si mesmo e ao acompanhamento e orientação da equipe multiprofissional.</p>
                        </div>

                        <p>O sucesso da execução da medida perpassa a boa elaboração do plano individual de atendimento, de seus subsequentes registros e relatórios, entendendo-se que não se constrói nada sem a consciência de um trabalho solidário, com espírito de colaboração e efetivo respeito ao adolescente e aos seus direitos. Não esquecendo que ele, o adolescente, não se restringe ao ato infracional cometido ou mesmo a medida socioeducativa aplicada, devendo ser visto como sujeito de direitos com necessidades específicas.</p>

                        <p>Partindo das particularidades, e de cada situação a qual o adolescente foi levado ao cumprimento da medida, o PIA deverá conter objetivos, estratégias e ações com finalidades voltadas ao fortalecimento da autonomia, da proteção, do desenvolvimento e dos direitos do adolescente durante todo esse trajeto, considerando as diversidades, singularidades e especificidades de cada caso.</p>

                        <p>A partir do plano individual de atendimento, é que a vida do adolescente em cumprimento de medida se desgarra, ao menos parcialmente, de seu passado, daquilo que o levou a cometer o ato infracional, e se volta mais para o futuro, para seu novo – ou primeiro – projeto de vida. (Adimari, Paes e Costa, 2013, p. 26)</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Importante ressaltar que o PIA deverá ser um instrumento participativo de pactuação, verdadeiramente personalizado, onde as instituições deverão se moldar às necessidades do adolescente em cumprimento, e não o contrário.</p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <!-- Saiba Mais -->
                        <div class="SaibaMaisCaixa">
                            <p class="SaibaMaisTitulo"> Saiba Mais</p>
                            <div class="SaibaMaisTexto">
                                <p>A viabilização do PIA constitui a junção de valores extrínsecos e intrínsecos ao adolescente. Os valores intrínsecos estão ligados aos aspectos subjetivos, que possuem relação direta com a razão (logos), o sentimento (pathos), a corporeidade (eros) e a dimensão espiritual (mythus), enquanto que os valores extrínsecos estão ligados aos compromissos que o adolescente deve alcançar, com o apoio da equipe multidisciplinar, da família e da comunidade, e possuem influência do contexto histórico-social do adolescente.(Adimari, Paes e Costa, 2013, p. 53)</p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <p>Para além dos 5 direitos fundamentais trazidos pelo ECA e citados anteriormente, apresentamos os direitos contidos na Lei do SINASE em seu Art. 49, que são referentes ao adolescente em cumprimento de medida socioeducativa, conforme elencado abaixo.</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Lei do SINASE em seu Art. 49</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p><strong>Art. 49.</strong> São direitos do adolescente submetido ao cumprimento de medida socioeducativa, sem prejuízo de outros previstos em lei:</p>

                                        <ol type="I">
                                            <li> ser acompanhado por seus pais ou responsável e por seu defensor, em qualquer fase do procedimento administrativo ou judicial;</li>
                                            <li> ser incluído em programa de meio aberto quando inexistir vaga para o cumprimento de medida de privação da liberdade, exceto nos casos de ato infracional cometido mediante grave ameaça ou violência à pessoa, quando o adolescente deverá ser internado em Unidade mais próxima de seu local de residência;</li>
                                            <li> ser respeitado em sua personalidade, intimidade, liberdade de pensamento e religião e em todos os direitos não expressamente limitados na sentença;</li>
                                            <li> peticionar, por escrito ou verbalmente, diretamente a qualquer autoridade ou órgão público, devendo, obrigatoriamente, ser respondido em até 15 (quinze) dias;</li>
                                            <li> ser informado, inclusive por escrito, das normas de organização e funcionamento do programa de atendimento e também das previsões de natureza disciplinar;</li>
                                            <li> receber, sempre que solicitar, informações sobre a evolução de seu plano individual, participando, obrigatoriamente, de sua elaboração e, se for o caso, reavaliação;</li>
                                            <li> receber assistência integral à sua saúde, conforme o disposto no art. 60 desta Lei;</li>
                                            <li> ter atendimento garantido em creche e pré-escola aos filhos de 0 (zero) a 5 (cinco) anos. (BRASIL, 2012)</li>
                                        </ol>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->
                        </div>
                        <!-- FIM Accordion -->
                        <br><br>

                        <p>Além disso, é de suma importância destacar os artigos 41, 42 e 44, que abordam o PIA e que ele deve ser submetido a avaliação do juiz quanto a sua homologação (tardia ou tácita), sua avaliação a cada semestre e as alterações pertinentes ao seu contexto, desde que autorizado pela autoridade judiciária.</p>







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
                <a href="Topico02.4.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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