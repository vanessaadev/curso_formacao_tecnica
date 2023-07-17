<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02';
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

                        <h2 class="Titulo">ACOMPANHAMENTO AO ADOLESCENTE EM CUMPRIMENTO DE MEDIDAS SOCIOEDUCATIVA EM MEIO ABERTO E SUA FAMÍLIA</h2>
                        <hr>
                        <br>


                        <p class="SubTitulo">A complementaridade do Serviço das Medidas Socioeducativas em meio aberto com os demais Serviços do SUAS.</p>
                        <hr>
                        <br>

                        <p>Conforme previsto nas legislações do SUAS, dentre os eixos estruturantes desse sistema, destacamos a matricialidade sociofamiliar, onde o foco das nossas intervenções é a família, instituição central para o desenvolvimento do trabalho social.</p>
                        <p>O serviço das medidas socioeducativas deve dialogar com os principais serviços da Proteção Social Básica e Especial, PAIF e PAEFI, favorecendo a qualificação do trabalho técnico, proporcionando a circulação das informações entre as equipes, assegurando o trabalho integrado dos dois serviços, de modo a garantir a proteção integral do adolescente em cumprimento de medidas socioeducativas e sua família.</p>
                        <p>Para tanto, a <span onclick="toggleText('texto1')" class="botaoEscondidoLink"><strong>Resolução CNAS nº 18/2014 <i class="fa fa-search" aria-hidden="true"></i></strong></span>, reforça esse entendimento acerca da atuação de forma integrada entre os serviços do SUAS, no âmbito da execução e do acompanhamento das MSE em Meio Aberto:</p>
                        <span id="texto1" class="oculto">
                            <div class="caixaEscondido">
                                <p>Art. 4º A oferta do Serviço de Proteção Social a Adolescentes em Cumprimento de Medida Socioeducativa de Liberdade Assistida e Prestação de Serviços à Comunidade no âmbito do Sistema Único de Assistência Social – SUAS será complementada por meio do:</p>

                                <ol type="I">
                                    <li>Serviço de Convivência e Fortalecimento de Vínculos-SCFV, que prioriza adolescentes em cumprimento de medidas socioeducativas, reforçando as seguranças de convívio familiar, comunitária e social e a autonomia individual, familiar e social;</li>

                                    <li>Serviço de Proteção e Atendimento Especializado às Famílias e Indivíduos- PAEFI, que realiza acompanhamento familiar de forma integrada ao atendimento do adolescente pelo Serviço das Medidas Socioeducativas, estabelecendo referência e contrarreferência com o Serviço de Proteção e Atendimento Integral à Família – PAIF e atuando no contexto social de violação de direitos;</li>

                                    <li>Serviço de Proteção e Atendimento Integral à Família -PAIF, que realiza o acompanhamento familiar a partir da referência e contrarreferência, com planejamento e avaliação conjunta com PAEFI e com o Serviço de Medida Socioeducativa, visando o fortalecimento do papel protetivo das famílias e atuando no contexto de vulnerabilidade e risco social e pessoal nos territórios;</li>

                                    <li>Programa Nacional de Promoção do Acesso ao Mundo do Trabalho – Acessuas Trabalho, que mobiliza, articula, encaminha e acompanha a trajetória dos adolescentes a partir de 14 anos na condição de aprendiz e a partir de 16 anos para a profissionalização, bem como de suas famílias.</li>
                                </ol>
                            </div>

                        </span>
                        <br><br>

                        <p>Para o fortalecimento da intersetorialidade, o serviço das medidas socioeducativas deverá manter-se em constante articulação com os demais serviços socioassistenciais e de outras políticas públicas, contribuindo para o aprimoramento e qualificação do trabalho social com as famílias, em especial do PAEFI. Para tanto, exige-se da equipe uma postura que lhe permita uma abordagem adequada, evitando prejulgamentos de modo a não culpabilizar a família pelo contexto vivenciado em função do ato cometido pelo adolescente.</p>

                        <p>Deste modo, o trabalho social com famílias no atendimento socioeducativo, requer uma atuação integral dos serviços, entendendo a importância que a centralidade das intervenções ocorram na família para o acesso e promoção dos seus direitos sociais e para o enfrentamento às situações de risco social e pessoal.</p>

                        <p class="SubTitulo">Os registros de atendimento/acompanhamento</p>
                        <hr>
                        <br>


                        <p>Nesse sentido, o trabalho social com famílias, no âmbito do SUAS, baseia-se nas demandas trazidas por estas, fortalecendo-as no seu papel de cuidados e de proteção dos seus membros, promovendo o acesso a serviços públicos, através da interlocução e a atuação efetiva dos serviços do SUAS e da Rede de Proteção, aspirando a garantia de direitos</p>

                        <p>Para que esse acompanhamento seja mais efetivo, o SUAS, através das ferramentas disponíveis para a coleta de dados, assegura o registro do acompanhamento sistemático de forma qualitativa, através dos Prontuários SUAS. E de forma quantitativa através do Registro Mensal de Atendimento – RMA.</p>

                        <div class="bd-callout bd-callout-primary">

                            <p>A seguir, discorremos sobre os instrumentos, pactuados no âmbito federal, para o registro de informações referentes aos atendimentos e acompanhamentos no âmbito do SUAS, dentre eles o socioeducativo:</p>

                            <div class="d-flex flex-wrap justify-content-center">
                                <p class="bg-primary p-3 m-2 rounded-circle text-white">REGISTRO MENSAL DE ATENDIMENTO - RMA</p>
                                <p class="bg-warning p-3  m-2 rounded-circle">PRONTUÁRIO SUAS ELETRÔNICO</p>
                                <p class="bg-success p-3  m-2 rounded-circle">PRONTUÁRIO SUAS</p>
                            </div>
                        </div>
                        <br><br>

                        <p class="SubSubTitulo">Registro Mensal de Atendimento – RMA</p>
                        <hr>
                        <br>


                        <p>O RMA é um instrumento para o registro de informações acerca dos atendimentos realizados nos CRAS, CREAS e Centros Pop. Foi instituído pela Resolução CIT nº 04/2011, posteriormente, alterada pela Resolução CIT nº 20/2013 sendo o seu preenchimento realizado mensalmente.</p>

                        <p>Conforme o Caderno de Orientações Técnicas – Serviço de Medidas Socioeducativas em Meio Aberto (Brasília, 2016):</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>No que se refere ao Serviço de Medida Socioeducativa, os gestores/técnicos devem informar o quantitativo de adolescentes em cumprimento de medidas socioeducativas atendidos no Registro Mensal de Atendimentos do CREAS, qualificando o atendimento em tipo de medida e sexo do adolescente no Bloco II – Serviço de Proteção Social a Adolescente em Cumprimento de Medida Socioeducativa (LA/PSC).(Brasil, 2016 p. 69).</p>
                        </div>
                        <br><br>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Respeito à dignidade e integridade física e moral dos adolescentes</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p class="p-3 text-white rounded" style="background-color: #176507">Bloco II - Serviço de Proteção Social e Adolescentes e m Cumprimento e Medida Socioeducativa (LA/PSC)</p>


                                        <table class="table table-bordered" style="border: 1px solid #176507;">
                                            <thead style="background-color: #95cf55;">
                                                <tr class="text-center">
                                                    <th scope="col"><strong>J. Volumes de adolescentes em cumprimento de Medidas Socioeducativas</strong></th>
                                                    <th scope="col"><strong>Total</strong></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>J.1. Total de adolescentes em cumprimento de Medidas Socioeducativas (LA e/ou PSC)</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>J.2. Quantidade de adolescentes em cumprimento de Liberdade Assistida - LA </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>J.3. Quantidade de adolescentes em cumprimento de prestação de Servições à Comunidade - PSC</td>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="FonteFigura" style="color: #176507;">* Atenção! Eventualmente um mesmo adolescente pode estar cumprindo, simultaneamente, as medidas de LA e de PSC, portanto pode ocorrer que a soma de J2 e J3 seja maior que o valor relatado em J1, entretanto a soma de J2 e J3 nunca pode ser menor que J1. O mesmo raciocínio vale para o quadro abaio (J4, J5 e J6).</p>
                                        <br><br>

                                        <table class="table table-bordered" style="border: 1px solid #176507;">
                                            <thead style="background-color: #95cf55;">
                                                <tr class="text-center">
                                                    <th scope="col"><strong>Quantidade e perfil dos nosvos adolescentes inseridos no Serviço, no mês de referência</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col" colspan="2">Sexo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2">J.4. Total de novos adolescentes em cumprimento de Medidas Socioeducativas (LA e/ou PSC), inseridos em acompanhamento no mês de referência</td>
                                                    <td width="150px" rowspan="2"></td>
                                                    <td>Masculino</td>
                                                    <td width="80px"></td>
                                                </tr>
                                                <tr>
                                                    <td>Feminino</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">J.5. Novos adolescentes em cumprimento de LA, inseridos em acompanhamento, no mês de referência</td>
                                                    <td rowspan="2"></td>
                                                    <td>Masculino</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Feminino</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2">J.6. Novos adolescentes em cumprimento de PSC, inseridos em acompanhamento, no mês de referência</td>
                                                    </td>
                                                    <td rowspan="2"></td>
                                                    <td>Masculino</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Feminino</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <p class="FonteFigura">Fonte: Manual Registro Mensal de Atendimentos CREAS, 2018, p. 09-10.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->
                        </div>
                        <!-- FIM Accordion -->
                        <br><br>









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
                    <a href="Topico01.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                    <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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