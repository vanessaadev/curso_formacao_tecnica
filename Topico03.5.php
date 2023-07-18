<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.5';
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
                        <p class="SubTitulo">Processo de construção do PIA </p>
                        <hr>
                        <br>

                        <p>O Caderno de Orientações Técnicas para Elaboração do Plano Individual de Atendimento (PIA) de Medidas Socioeducativas em Meio Aberto (2022), sugere que o processo de construção do PIA está dividido em nove partes:</p>

                        <ol>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"> Adolescência, juventude e socioeducação: raça, classe, gênero e criminalização;</li>
                            <li class="wow fadeInRight" data-wow-delay="0.6s"> (Re)culpabilização;</li>
                            <li class="wow fadeInRight" data-wow-delay="0.9s"> Respeito à diversidade e à livre expressão dos adolescentes;</li>
                            <li class="wow fadeInRight" data-wow-delay="1.3s"> Postura técnica;</li>
                            <li class="wow fadeInRight" data-wow-delay="1.6s"> Preservação do sigilo profissional;</li>
                            <li class="wow fadeInRight" data-wow-delay="1.9s"> O/a trabalhador/a que atende as medidas e o ato infracional;</li>
                            <li class="wow fadeInRight" data-wow-delay="2.3s"> Proteção e Responsabilização: uma falsa oposição;</li>
                            <li class="wow fadeInRight" data-wow-delay="2.6s"> PIA e o Sistema de Justiça;</li>
                            <li class="wow fadeInRight" data-wow-delay="2.9s"> Interdisciplinaridade: somos uma equipe!</li>
                        </ol>


                        <p>Abaixo, baseado nos elementos apresentados pelo citado documento técnico, refletiremos sobre cada parte elencada.</p>

                        <!-- Início Accordion -->
                        <div class="accordion accordion-flush" id="AccordionFase01">
                            <center>
                                <h6 class="fs-6 SmallCaps badge bg-warning"><i class="fa fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</h6>
                            </center>
                            <!-- Accordion 01 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item01">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Adolescência, juventude e socioeducação: raça, classe, gênero e criminalização</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="Item01" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p class="wow fadeIn" data-wow-delay="0.3s">As questões de raça, classe e gênero são fundamentais para o entendimento sobre como o sistema socioeducativo funciona no nosso país e as correlações de forças atuantes nele. </p>

                                        <p>Mesmo sendo minoria nos atendimentos socioeducativos, as meninas dividem com seus parceiros os mesmos estigmas, mas com o acréscimo de vulnerabilidades pela simples condição de ser mulher.</p>

                                        <p>Para se ter um entendimento pleno da socioeducação é preciso identificar os processos de estigmatização e criminalização de parcelas da sociedade que mesmo tendo uma lógica humanizadora e de defesa dos direitos fundamentais, possuem processos complexos como o racismo e a desigualdade social que se fazem presentes na distribuição seletiva das sanções e das medidas judiciais no Brasil.</p>

                                        <p>A invisibilidade a qual os adolescentes são impostos, a sociedade é sobrecarregada de uma “cegueira” ética que tende a naturalizar os processos de violência, eliminação e genocídio da juventude negra e pobre. </p>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 01 -->

                            <!-- Accordion 02 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item02">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <strong>(Re)culpabilização</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="Item02" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>Até que o adolescente em cumprimento de medida chegue à unidade para o acompanhamento, ele já perpassou a segurança pública, o próprio sistema de justiça, e muitas vezes até a mídia, configurando-se essas como dimensões da sua breve história, além daquelas referentes às suas relações familiares, hábitos, comportamentos, discursos, personalidade, crenças e vínculos postas em xeque. O levantamento desses aspectos é importante para o bom entendimento da prática do ato infracional, e para subsidiar as decisões quanto ao tipo de sanção que será aplicada.</p>

                                        <p>De alguma forma todo esse caminho favorece a revitimização, submetendo o adolescente a procedimentos desnecessários, repetitivos, invasivos, que os levam a reviver a situação de violência ou outras situações que geram sofrimento, estigmatização ou exposição de sua imagem, levando-o a uma (re)culpabilização na qual as práticas institucionais reforçam o poder de punição, fazendo o adolescente reviver, constantemente, o que o trouxe até o serviço, acarretando, desnecessariamente, os efeitos negativos do ato infracional ou reduzindo as ações do adolescente ao conteúdo superficial da infração. </p>

                                        <p>Essa prática é facilmente identificada quando, inapropriadamente, usamos expressões ou frases já ouvidas e vivenciadas por ele ou por sua família, tais como (BRASIL, 2022, p. 18): </p>

                                        <ul class="none">
                                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Você não pensou na sua mãe quando foi roubar?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Você está vendo o sofrimento e a vergonha que está causando a seus pais?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Por que a senhora não passou mais tempo com seu filho?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Onde a senhora estava quando seu filho cometeu o ato?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Sabia que você mata pessoas ao vender drogas?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="1.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Qual o exemplo que você tem dado aos seus filhos?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Isso é coisa que uma menina faça?” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.6s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Eu vou contar ao juiz o que você está fazendo!” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="2.9s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Quem usa drogas não tem futuro!” ; </li>
                                            <li class="wow fadeInLeft" data-wow-delay="3.3s"><i class="fa fa-arrow-right CorVerdeClaroEstado"></i> “Está vendo esse garoto aqui? Ele não vem ao atendimento e não quer saber da vida!” . </li>
                                        </ul>

                                        <div class="bd-callout bd-callout-warning">
                                            <p>Cabe destacar que essa prática de revitimização, também é reforçada, quando institucionalmente há limitações dos espaços para a circulação desse público, e quando são utilizadas formas de atendimento discriminatórias, como: presença de seguranças para realização de atendimento; ausência de contato visual (olhos nos olhos); atendimento com a porta da sala aberta pela potencial “periculosidade” do adolescente/jovem e atividades que os coloquem em tarefas repetitivas, humilhantes, cansativas ou sem sentido para ele “aprender” a se comportar.</p>
                                        </div>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 02 -->

                            <!-- Accordion 03 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item03">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <strong>Respeito à diversidade e à livre expressão dos adolescentes</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="Item03" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p>O adolescente deve ser visto de forma integral e o profissional deve buscar a constante atualização sobre as novas formas de arranjos familiares, de expressões culturais, geracionais, religiosas, raciais, sexuais e de gênero. Precisando, portanto, ser utilizada uma escuta empática sobre o entendimento do ato infracional e a sua responsabilização perante ele.</p>

                                        <p>Esse movimento de internalização do ato vai permitir que o adolescente construa a sua identidade nesse processo socioeducativo, de forma que a medida a ele aplicada seja vista a partir dele e não sobre ele.</p>

                                        <!-- Curiosidade -->
                                        <div class="CuriosidadeCaixa">
                                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                                            <div class="CuriosidadeTexto">
                                                <p>O adolescente em cumprimento de medidas socioeducativas deve ser visto como qualquer outro, com os sonhos, emoções, histórias, fragilidades e potencialidades de seu grupo etário, não se constituindo como um ente em si (Trecho do Livro: O adolescente infrator apud BRASIL, 2022, p. 19). </p>
                                            </div>
                                        </div>
                                        <br><br>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 03 -->

                            <!-- Accordion 04 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item04">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <strong>Postura técnicas</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="Item04" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">


                                        <p>A comunicação e a linguagem utilizada pela equipe técnica, junto aos adolescentes que estão em cumprimento de medidas socioeducativas e suas famílias, é um importante instrumento de desconstrução das relações de dominação entre os sujeitos, especialmente aqueles marcados pela exclusão de classe, de gênero e de raça. </p>

                                        <p>Não dá para negar que existem relações de poder entre adolescentes e técnicos, e que os adolescentes sabem que estão sendo avaliados de alguma forma, cabendo aos técnicos compreender seu lugar nesse sistema, sem fingir que há uma relação horizontal. </p>

                                        <p>É comum adolescentes e suas famílias incorporarem na linguagem as estruturas de poder presentes na sociedade, sendo durante o atendimento, frequente o uso de formas pomposas com os técnicos (doutor, dona técnica, etc) ou utilizarem gírias, ou português não formal ou então palavrões que os protegem ou expressam aquilo que não foi verbalizado. </p>

                                        <p class="wow fadeIn" data-wow-delay="0.3s">Aqui o conhecimento técnico deve mover-se na direção da superação das vulnerabilidades do adolescente e não no sentido de reforçá-las, buscando entender todo esse contexto que o envolve e o seu papel ético e profissional diante desses atores. </p>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 04 -->

                            <!-- Accordion 05 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item05">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                        <strong>Preservação do sigilo profissional</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="Item05" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">


                                        <div class="bd-callout bd-callout-warning">
                                            <p>O sigilo profissional é para além de um direito e um dever das categorias profissionais (independente de seus códigos de ética) para que assegurem a proteção de informações pessoais e a violação de dados confidenciais. </p>
                                        </div>


                                        <p>A garantia do sigilo deve ser sempre informada ao adolescente e sua família. Toda a equipe – seja do CREAS, dos CRAS ou da rede privada do SUAS – deve ser capacitada para exercer esse cuidado e evitar perguntas desnecessárias. Todos os profissionais das unidades, passando do porteiro ao coordenador, são atores fundamentais para a adesão do adolescente ao acompanhamento do serviço. Eles devem ser capacitados para entender a importância da acolhida e do sigilo das informações declaradas pelo adolescente. </p>

                                        <p>Em equipes interdisciplinares, cada profissional deve avaliar que tipo de informação deve ser registrada e compartilhada com outros técnicos, sempre respeitando essa prerrogativa de ética e sigilo profissional. Nesse sentido, é importante frisar que não há necessidade da informação sobre o ato infracional para acesso a nenhuma política pública, nem mesmo para a inserção na escola, nas unidades do SUS ou nas entidades de cumprimento da PSC, fato que é sempre questionado nestes espaços quando da inserção do adolescente no serviço para cumprimento da medida. </p>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 05 -->

                            <!-- Accordion 06 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item06">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                        <strong>O/a trabalhador/a que atende as medidas e o ato infracional</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="Item06" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <p class="wow fadeIn" data-wow-delay="0.3s">O profissional que trabalha com as medidas socioeducativas precisa ter um entendimento macro quanto ao seu fazer profissional, buscando refletir quanto ao ato infracional e se vai de encontro aos seus próprios valores, analisando se há algum obstáculo na relação do técnico com o adolescente. Por isso é importante que os trabalhadores conheçam suas emoções e avaliem se há identificação de seu perfil com o público e a temática a ser trabalhada. </p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>Refletir sobre até que ponto o conteúdo simbólico do ato infracional vai de encontro aos próprios valores é fundamental, para analisar se é um obstáculo na relação do técnico com o adolescente. (BRASIL, 2022, p. 23)</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <p>Alguns atos podem causar reações como estranheza, revolta, rejeição, medo, vontade de julgar ou mobilizar afetos vivenciados pelos profissionais na sua esfera privada (como familiares assassinados, transtornos pós-traumáticos frutos de violência urbana, vítimas de assédio sexual e estupro). São os entendimentos sobre o ato infracional e a adolescência, onde ambas trazem recortes de disputas nas relações sociais e estereótipos voltados aos opostos como bom ou mau/vítima ou algoz /bandido ou cidadão de bem, etc que guiam a intervenção do profissional da socioeducação e são as bases de como será conduzida a construção do PIA. </p>

                                        <p class="wow fadeIn" data-wow-delay="0.3s">É preciso desnaturalizar e desmistificar ideias preconcebidas sobre adolescência e o ato infracional, para que se possa compreender a complexidade desses fenômenos e as desigualdades que atingem os adolescentes em seu dia a dia. Sabemos ser impossível afastar nossos valores pessoais na prática cotidiana, todavia, nosso vínculo deve ser pautado por uma ética que não projete nesse adolescente o que queremos para nossos filhos, sobrinhos ou netos.</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>O sofrimento compartilhado com os adolescentes e suas famílias tem impactos cumulativos no emocional dos profissionais, e precisam ser considerados pela gestão do SUAS. (BRASIL, 2022, p. 24)</p>
                                            </div>
                                        </div>
                                        <br><br>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 06 -->

                            <!-- Accordion 07 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item07">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                        <strong>Proteção e Responsabilização: uma falsa oposição</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="Item07" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">


                                        <p>Existe uma imagem errônea que fortalece o pressuposto de que o adolescente que cometeu ato infracional é irresponsável, alguém que não se importa com a coletividade ou que foi incapaz de apreender regras de conduta. Essa visão “negativa” da adolescência, sugere uma intervenção do poder público que busque “preencher” um sujeito vazio de valores e de referências éticas ou que veja o adolescente como alguém incompleto, que não sabe discernir entre o certo e o errado. Não estando ele apto a entender a sua responsabilização diante do ato cometido, e tendo, porém, muitas vezes, que assumir e vivenciar responsabilidades com atividades que o faz ser o apoio econômico de toda a família (algumas vezes como arrimos de família), tendo que se apropriar desse papel com a venda de drogas ou mesmo como pessoa de confiança na contabilidade da venda do produto ilícito, deixando-o cada vez mais em situação extrema de vulnerabilidade. </p>

                                        <p>Outra atividade que o impõe a responsabilidade, para além da sua capacidade, é o cuidado com os irmãos menores ou com os afazeres domésticos, sem que o permita participar efetivamente da escola. Sob esta ótica, não se busca uma responsabilidade mecânica, mas sim uma responsabilização construtiva, que permita novos significados de vida por meio de condições concretas de cidadania e respeitando o seu ciclo de vida. </p>

                                        <div class="bd-callout bd-callout-primary">
                                            <p>O processo de responsabilização deve ser baseado no diálogo, e não na culpabilização! Há uma fronteira tênue entre esses espaços e o profissional deve estar atento a isso. </p>
                                        </div>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>É muito importante que os profissionais tenham uma conversa franca com o adolescente sobre o ato infracional cometido, qual o seu significado e quais fatores estão vinculados a essa ação (afetivos, sociais, econômicos, comunitários), quais as consequências dele a curto, médio e longo prazo. Essa construção reflexiva e em conjunto com o adolescente precisa ser entendido como um processo que traz em seu escopo todo seu repertório cultural, social e histórico. Responsabilização e proteção são dimensões complementares. </p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>Responsabilizar é também educar!</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <!-- Curiosidade -->
                                        <div class="CuriosidadeCaixa">
                                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                                            <div class="CuriosidadeTexto">
                                                <p>O que distingue o fazer socioeducativo para adolescentes em cumprimento de medidas, é a articulação entre proteção social e a responsabilização do adolescente perante as consequências do ato infracional cometido.</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="row align-items-center">
                                            <div class="col-sm-12 col-md-2">
                                                <!-- Titulo Figura -->
                                                <div class="text-center">
                                                    <a href="imagens/Figura04.png" data-bs-toggle="modal" data-bs-target="#Imagem04">
                                                        <img class="img-fluid wow fadeInLeft" src="imagens/Figura04.png" alt="Alt da imagem fica aqui">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="col-sm-12 col-md-10">
                                                <p>Outro aspecto importante é que a responsabilização não pode ser confundida com criminalização ou aplicação de penas. Para responsabilizar o adolescente pelas consequências do ato infracional, é necessário que ele tenha acesso a políticas públicas de proteção (educação, saúde, lazer e esporte), apoio psicológico, familiar e comunitário, ou seja, condições objetivas de construir rotas alternativas ao ato infracional. (BRASIL, 2022, p.25)</p>
                                            </div>
                                        </div>

                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 07 -->

                            <!-- Accordion 10 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                                        <strong>PIA e o Sistema de Justiça</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="Item10" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <div class="bd-callout bd-callout-warning">
                                            <p>O PIA é homologado pelo Sistema de Justiça em atendimento aos requisitos mínimos exigidos pelo Estatuto da Criança e do Adolescente e pela Lei 12.594/2012.</p>
                                        </div>


                                        <p>Os documentos técnicos produzidos pelo SUAS são utilizados pelo Sistema de Justiça para subsidiar decisões que definem a vida dos adolescentes. Ainda que a Promotoria, a Defensoria e o Judiciário tenham autonomia para tomar resoluções desconsiderando os pareceres técnicos do SUAS, os conteúdos presentes nos relatórios são utilizados, historicamente, como base para o trabalho de magistrados, promotores e defensores.</p>

                                        <p>Evidenciamos que tal prática se dá em virtude das especificidades do Serviço das MSE em meio aberto, considerando as dimensões indissociáveis da proteção social e a da responsabilização, o que não se aplica ao PAEFI.</p>




                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 10 -->

                            <!-- Accordion 11 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                                        <strong>Interdisciplinaridade: somos uma equipe!</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="Item11" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">

                                        <!-- Fique Atento -->
                                        <div class="FiqueAtentoCaixa">
                                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                                            <div class="FiqueAtentoTexto">
                                                <p>Embora o adolescente tenha um técnico de referência em seu acompanhamento na medida socioeducativa, é importante ressaltar que o PIA não é construído por um único técnico. A equipe é multiprofissional e tem olhares múltiplos dentro de suas especificidades e o conhecimento das diversas áreas é fundamental para elaboração de um PIA consciente e consistente com seus objetivos e metas. </p>
                                            </div>
                                        </div>


                                        <p>As normativas vedam que o adolescente seja atendido por apenas um profissional, o que não poderá configurar monopólio do saber ou diminuição da importância das demais áreas. Esse técnico promoverá o diálogo interdisciplinar, entendendo que é uma condição imprescindível para que a socioeducação, de fato, se concretize. </p>

                                        <p>A Resolução CONANDA nº 119/2006 e a Norma Operacional Básica - Recursos Humanos (NOB-RH) do SUAS definem que, o atendimento técnico deve ser interdisciplinar.</p>

                                        <!-- Importante -->
                                        <div class="ImportanteCaixa">
                                            <p class="ImportanteTitulo"> Importante</p>
                                            <div class="ImportanteTexto">
                                                <p>A interdisciplinaridade promove um intenso diálogo entre os saberes, e é uma forma de ampliar o conhecimento sobre várias áreas, entendendo a complexidade da condição humana em seus diversos enfoques.</p>
                                            </div>
                                        </div>
                                        <br><br>

                                        <p>Nesse sentido, a construção do PIA precisa de um olhar múltiplo e articulado, contando com, no mínimo, a experiência do Serviço Social, Pedagogia e Psicologia, podendo ainda ter a colaboração de outros profissionais.</p>



                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 11 -->

                            <!-- Accordion 12 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="Item12">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                                        <strong>Intersetorialidade: Somos uma rede!</strong>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="Item12" data-bs-parent="#AccordionFase01">
                                    <div class="accordion-body">



                                        <p>É importante saber que o acompanhamento socioeducativo não se dá apenas no SUAS, apesar deste ser protagonista na condução do processo pedagógico. O ECA traz um entendimento claro, assim como a Resolução nº 119/2006 do CONANDA e a Lei nº 12.594/2012 (Lei do SINASE), que afirmam ser a socioeducação composta por diversas políticas sociais, como a saúde, educação, cultura, esporte e lazer, trabalho e direitos humanos, etc. A falta de entendimento quanto a esse processo de acompanhamento não ser exclusividade do SUAS, não é uma das tarefas mais fáceis pela própria ausência de reconhecimento da pluralidade do Sistema, porém é importante sensibilizar as demais políticas a fazer parte do processo de constituição do SINASE em nível local, estadual e federal.</p>

                                        <p class="wow fadeIn" data-wow-delay="0.3s">O atendimento dos adolescentes por todas as políticas públicas é um direito previsto nas legislações, e é inaceitável a recusa de qualquer natureza, seja para atendimentos, prestação de serviços à comunidade ou a não participação em comissões e na elaboração do Plano Municipal.</p>

                                        <p>Diante do exposto, conclui-se que, uma intersetorialidade bem construída possui fluxos, protocolos e articulações definidas junto aos respectivos órgãos gestores para que a política permaneça a despeito da rotatividade profissional garantindo os direitos dos adolescentes em cumprimento das MSE.</p>

                                        <p>A complementaridade institucional está diretamente ligada à construção efetiva do PIA, uma vez que estamos falando de pessoas que não são fragmentadas em setores ou compartimentos onde a intersetorialidade não é opcional, mas sim, obrigatória nesse processo.</p>


                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim Accordion 12 -->

                        </div>
                        <!-- FIM Accordion -->
                        <br><br>


                        <p>O PIA não finda em si mesmo, ele deve se apresentar como instrumento que evidencia e fortalece as potencialidades reais na busca do acesso a direitos e da ampliação de perspectivas para o futuro dos socioeducandos. “A atribuição do técnico não é apenas ‘fazer o PIA’, visitas domiciliares ou relatórios, essas são ferramentas que atendem a uma necessidade”. (BRASIL, 2022, p. 07) </p>

                        <p>Para alcançar a efetivação na elaboração do PIA é preciso atenção ao princípio da incompletude institucional, buscando-o através da realização de reuniões para estudo situacional de cada adolescente; do estabelecimento de fluxos e protocolos que facilitam o processo; da construção de instrumentos de comunicação e a agilidade nos encaminhamentos, uma vez que, o PIA é o “elo de ligação organizador da relação do programa com outros programas e ou instituições que desenvolvam algum aspecto do PIA”.(PARANÁ, 2012, p. 62) </p>




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
                <a href="Topico03.4.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.6.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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