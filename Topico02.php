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

                        <p class="SubSubTitulo">Prontuário SUAS físico</p>
                        <hr>
                        <br>

                        <p>Utilizado pelas equipes de referência das Unidades Socioassistenciais, CRAS, CREAS e Centro POP, tem como principal característica, o registro detalhado acerca dos atendimentos e acompanhamentos realizados juntos às famílias/indivíduos. Além disso, permite apontamentos, concomitantes, do acompanhamento realizado por mais de um Serviço na mesma Unidade.</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>O Prontuário SUAS físico deverá ser utilizado concomitantemente com o Prontuário Eletrônico Simplificado.</p>

                                <p>A Resolução da CIB-CE nº 013/2018 pactua e a Resolução do CEAS nº 022/2018 aprova que no Ceará o Prontuário SUAS deve ser utilizado pelos profissionais de nível superior das equipes de referência das Unidades CRAS e CREAS responsáveis pelo acompanhamento familiar realizado pelo PAIF e PAEFI, independente da existência de conselho ou organização de classe.
                                </p>
                            </div>
                        </div>
                        <br><br>


                        <p>Conforme o Caderno de Orientações Técnicas – Serviço de Medidas Socioeducativas em Meio Aberto:</p>

                        <div class="bd-callout bd-callout-success">
                            <p>Sempre que é aberto um novo Prontuário SUAS, ou realizado algum registro/atualização das informações nele contidas, os registros correspondentes a essas novas informações devem ser inseridos também no Prontuário Eletrônico. (Brasil, 2016, pág.71)</p>
                        </div>

                        <p class="SubSubTitulo">Prontuário SUAS Eletrônico Simplificado</p>
                        <hr>
                        <br>


                        <p>O Prontuário SUAS eletrônico simplificado tem como característica o registro de informações de forma célere e de fácil manuseio, facilitando a visualização dos atendimentos realizados junto às famílias e indivíduos. Ele teve origem do Formulário 2 anexo ao Registro Mensal de Atendimento – RMA inicialmente utilizado pelas Unidades.</p>

                        <p>Para o registro de informações sobre as ações realizadas especificamente junto aos adolescentes em cumprimento de MSE, o prontuário simplificado através do NIS do adolescente possibilita o acesso aos seguintes dados:</p>

                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                            <p class="miniCaixaVerde wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration="2.5s">O registro das medidas em cumprimento</p>
                            <p class="miniCaixaVerde wow fadeInLeft"data-wow-delay="0.6s" data-wow-duration="2.5s">O local de cumprimento da medida</p>
                            <p class="miniCaixaVerde wow fadeInLeft"data-wow-delay="0.9s" data-wow-duration="2.5s">Data do desligamento do Serviço</p>
                            <p class="miniCaixaVerde wow fadeInLeft"data-wow-delay="1.3s" data-wow-duration="2.5s">Data de início do Acompanhamento</p>
                        </div>








                        <p>Outro ponto importante, diz respeito à inserção dos adolescentes em cumprimento de LA e PSC e sua família no CadÚnico (2016, p. 68):</p>

                        <p>(…) a inserção das famílias no Cadastro Único e a devida identificação do adolescente e seu respectivo NIS no Prontuário Eletrônico Simplificado constituem procedimentos que devem ser, obrigatoriamente, incorporados ao processo de trabalho de técnicos e gestores, iniciados desde o momento da acolhida.</p>

                        <p>O acesso ao Prontuário Eletrônico Simplificado é online, a partir da criação de usuário e senha, via Sistema de Autenticação e Autorização – SAA Web, sendo esse o mesmo acesso concedido ao RMA.</p>

                        <p>Realçamos que a efetividade do trabalho social realizado com os adolescentes em cumprimento de medidas socioeducativas em meio aberto e suas famílias, dependerá da união de esforços envolvendo o adolescente, a família e a rede proteção local.</p>


                        Acompanhamento da Prestação de Serviços à Comunidade - PSC
                        <p>Dentre os objetivos estabelecidos na Tipificação Nacional de Serviços Socioassistenciais para o Serviço de proteção social a adolescentes em cumprimento de medida socioeducativa de Liberdade Assistida (LA) e de Prestação de Serviços à Comunidade (PSC) encontramos o fortalecimento da convivência familiar e comunitária. Além disso, a execução do serviço deve prover atenção socioassistencial e realizar acompanhamento, considerando a responsabilização dos adolescentes, ressignificando seus valores e contribuindo para a “interrupção da trajetória infracional”.</p>

                        <p>Este acompanhamento deve ter frequência mínima semanal visando, desta forma, garantir ação contínua por meio de ações sistemáticas.</p>

                        <p>De acordo com as orientações contidas no Guia de Orientações para Entidades Assistenciais, Hospitais, Escolas e Estabelecimentos congêneres, bem como os Programas Comunitários e Governamentais que recebem adolescentes para o cumprimento de Prestação de Serviços à Comunidade (2022, p. 04)</p>


                        <p>para o cumprimento de PSC, é importante compreender que o momento inicial de acolhida, atendimento e acompanhamento socioassistencial do adolescente acontece, na maioria das vezes, nos Centros de Referência Especializados de Assistência Social (CREAS) e nos locais em que não haja CREAS, isso pode ser feito em outras unidades do SUAS - Sistema Único de Assistência Social (...).</p>


                        <p>No âmbito do SUAS, a Prestação de Serviços à Comunidade (PSC) tem as mesmas prerrogativas da Liberdade Assistida (LA), no que concerne ao acompanhamento integral do adolescente e de sua família, promoção de seus direitos e acesso à cidadania. Porém a PSC prevê que o processo de responsabilização deve ser concretizado por meio de uma atividade específica, de natureza colaborativa não laboral, cujo objetivo é contribuir com a comunidade e alterar a forma como o adolescente é enxergado pela comunidade (CIDADANIA, 2022).</p>

                        <p>Pela natureza própria da medida, a PSC envolve mais de uma instituição para sua realização, sendo importante destacar que a unidade do SUAS responsável pelo acompanhamento e as instituições parceiras têm atribuições diferentes. Cabendo a primeira credenciar, capacitar, acompanhar, supervisionar e dar apoio técnico às entidades parceiras por meio de diversas estratégias (reuniões semanais, videoconferências, oficinas de capacitação, supervisão continuada).</p>



                        <p>A equipe do serviço deve acompanhar, em conjunto com a instituição parceira, como o adolescente desenvolve as atividades, seus progressos e recuos. É recomendável aproveitar essa grandiosidade, combinando as potencialidades identificadas e propondo ações em dupla, trio ou grupo, entendendo que cada adolescente é um ser diferente mas que podem ter trajetórias, sonhos e desejos similares.</p>


                        <p>As entidades parceiras não podem restringir sua atuação à simples “cessão de espaço”, ou seja, o adolescente realizar a tarefa sem maior envolvimento da entidade com sua vida ou mesmo com o sentido da própria medida. Há casos de entidades que não foram capacitadas adequadamente e apenas monitoram a presença do adolescente nos dias combinados, como se ele fosse um corpo estranho à instituição ou como se sua responsabilidade fosse apenas com a atividade a ser realizada e não com o adolescente em si. (CIDADANIA, 2022, p. 74)</p>


                        <p>Cabe também à entidade parceira, apoiar o adolescente no desenvolvimento da atividade, observar sua execução, ter atenção aos cuidados necessários para o bom desempenho e dar suporte para identificar as dificuldades e, finalmente, dar retorno ao serviço de acompanhamento do SUAS.</p>

                        <p>Para além disso, a unidade deve estabelecer as rotinas de monitoramento junto à entidade com os profissionais de nível superior e os técnicos que acompanham diretamente o adolescente e as dificuldades apresentadas devem ser discutidas e superadas juntas. Ela (Unidade) deve estar aberta para discutir com o adolescente as condições para execução das atividades e os percalços atravessados no cotidiano, não esquecendo que a frequência é uma obrigação do adolescente e as alterações podem ser pactuadas e sempre informadas à equipe técnica do serviço.</p>








                        <p>Os profissionais do CREAS devem avaliar a cultura, valores e objetivos das instituições parceiras para observar se são compatíveis com a socioeducação. Após todo esse aparato de informações acerca do perfil, e de todo o arcabouço que envolve tanto o adolescente quanto às entidades parceiras, inicia-se, efetivamente, o acompanhamento a PSC, conforme abordado no Módulo I.</p>















                        <p>Após a aplicação da medida socioeducativa pelo juiz, o adolescente e sua família devem comparecer ao CREAS (ou, na ausência deste, pelo órgão do SUAS) para que os próximos passos sejam traçados, podendo, algumas vezes, o adolescente ser encaminhado pelo sistema de justiça diretamente para uma instituição, o que não é o ideal, uma vez que, é importante que um plano seja preparado com o adolescente, com o intuito de cumprir a medida, respeitando seu perfil e habilidades e também para que outras oportunidades e novas rotas possam ser construídas.</p>

                        <p>Antes mesmo de encaminhar o adolescente à instituição, é fundamental que seja definida uma pessoa de referência para acompanhá-lo ao longo do cumprimento da PSC. O cumprimento dessa medida socioeducativa se dá, efetivamente, após o encaminhamento para a entidade parceira, a acolhida pelas unidades do SUAS e os atendimentos que precedem o encaminhamento. Estes são decisivos para a escolha acertada da instituição e das atividades a serem desempenhadas pelos adolescentes.</p>

                        <p>A Resolução nº 119/2006, do Conselho Nacional dos Direitos da Criança e do Adolescente, orienta que seja definido um profissional de nível superior da instituição como referência para, no máximo, 10 adolescentes.</p>

                        <p>Assim, o adolescente terá duas pessoas de referência durante o cumprimento da PSC: um técnico do CREAS e um profissional de nível superior da instituição parceira.</p>



                        <p>A referência socioeducativa de nível superior deve orientar os atores sobre os limites dessa relação e as atribuições de cada um, sem que tragam prejuízos ao acompanhamento do socioeducando.</p>






                        <p>O CREAS deve orientar (junto à referência socioeducativa da instituição) os demais profissionais com que o adolescente se relaciona, suas responsabilidades, bem como viabilizar as condições de frequência do adolescente à instituição, como a adequação do território, e ser claro nas informações quanto às responsabilidades que a ele competem:</p>













                        <p>Recomenda-se que a primeira visita do adolescente à instituição parceira, seja feita em companhia do técnico de referência do CREAS, para sanar dúvidas e facilitar o processo de acolhida do adolescente na instituição.</p>

                        <p>As atribuições específicas do CREAS ou de outras unidades do SUAS devem ser conhecidas pelas unidades parceiras, tais como:</p>






                        <p>As atividades da PSC não podem ser entendidas como um fim em si mesmas, elas são um instrumento para o alcance de um objetivo: a socioeducação. Ainda que a qualificação da oferta do serviço e o acompanhamento da medida sejam fundamentais, o foco da equipe deve ser o adolescente e não o cumprimento das atividades.</p>


                        Acompanhamento da Liberdade Assistida - LA

                        <p>Durante o acompanhamento da Liberdade Assistida, precisamos nos atentar a algumas etapas, como:</p>

                        <p>Acolhida: a equipe técnica realizará o agendamento com a família para o atendimento, quando a mesma não comparecer de forma voluntária à unidade. Todavia, a equipe tem autonomia quanto a metodologia utilizada no acompanhamento, incluindo as visitas domiciliares para o primeiro atendimento, conforme o perfil do adolescente. Na realização desse atendimento é preciso considerar:</p>

                        <p>Apresentação do serviço e da equipe técnica;</p>

                        <p>Orientações acerca da metodologia do acompanhamento;</p>

                        <p>Esclarecimentos sobre as consequências do descumprimento da LA;</p>

                        <p>Identificação de demandas urgentes da família e os possíveis encaminhamentos para a rede de apoio.</p>

                        <p>Após a acolhida, a equipe consultará os dados socioassistenciais da família no Cadastro Único, visando coletar dados básicos de forma mais ágil, priorizando nos atendimentos a qualificação das informações. A partir da data de registro de evolução no prontuário do adolescente, com tempo mínimo de 6 (seis) meses, se inicia o prazo de cumprimento da LA.</p>

                        <p>Ressalta-se que, caso a acolhida não seja exitosa, a equipe deve encaminhar ofício para o Poder Judiciário informando a situação e, se necessário, solicitando dilação de prazo para resposta. Persistindo do não comparecimento do adolescente ao atendimento inicial, a equipe enviará relatório circunstancial ao Poder Judiciário comunicando a situação e solicitando providências.</p>


                        <p>Atendimento inicial de elaboração do PIA: na Acolhida, a equipe realiza o atendimento individual com a família e o adolescente, para subsidiar informações iniciais para o preenchimento do PIA, que deve ser elaborado em até 15 dias, a contar da data de do atendimento inicial.</p>


                        <p>Acompanhamento do PIA – Instrumentos e estratégias de acompanhamento:</p>

                        <p>Comunicação interinstitucional: estabelecer o fluxo de relação entre a equipe técnica e as instituições para onde o adolescente for encaminhado devido a aplicação do PIA. A equipe técnica acordará com as instituições a periodicidade do envio dos relatórios técnicos de acompanhamento, onde deve constar informações sobre sua assiduidade, comportamento e sua evolução, e o mesmo deve ser anexado junto ao prontuário, bem como fundamentar os relatórios emitidos pelo CREAS;</p>

                        <p>Atendimento individual: são os atendimentos técnicos realizados pela equipe técnica com o adolescente, em que deve haver periodicidade prevista no PIA. A equipe avaliará se os atendimentos serão realizados com o adolescente e a família em conjunto ou separado.</p>

                        <p>A finalidade destes atendimentos sempre avaliará os compromissos acordados do PIA. Caso seja identificado algum sinal de descumprimento da LA, a equipe verificará os impedimentos, na perspectiva restaurativa e não punitiva, e a partir das condições expostas deve-se estabelecer novos acordos.</p>

                        <p>Visita domiciliar: realizada pela equipe técnica no domicílio do adolescente e sua família. Demandas serão identificadas e encaminhadas pela equipe para a rede de apoio.</p>

                        <p>Visita institucional: realizada pela equipe técnica à instituição/unidade da rede de apoio onde foi realizado o(s) encaminhamento(s) do adolescente, ou quando solicitado pela rede, a fim de obter informações para o preenchimento do PIA.</p>

                        <p>Atendimento de avaliação da medida socioeducativa: a equipe técnica agendará o atendimento com o adolescente e a família a fim de avaliar o cumprimento da LA. Inicialmente é necessário ouvir a opinião do adolescente quanto a autoavaliação durante o acompanhamento para cumprimento da medida. Seguidamente, é importante ouvir a opinião da família/responsável. Por fim, deve-se analisar juntamente ao PIA, sobre os acordos que foram descumpridos e os motivos que o levaram a isso.</p>

                        <p>Elaboração do Relatório Final: será elaborado pela equipe técnica com base nas evoluções do prontuário, relatórios técnicos recebidos e encaminhados e registros do PIA, acrescentado com a avaliação final sobre o cumprimento da medida. Vale destacar a importância da equipe técnica sugerir ao Poder Judiciário, algum parecer acerca do cumprimento total ou parcial. Quando o relatório técnico final for enviado ao Poder Judiciário (Vara da Infância e da Juventude), cessará o acompanhamento da equipe, que aguardará a devolutiva.</p>

                        <p>Se o adolescente cumprir por total a LA, porém, os encaminhamentos realizados durante o acompanhamento não forem finalizados, a equipe técnica encaminhará o adolescente e a família para o CRAS dar continuidade. No entanto, havendo demanda decorrente de violação de direitos, o mesmo continua o atendimento pela equipe de referência através do Serviço PAEFI.</p>

                        <p>No caso do adolescente que foi engajado na LA, a equipe construirá um novo PIA e avaliará o que foi elaborado inicialmente, para identificar e corrigir possíveis equívocos do acompanhamento, que fizeram o Poder Judiciário aumentar o prazo do cumprimento.</p>




                        -------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

                        <p>Como em outras situações, as populações mais pobres são as mais vulneráveis aos efeitos adversos das Mudanças Climáticas. Contudo, essa parcela da população é a que menos contribui para a causa do problema, por ter menos poder de compra e se utilizar menos dos serviços que causam as emissões. É nesse viés que surge o conceito de <strong>Justiça Climática</strong>.</p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura13.jpg" data-bs-toggle="modal" data-bs-target="#Imagem13">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura13.jpg" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 13 - MODAL -->
                        <div class="modal fade text-center" id="Imagem13" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura13.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 13 - End -->
                        <br><br>


                        <p>O conceito de justiça climática procura colocar as pessoas e as questões éticas como prioridade no combate ao aquecimento global. <strong>Ele funciona a partir do entendimento de que os países e regiões com maior desenvolvimento causam maior impacto nas emissões de GEE, porém, têm uma população menos vulnerável aos estragos que o aquecimento global pode trazer.</strong></p>
                        <p>Segundo a Unicef, os 50% mais pobres foram responsáveis por menos de 10% das emissões nos últimos anos, e 3 bilhões de pessoas no mundo vivem em lugares vulneráveis à crise climática. <strong>Não é justo a maior parte da população pagar o preço da ganância de uma minoria!</strong></p>

                        <!-- Titulo Figura -->
                        <div class="text-center">
                            <a href="imagens/Figura14.jpg" data-bs-toggle="modal" data-bs-target="#Imagem14">
                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura14.jpg" alt="Alt da imagem fica aqui">

                            </a>
                        </div>

                        <!-- Imagem 14 - MODAL -->
                        <div class="modal fade text-center" id="Imagem14" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="imagens/Figura14.jpg" alt="Alt da imagem fica aqui">
                                    </div>
                                    <div class="modal-footer text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Imagem 14 - End -->
                        <br><br>



                        <p>É no sentido de resolver ou amenizar os problemas que foram apresentados nesse tópico, além de outros causados pela mudança climática, que as ações de adaptação devem atuar. Justiça climática é um tema recorrente nos encontros mundiais sobre o clima. Vamos conhecer mais sobre isso.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Confira a caminhada dos AJAs de Fortaleza no Dia Nacional da Conscientização sobre as Mudanças Climáticas:</p>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/JP6DsadzUiY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>







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
                    <a href="Topico02.1.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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