<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.9';
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

                        <p class="SubTitulo">Etapas de elaboração do PIA </p>
                        <hr>
                        <br>

                        <p>A seguir apresentaremos as etapas e considerações necessárias para a elaboração do PIA, segundo o Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto (2022).</p>

                        <p>As etapas que compõem a elaboração do Plano Individual de Atendimento são:</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <ul class="none">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Acolhida;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Análise Situacional;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Planejamento;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Monitoramento;</li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Avaliação.</li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <!-- Titulo Figura -->
                                <div class="text-center">
                                    <a href="imagens/Figura05.jpg" data-bs-toggle="modal" data-bs-target="#Imagem01">
                                        <img class="img-fluid wow fadeInRight" src="imagens/Figura05.jpg" alt="Alt da imagem fica aqui">
                                    </a>
                                    <p class="FonteFigura">Fonte: Caderno de orientações técnicas para elaboração do plano individual de atendimento (PIA) de medidas socioeducativas em meio aberto, 2022, p.41)</p>
                                </div>

                                <!-- Imagem 05 - MODAL -->
                                <div class="modal fade text-center" id="Imagem05" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <img class="img-fluid" src="imagens/Figura05.jpg" alt="Alt da imagem fica aqui">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Figura 05 - End -->
                            </div>
                        </div>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase02">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 02 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>1ª ETAPA: Acolhida inicial do adolescente e tomada de medidas emergenciais para assegurar os direitos fundamentais</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <p>A acolhida é o primeiro contato do adolescente e de sua família com o serviço. Não é apenas um momento, é uma postura permanente de recepção, abertura e empatia com o outro. Não se limita aos primeiros dias de atendimento, sendo um estado contínuo em todo o processo socioeducativo.</p>

                                        <p>Durante a acolhida do adolescente e de sua família, os técnicos de referência do Serviço de MSE em Meio Aberto devem orientá-los sobre:</p>

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a natureza e os objetivos das medidas socioeducativas em meio aberto;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> os prazos do cumprimento da medida; a situação jurídica;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> os procedimentos técnicos e administrativos;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a dimensão pedagógica e de responsabilização da medida socioeducativa;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a relação com os órgãos de defesa de direitos;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> o acesso aos serviços públicos;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> a elaboração do PIA.</li>
                                        </ul>


                                        <p>Na acolhida, assim como em todos os momentos com o adolescente, a comunicação é um fator primordial, pois precisamos ter consciência de que em nós, tudo fala: o corpo, o olhar, o gestual, o espaço e o toque também. Os adolescentes trazem linguagens próprias que se manifestam não apenas no discurso, mas nas roupas, nos cortes de cabelo, nas tatuagens, no uso de acessórios.</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p> É preciso estar aberto ao diálogo entre o que é dito e o não-dito, as linguagens orais e corporais. Também é importante lembrar que o adolescente estabelece relações de troca com todos os atores presentes na unidade, como: profissionais da portaria, da segurança, da cantina, técnicos, coordenadores, criando e estabelecendo relações de amizade e afeto dentro do novo contexto em que ele está inserido. </p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>


                                        <p>Segundo o Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto, a acolhida é um processo comum às medidas de Liberdade Assistida e Prestação de Serviços à Comunidade (2022), mas existem especificidades, no caso da PSC, que requerem a articulação com outros atores e um conhecimento mais amplo sobre o funcionamento desta medida.</p>

                                        <p>No caso da PSC, a medida “está na vinculação comunitária, no sentimento de pertencimento e, em última análise, na reparação. Assim, o foco não é a tarefa ou atividade a ser realizada, mas sim o adolescente.” (BRASIL, 2022, p. 46) É preciso saber o objetivo implícito posto pela medida de Prestação de Serviços à Comunidade, e olhar o adolescente não como uma medida a ser cumprida, pois as tarefas que serão realizadas são secundárias, o foco aqui “é ele, sua família, sua relação com a coletividade, seu crescimento pessoal e a superação do processo de criminalização.” (BRASIL, 2022, p. 46).</p>

                                        <p>Já na LA, o adolescente será informado sobre a natureza da medida, os prazos, a frequência em que se darão os encontros e as reflexões acerca do ato infracional, suas consequências para si e para a coletividade, de seus direitos e os de sua família e como acessá-los, além do entendimento de que aqueles encontros não terão um teor de vigilância.</p>

                                        <p><u><strong>Dimensões de análise durante a acolhida:</strong></u></p>

                                        Existem 6 dimensões de análise a serem observadas durante o processo de acolhida. São elas:

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>INDIVIDUAL:</strong> Fatores individuais, características biológicas e psicológicas, traços de personalidade;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>FAMILIAR:</strong> Estrutura da família e o seu funcionamento, papéis e regras de convivência sociofamiliar;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>PARES:</strong> Amigos e pessoas de convívio próximo, o que pensam e os ambientes que frequentam;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>COMUNITÁRIO:</strong> Membros da vizinhança, organizações, instituições e grupos, espaços e ambientes frequentados;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>ESCOLAR:</strong> Ambiente, relações e situação de aprendizagem;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-bullseye CorVerdeClaroEstado"></i> <strong>SOCIOCULTURAL:</strong> Fatores do contexto e da estrutura social, cultural e política.</li>
                                        </ul>


                                        <p>Importante ressaltar que, ao analisar cada dimensão, não se pode transformar e reduzir o PIA a nenhuma das seguintes ações:</p>

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> mera declaração de intenções;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> descrição da atuação do programa (não confundir PIA com PPP);</li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> diagnóstico de demandas;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> instrumento burocrático que engessa o trabalho;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> um formulário a mais de coleta de dados;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> instrumento para encurtamento ou prolongamento desnecessário da medida;</li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-dot-circle CorVerdeClaroEstado"></i> instrumento de verificação da incapacidade do adolescente e da família.</li>
                                        </ul>

                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>“PIA não é um instrumento a ser PREENCHIDO. Ele deve ser CONSTRUÍDO.”</p>
                                                <p>Carla Marcelino</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>2ª ETAPA: ANÁLISE SITUACIONAL</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <p>Esse momento é crucial para a coleta de informações e a construção de um projeto junto ao usuário. Esse conjunto de dados é fundamental para a construção do projeto socioeducativo. Ele não pode ser entendido como o PIA e nem como um questionário ou um conjunto de perguntas em que o técnico preenche dados gerais, alguns subjetivos e outros relacionados a questões socioeconômicas familiares, frequência à escola e inserção profissional, dentre outros. </p>

                                        <p>A natureza das informações são quantitativas (tratam de números, escalas, proporções, sendo encontrados em cadastros, levantamentos, sistemas, pesquisas, dados epidemiológicos e questionários) e qualitativas (são atravessados por subjetividades, valores, conceitos que demandam metodologias diferenciadas para sua obtenção), ambas são importantes para a elaboração do PIA. </p>

                                        <p>A organização das informações e tudo que se refere ao adolescente e sua família são fundamentais para a construção do diagnóstico socioeducativo e, consequentemente, na construção do planejamento pedagógico, onde teremos uma visão da totalidade que o cerca. </p>

                                        <p>É preciso construir um plano de ação, individualizado que precisará ter um norte em sua elaboração e questionamentos plausíveis para a sua construção, tais como: </p>

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O que será feito a partir das informações levantadas? </li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Como será feito? </li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quem irá fazer? </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quando deverá ser feito? </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Quais as ações para o adolescente e para a família? </li>
                                        </ul>

                                        A equipe técnica trará um grande volume de informações qualitativas e quantitativas que precisam ser decompostas e comparadas para que ganhem significado para o trabalho socioeducativo.

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 03 -->

                            <!-- Accordion 04 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>3ª ETAPA - PLANEJAMENTO SOCIOPEDAGÓGICO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <div class="bd-callout bd-callout-primary">
                                            <p>O planejamento é o exercício intelectual de analisar todas as variáveis e como elas se correlacionam, “é a organização de informações, desejos, perspectivas, valores e ideias em propostas claras e mensuráveis dispostas em um quadro com os objetivos, metas, responsabilidades, prazos e resultados esperados para as ações propostas” . (BRASIL, 2022, p. 62). </p>
                                        </div>


                                        <p>É composto por dimensões do passado (histórico) e do futuro (sonhos, perspectivas). “Em se tratando de um planejamento de vida, ele é realizado com o adolescente e não sobre ele. O planejamento sociopedagógico é constituído de elementos dinâmicos, não devendo ser confundido com um check-list de afazeres ou uma lista de obrigações. Diferente de tudo isso, ele traz uma nova esperança e uma promessa de transformação. É a conjugação do que foi levantado na análise situacional com os saberes articulados pelas diferentes áreas de conhecimento” (BRASIL, 2022, p.62) e deve contemplar informações, desejos, perspectivas, valores, ideias em propostas claras e mensuráveis, objetivos e metas. </p>

                                        <p class="wow fadeIn" data-wow-delay="0.3s">É nesse momento que precisa estar claro para os participantes as ações que serão desenvolvidas com eles, como: identificação, metodologia (como será feita), objetivo (o que se espera atingir); responsabilidades (o papel de cada um nesse processo) e os resultados (concretização da ação). </p>

                                        <p>É importante que os profissionais deixem claro aos adolescentes quais são suas atribuições dentro das categorias de classe e seu papel profissional no acompanhamento a eles durante o cumprimento da medida. </p>

                                        <p>Os adolescentes também precisam estar cientes de suas responsabilidades, tais como: respeito aos horários, às regras de funcionamento, aos demais participantes, ao material utilizado e ao cumprimento de acordos e tarefas sob sua responsabilidade. </p>

                                        <p>Ter clareza dos objetivos, traçar metas realistas e definir indicadores práticos facilitam o controle sobre o andamento do processo de construção e efetivação do PIA. </p>

                                        <p>Após a definição das atividades com o adolescente, o planejamento continua por meio do monitoramento das ações e de reavaliações diante de mudanças do cotidiano.</p>

                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 04 -->

                            <!-- Accordion 05 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>4ª ETAPA: MONITORAMENTO</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        O monitoramento vem contemplar ações em esferas diferentes de atuação dentro do contexto socioeducativo de forma intersetorial, sendo o fio condutor que permite estabelecer o planejamento e a flexibilização na construção do PIA, sem que a equipe técnica se perca nas idas e voltas necessárias à efetivação do PIA.

                                        O monitoramento é o exercício de ver, rever e, se preciso, reescrever a trajetória sociopedagógica. É o processo continuado que inicia na pactuação das ações do PIA.

                                        <div class="bd-callout bd-callout-success">
                                            <p>Quando monitoramos o desenvolvimento do adolescente no cumprimento da medida, não buscamos vigiar seus comportamentos, disciplinar práticas ou mesmo coibir decisões feitas por ele ou por seus familiares. Esse tipo de visão de monitoramento está ultrapassado! Esse era o tom de liberdade vigiada e da doutrina da situação irregular, onde os adolescentes pobres eram tidos como “perigosos, desviantes e anormais", necessitando, sempre, de acompanhamento moral rigoroso e do controle das famílias e do Estado. (BRASIL, 2022, p. 77) </p>
                                        </div>

                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>Monitorar não é vigiar !!!</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>É importante fazer uma observação quanto a diferença entre o acompanhamento e o monitoramento, entendendo-se que, o primeiro é constante, e o segundo se faz de forma processual, com avaliação obrigatória a cada 6 meses, servindo como momento de reflexão, avaliando os avanços alcançados, o cumprimento das pactuações e suas razões de não terem sido cumpridas e como fazer para redimensioná-las. “O monitoramento é uma rica oportunidade de transformar o planejamento em algo dinâmico e debatido” (BRASIL, 2022, p. 77).</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>

                                        <p>É preciso analisar se as metas e objetivos elencados no PIA estão sendo atingidos, se o caminho planejado está funcionando, e se os indicadores mostram que o trabalho técnico está sendo eficaz.</p>

                                        <p>O que é preciso para monitorar o PIA?</p>

                                        <ol type="I">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s">Estabelecer as metas e indicadores que servirão de parâmetro para a condução do PIA e sua avaliação final; </li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s">Selecionar quais elementos usaremos: sistemas de registro e monitoramento (prontuário SUAS, prontuário SUS, SISC, RMA); </li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s">Registrar as ações de monitoramento realizadas: o registro do monitoramento (atas de reuniões, anotações das ligações, visitas domiciliares ou institucionais, diários de campo, inclusão de dados em sistemas) é o material que mostra como o acompanhamento está sendo feito; </li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s">Estabelecer uma “agenda” de ações, uma programação do que será feito em dias, semanas e meses; </li><br>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s">Realizar “pausas” técnicas: momentos mensais de reflexão entre toda a equipe e, posteriormente, com os usuários, apresentando “balanços” do atendimento; reconhecimento público de pontos de avanço (celebrações, festas); identificação dos pontos de dificuldades e elaboração de estratégias de resolução. (BRASIL, 2022, p. 78) </li>
                                        </ol>


                                        <p><u><strong>Especificidades de monitoramento na PSC:</strong></u></p>

                                        <div class="bd-callout bd-callout-primary">
                                            <p>O PIA para PSC tem diferenças em relação ao de Liberdade Assistida (LA), pois inclui a participação de uma entidade que recebe o adolescente para o cumprimento da tarefa. Nesse caso, a unidade de atendimento do meio aberto deve reunir-se com a entidade (que já foi previamente cadastrada pelo órgão gestor) para, junto com o adolescente, construir as ações de responsabilização.</p>
                                        </div>


                                        <p>Na PSC deve ser feito acompanhamento social do adolescente, da família e a entidade deve ser constantemente supervisionada. A entidade também precisa ser capacitada sobre socioeducação e a natureza da medida da PSC. (BRASIL, 2022, p. 14)</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>São vedadas atividades de PSC que exponham o adolescente a tarefas humilhantes, incoerentes com o teor da medida ou que explorem trabalho infantil. (BRASIL, 2022, p. 14)</p>
                                            </div>
                                        </div>
                                        <br>
                                        <br>

                                        <p>O acompanhamento realizado pela equipe do serviço, junto a instituição parceira, deve observar como o adolescente desenvolve as atividades, seus progressos e recuos. Todavia, a unidade do SUAS e as instituições parceiras têm atribuições diferentes, como:</p>

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Compete às unidades de acompanhamento do SUAS: credenciar, capacitar, acompanhar, supervisionar e dar apoio técnico às entidades parceiras por meios diversos (reuniões semanais, videoconferências, oficinas de capacitação, supervisão continuada);</li><br>

                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Cabe ainda às Unidades, definir as rotinas de monitoramento junto à entidade em conjunto com os profissionais de nível superior e os técnicos que acompanham diretamente o adolescente, sendo discutidas coletivamente todas as dificuldades apresentadas e superadas;</li><br>

                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A entidade parceira deve apoiar o adolescente no desenvolvimento da atividade, observando sua execução, os cuidados necessários para o bom desempenho e o suporte para identificar dificuldades e dar retorno ao serviço de acompanhamento do SUAS. Elas não podem restringir sua atuação à simples realização de tarefas sem maior envolvimento da entidade com a vida do adolescente, ou mesmo com o sentido da medida. Alterações podem ser pactuadas e sempre informadas à equipe técnica do serviço, para avaliação conjunta.</li><br>

                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> A frequência é uma obrigação do adolescente, contudo a entidade deve estar aberta para discutir com ele sobre as condições para execução das atividades e os percalços atravessados no cotidiano. Alterações podem ser pactuadas e sempre informadas à equipe técnica do serviço, para avaliação conjunta.</li><br>
                                        </ul>

                                        <!-- Titulo Figura -->
                                        <div class="text-center">
                                            <a href="imagens/Figura06.png" data-bs-toggle="modal" data-bs-target="#Imagem06">
                                                <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                                <p class="TituloFigura img-fluid wow fadeInLeft">Fonte: Caderno de orientações técnicas para elaboração do plano individual de atendimento (PIA) de medidas socioeducativas em meio aberto, 2022, p. 79)</p>
                                            </a>
                                        </div>

                                        <!-- Imagem 06 - MODAL -->
                                        <div class="modal fade text-center" id="Imagem06" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img class="img-fluid" src="imagens/Figura06.png" alt="Alt da imagem fica aqui">
                                                    </div>
                                                    <div class="modal-footer text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Imagem 06 - End -->


                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 05 -->

                            <!-- Accordion 06 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong> 5ª ETAPA: AVALIAÇÃO DO PIA</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase02">
                                    <div class="accordion-body">

                                        <p>O artigo 25º da Lei do SINASE (Lei nª 12.594/2012) estabelece que: </p>

                                        <p>A avaliação dos resultados da execução de medida socioeducativa terá por objetivo, no mínimo:</p>

                                        <ol type="I">
                                            <li class="wow fadeInRight" data-wow-delay="0.3s">Verificar a situação do adolescente após cumprimento da medida socioeducativa, tomando por base suas perspectivas educacionais, sociais, profissionais e familiares; </li><br>
                                            <li class="wow fadeInRight" data-wow-delay="0.6s">Verificar reincidência de prática de ato infracional. </li>
                                        </ol>

                                        <p>Conforme previsto em lei, todo PIA termina com uma avaliação buscando resultados. Segundo o Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto (BRASIL, 2022, p. 84) </p>

                                        <div class="bd-callout bd-callout-success">
                                            <p>Existem muitos tipos de avaliação que podem ser aplicadas ao PIA, como as de custo-benefício (eficiência), de alcance de objetivos (eficácia) e de impacto (efetividade). Um primeiro ponto importante é que a avaliação não pode ser relegada ao fim dos processos, ainda que sua estrutura esteja vinculada a resultados. A avaliação demanda um planejamento relacionado à construção do PIA, devendo ser pensada desde o início do processo com o levantamento de indicadores que possam medir o alcance das metas pactuadas e se o caminho percorrido foi bem-sucedido. </p>
                                        </div>

                                        <p>Por isso é tão importante contar com indicadores objetivos, bem definidos, que reflitam a realidade investigada. Não é necessário ter muitos indicadores, mas os que foram definidos pela equipe precisam ser de fato úteis. Antes de receber adolescentes para o acompanhamento socioeducativo, a equipe deve reunir-se e desenhar o “mapa” da avaliação, ou seja, as etapas essenciais e como ela será feita. </p>

                                        <p>O documento técnico sugere que há duas dimensões avaliativas no PIA. São elas: </p>

                                        <div class="text-center">
                                            <h6 class="fs-6 SmallCaps badge bg-warning text-dark"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                        </div>
                                        <br>

                                        <section id="Modal">
                                            <div class="text-center">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    1ª Dimensão
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <p> é aquela que fundamenta a decisão do Sistema de Justiça com relação ao adolescente e a medida socioeducativa, através de ações como: substituição, prorrogação ou extinção de medida.</p>

                                                                <p>Essa fundamentação deve apresentar “avaliações sobre o adolescente, suas condições de vida e o contexto do ato infracional (BRASIL, 2022, p. 81). </p>

                                                                <p>Depois de tomada a decisão pela autoridade judiciária (sentença) o processo avaliativo continua com a equipe técnica do serviço. </p>

                                                                <p>Mesmo que haja limites de tempo na aplicação das medidas, é a avaliação sociopedagógica que determinará o período de cumprimento e os critérios para verificar o sucesso da medida. O cumprimento de uma medida será avaliado técnica e juridicamente por meio do PIA, o que aumenta nossa necessidade de qualificá-lo. (BRASIL, 2022, p. 81) </p>

                                                                <div class="bd-callout bd-callout-primary">
                                                                    <p>Vale destacar que as metas e ações pactuadas no PIA devem considerar as condições materiais e objetivas para a sua concretização, ou seja, deve considerar o contexto no qual o adolescente está inserido. Além disso, é imprescindível que para além da perspectiva individual, os deveres coletivos e institucionais sejam evidenciados nas ações propostas. (BRASIL, 2022)</p>
                                                                </div>

                                                                <p>Como exemplo, refletiremos sobre o âmbito escolar, no qual é preciso avaliar alguns aspectos referentes ao engajamento do adolescente e seu compromisso com as atividades propostas, assim como, as suas dificuldades referentes ao deslocamento até lá, o descumprimento da equalização idade-série; ameaça de violência na escola; discriminação ou bullying de colegas e professores, etc. Nessa circunstância, a maior preocupação é como efetivar essa avaliação quando do descumprimento da frequência/participação escolar. Aqui a pergunta é a quem deve ser atribuída a responsabilidade pelo descumprimento quanto a frequência/participação escolar. </p>

                                                                <!-- Fique Atento -->
                                                                <div class="FiqueAtentoCaixa">
                                                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                                                    <div class="FiqueAtentoTexto">
                                                                        <p>A trajetória infracional pode potencializar processos de estigmatização, exclusão/evasão escolar, perda de referência sobre o papel da escola na construção de projetos de vida, “acertos de conta” entre grupos rivais, aumento de violência policial, homicídios ou fragilização do apoio familiar. (BRASIL, 2022, p. 82)</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal3">
                                                    2ª Dimensão
                                                </button>
                                                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <p>aborda o processo socioeducativo em si, voltado à qualidade do trabalho desenvolvido pelo programa de atendimento, e não àquele desenvolvido pelo Sistema de Justiça, abordado na primeira dimensão.</p>

                                                                <p>Essa dimensão volta-se à análise do alcance dos resultados previstos, mais especificamente, acerca dos procedimentos/estratégias utilizadas, escolha dos recursos empregados com vistas à eficiência. Após isso, deve-se avaliar a necessidade de alterar essas escolhas e optar por métodos, técnicas e recursos mais adequados. “Também é por meio dela que conseguimos perceber as fragilidades e pontos fortes do acompanhamento feito, incluindo se o monitoramento foi eficaz e contou com um bom instrumento de medida.” (BRASIL, 2022, p. 83)</p>

                                                                <!-- Fique Atento -->
                                                                <div class="FiqueAtentoCaixa">
                                                                    <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                                                    <div class="FiqueAtentoTexto">
                                                                        <p>A avaliação é o trabalho refletido, crítico, submetido a uma análise, é a desconstrução da ideia de que planejar é um movimento mecânico. (BRASIL, 2022, p. 83)</p>
                                                                    </div>
                                                                </div>
                                                                <br><br>

                                                                <!-- Importante -->
                                                                <div class="ImportanteCaixa">
                                                                    <p class="ImportanteTitulo"> Importante</p>
                                                                    <div class="ImportanteTexto">
                                                                        <p>É por meio da avaliação que as equipes conseguem entender se os métodos empregados pelo serviço precisam ser alterados. (BRASIL, 2022, p. 83)</p>
                                                                    </div>
                                                                </div>
                                                                <br><br>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <br><br>


                                        <p>Voltados a esse aspecto destacamos três pontos valiosos a serem observados com relação a quem avalia o processo socioeducativo. Antes de apresentá-los é importante destacar que “é no adolescente e sua família que encontramos respostas não apenas sobre o resultado do processo, mas sobre o sentido da caminhada.” (BRASIL, 2022, p. 83) </p>

                                        <!-- Início Accordion -->
                                        <div class="accordion accordion-flush" style="margin: 50px;" id="AccordionFase03">
                                            <center>
                                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                                            </center>
                                            <!-- Accordion 10 -->
                                            <div class="accordion-item" style="border: 1px solid green;">
                                                <h2 class="accordion-header" id="Item10">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                                        <strong>AVALIAÇÃO DO ADOLESCENTE</strong>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="Item10" data-bs-parent="#AccordionFase03">
                                                    <div class="accordion-body">

                                                        <p>Realizada através de questionários, fichas, reuniões, entrevistas e visitas domiciliares quando do término da medida e a autoridade judiciária já tiver decidido quanto a extinção ou agravamento do processo. Importante destacar que a avaliação do adolescente sobre seu processo socioeducativo não pode ser utilizada como critério para as decisões técnicas ou judiciais e que pode ser realizada de forma anônima, caso o adolescente opte por essa modalidade, uma vez que diminui os possíveis receios e constrangimentos, fomentando a participação de mais pessoas. “Sob nenhuma hipótese a avaliação dos adolescentes e de suas famílias pode ser imposta, mas sim incentivada, explicando seu sentido”. (BRASIL, 2022 p. 83)</p>



                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fim Accordion 10 -->

                                            <!-- Accordion 09 -->
                                            <div class="accordion-item" style="border: 1px solid green;">
                                                <h2 class="accordion-header" id="Item09">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                                        <strong>AVALIAÇÃO REALIZADA PELA FAMÍLIA</strong>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="Item09" data-bs-parent="#AccordionFase03">
                                                    <div class="accordion-body">

                                                        <p>Essa avaliação possui elementos semelhantes a dos adolescentes, porém com aspectos próprios assumindo as responsabilidades dela (família) nesse processo. Ela pode ser feita separadamente de forma a garantir a privacidade e que ambos se sintam confortáveis em expor suas opiniões. Essa avaliação deve abordar as peculiaridades do processo vivenciado pela família em relação ao adolescente durante o processo de acompanhamento socioeducativo e ao final dele, contemplando a rede de apoio disponível e quais possíveis mudanças foram percebidas.</p>
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fim Accordion 09 -->

                                            <!-- Accordion 08 -->
                                            <div class="accordion-item" style="border: 1px solid green;">
                                                <h2 class="accordion-header" id="Item08">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                                        <strong>AVALIAÇÃO TÉCNICA COM COLEGAS DA ASSISTÊNCIA SOCIAL E OUTRAS ÁREAS</strong>
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="Item08" data-bs-parent="#AccordionFase03">
                                                    <div class="accordion-body">

                                                        <p>Essa avaliação busca analisar o alcance das metas pactuadas, os desafios vivenciados, as formas de resolução desses impasses, se as soluções encontradas podem ser replicadas em casos futuros e se as metas previstas pelo Serviço Social, pela Psicologia, Direito ou Pedagogia foram contempladas, além de observar se houve conflito entre as áreas.</p>


                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fim Accordion 08 -->

                                        </div>
                                        <!-- FIM Accordion -->
                                        <br><br>


                                        <p>Importante ressaltar que as avaliações externas, por pessoas de fora do serviço mas participam desse processo (Sistema de Justiça, Ministério Público, Defensorias, Conselhos Municipais de Assistência Social, Direitos Humanos ou dos Direitos da Criança e do Adolescente) são essenciais. Elas visam o levantamento de aspectos que, muitas vezes, passam despercebidos pelos atores envolvidos diretamente.</p>

                                        <p>Normalmente as avaliações externas são mais amplas, com elementos estruturais do serviço, como: infraestrutura, metodologias, recursos, equipe técnica, devendo ser um compromisso da gestão do município a qualidade e o aprimoramento continuado das ofertas. </p>

                                        <p>Podem ser utilizadas várias formas de avaliação no PIA voltadas: a eficiência, referentes aos custos e benefícios; a eficácia, que avalia o alcance dos objetivos e a efetividade que é voltada aos impactos sentidos. Todas elas devem ser pensadas quando do processo de levantamento de indicadores e metas pactuadas dentro desse processo. </p>

                                        <p class="text-center fa-2x text-success"><strong>Peculiaridades sobre a avaliação da medida socioeducativa de Liberdade Assistida e a de Prestação de Serviço à Comunidade </strong></p>
                                        <hr>

                                        <p><u><strong>Avaliando a Liberdade Assistida (LA)</strong></u></p>

                                        <p>De acordo com o Art. 119º do Estatuto da Criança e Adolescente, a Liberdade Assistida deve ser analisada considerando seus aspectos subjetivos e objetivos.</p>

                                        <div class="bd-callout bd-callout-primary">
                                            <p>Art. 119. Incumbe ao orientador, com o apoio e a supervisão da autoridade competente, a realização dos seguintes encargos, entre outros:</p>

                                            <ol type="I">
                                                <li class="wow fadeInRight" data-wow-delay="0.3s"> promover socialmente o adolescente e sua família, fornecendo-lhes orientação e inserindo-os, se necessário, em programa oficial ou comunitário de auxílio e assistência social;</li>
                                                <li class="wow fadeInRight" data-wow-delay="0.6s"> supervisionar a frequência e o aproveitamento escolar do adolescente, promovendo, inclusive, sua matrícula;</li>
                                                <li class="wow fadeInRight" data-wow-delay="0.9s"> diligenciar no sentido da profissionalização do adolescente e de sua inserção no mercado de trabalho;</li>
                                                <li class="wow fadeInRight" data-wow-delay="1.3s"> apresentar relatório do caso.</li>
                                            </ol>

                                        </div>

                                        <p>Conforme observado o artigo apresenta diversas funções que possuem aspectos que devem ser considerados e verificados seu nível de alcance os quais trataremos a seguir: </p>

                                        <ol>
                                            <li>Quanto inciso I - Promover socialmente o adolescente e sua família, fornecendo-lhes orientação e inserindo-os, se necessário, em programa oficial ou comunitário de auxílio e assistência social é preciso considerar:</li>
                                            <br>

                                            <ol type="a">
                                                <li>as vulnerabilidades identificadas;</li>
                                                <li>a inserção nas iniciativas da proteção social básica, especial ou de proteção a pessoas ameaçadas (PBF, ACESSUAS, BPC, PAIF, PAEFI, PPCAM, PPPRO, PROVITA);</li>
                                                <li>como se deu esse acompanhamento e a interlocução entre as equipes de referência;</li>
                                                <li>como aconteceu a referência e a contrarreferência;</li>
                                                <li>o nível de adesão dos usuários.</li>
                                            </ol>
                                            <br>


                                            <li>Quanto ao inciso II - Supervisionar a frequência e o aproveitamento escolar do adolescente, promovendo, inclusive, sua matrícula faz-se necessário conhecer como se deu:</li>
                                            <br>

                                            <ol type="a">
                                                <li>a relação com a escola ou a Secretaria de Educação;</li>
                                                <li>se houveram matrículas ou rematrículas e se houve empecilho para tal;</li>
                                                <li>se o adolescente foi partícipe nesse processo;</li>
                                                <li>se houve engajamento dele com o nivelamento idade-série;</li>
                                                <li>se houveram relatos de preconceitos ou bullying.</li>
                                            </ol>
                                            <br>


                                            <li>Sobre o inciso III - Diligenciar no sentido da profissionalização do adolescente e de sua inserção no mercado de trabalho deve-se buscar identificar:</li>
                                            <br>

                                            <ol type="a">
                                                <li>se houve interesses da parte do adolescente no engajamento em cursos profissionalizantes e quais as dificuldades para isso;</li>
                                                <li>se foi possível fazer a inclusão em redes protegidas de trabalho para maiores de 16 anos (além da aprendizagem).</li>
                                            </ol>
                                            <br>

                                            <li>Acerca do inciso IV - Apresentar relatório do caso deve-se atentar:</li>
                                            <br>

                                            <ol type="a">
                                                <li>se os relatórios foram feitos em tempo hábil para o Sistema de Justiça, se houve alguma dificuldade para isso;</li>
                                                <li>se a equipe pôde contar com treinamento para construção desses relatórios;</li>
                                                <li>qual o feedback do sistema de justiça para esses relatórios.</li>
                                            </ol>
                                        </ol>

                                        <p>Sugerimos indicadores de análise que podem ser utilizados durante os processos citados acima: </p>

                                        <ol type="a">
                                            <li>Nível de adesão dos usuários: satisfatório/insatisfatório/abandono; </li>
                                            <li>Referência e contra-referência: satisfatório/insatisfatório/abandono; </li>
                                            <li>Participação dos parceiros setoriais: satisfatório/insatisfatório/abandono; </li>
                                            <li>Qualidade da oferta: satisfatório/insatisfatório/abandono. </li>
                                        </ol>

                                        <p><u><strong>Avaliando a Prestação de Serviços à Comunidade (PSC) </strong></u></p>

                                        <p>A avaliação na PSC compete tanto à unidade de acompanhamento do SUAS, quanto às entidades parceiras que recebem os adolescentes para a realização das atividades, de forma a ouvir os profissionais e saber quais as suas dificuldades enquanto referência neste serviço. É preciso avaliar: </p>

                                        <ul class="none">
                                            <li class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> como os profissionais da entidade se sentiram; </li>
                                            <li class="wow fadeIn" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> se houve conflitos entre eles e os adolescentes; </li>
                                            <li class="wow fadeIn" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> se a entidade, de fato, conseguiu realizar as entregas pactuadas no PIA; </li>
                                            <li class="wow fadeIn" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> como os adolescentes se sentiram naquela entidade. </li>
                                        </ul>

                                        <p>É importante que essas entidades tenham um retorno de como a PSC impactou positivamente na vida daquele adolescente após o cumprimento da medida, e quais as dificuldades enfrentadas por ele, bem como se foram sanadas. </p>

                                        <p>Segundo o Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto (2022, p. 87) deve-se observar na avaliação da medida de PSC: </p>

                                        <ul class="none">
                                            <li class="wow fadeIn" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> atividade realizada atingiu de fato os objetivos propostos? </li>
                                            <li class="wow fadeIn" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O adolescente sentiu-se confortável para discutir a natureza das atividades ou teve vontade de substituí-las por outras? </li>
                                            <li class="wow fadeIn" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> É possível perceber pelo discurso ou pelas práticas do adolescente que houve algum ganho subjetivo com a execução da atividade? </li>
                                            <li class="wow fadeIn" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> atividade foi importante para seu processo de responsabilização? </li>
                                            <li class="wow fadeIn" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> O monitoramento realizado foi suficiente para identificar as dificuldades ou apenas no término da medida que foram percebidos aspectos que poderiam ter sido alterados antes? </li>
                                            <li class="wow fadeIn" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> Houve alguma manifestação da comunidade sobre a importância da atividade realizada pelo adolescente ou mudança de visão sobre ele? </li>
                                        </ul>

                                        <br><!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>Avaliar é aprender! Mas para que possamos aprender, é necessário tornar os resultados claros, mesmo que não tenham sido positivos. Há quatro aspectos fundamentais para refletir sobre o processo socioeducativo de cada adolescente. (BRASIL, 2022, p. 87)</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        No processo avaliativo alguns pontos são essenciais para sua efetivação, como os pontos fortes, os pontos sensíveis, os de hipótese e os pontos de mudanças. No quadro abaixo apresentamos os aspectos que cada um contempla.

                                        <!-- imagem -->

                                        Diante do exposto, podemos concluir que a avaliação é um processo dinâmico e coletivo que vai além da classificação, valoração ou medição de processos, sendo fruto do compartilhamento entre sujeitos na tomada de decisões e em busca da melhoria constante do serviço de medidas socioeducativas.

                                        <div class="bd-callout bd-callout-success">
                                            <p>“Avaliar é pensar se o nosso trabalho, de fato, alcança nosso objetivo: o adolescente em sua plenitude”. (BRASIL, 2022, p. 89)</p>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 09 -->

                        </div>
                        <!-- FIM Accordion -->



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
                <a href="Topico03.8.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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