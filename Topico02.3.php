<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.3';
include('layout/header.php');
?>

<style>
    .sintese {
        border-top: 30px;
    }
</style>

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

                    <p class="SubTitulo">Acompanhamento da Prestação de Serviços à Comunidade - PSC</p>
                        <hr>
                        <br>

                        <p>Dentre os objetivos estabelecidos na Tipificação Nacional de Serviços Socioassistenciais para o Serviço de proteção social a adolescentes em cumprimento de medida socioeducativa de Liberdade Assistida (LA) e de Prestação de Serviços à Comunidade (PSC) encontramos o fortalecimento da convivência familiar e comunitária. Além disso, a execução do serviço deve prover atenção socioassistencial e realizar acompanhamento, considerando a responsabilização dos adolescentes, ressignificando seus valores e contribuindo para a “interrupção da trajetória infracional”.</p>

                        <div class="bd-callout bd-callout-primary">
                            <p>Este acompanhamento deve ter frequência mínima semanal visando, desta forma, garantir ação contínua por meio de ações sistemáticas.</p>
                        </div>

                        <p>De acordo com as orientações contidas no Guia de Orientações para Entidades Assistenciais, Hospitais, Escolas e Estabelecimentos congêneres, bem como os Programas Comunitários e Governamentais que recebem adolescentes para o cumprimento de Prestação de Serviços à Comunidade (2022, p. 04)</p>

                        <div class="bd-callout bd-callout-success">
                            <p>para o cumprimento de PSC, é importante compreender que o momento inicial de acolhida, atendimento e acompanhamento socioassistencial do adolescente acontece, na maioria das vezes, nos Centros de Referência Especializados de Assistência Social (CREAS) e nos locais em que não haja CREAS, isso pode ser feito em outras unidades do SUAS - Sistema Único de Assistência Social (...).</p>
                        </div>

                        <p>No âmbito do SUAS, a Prestação de Serviços à Comunidade (PSC) tem as mesmas prerrogativas da Liberdade Assistida (LA), no que concerne ao acompanhamento integral do adolescente e de sua família, promoção de seus direitos e acesso à cidadania. Porém a PSC prevê que o processo de responsabilização deve ser concretizado por meio de uma atividade específica, de natureza colaborativa não laboral, cujo objetivo é contribuir com a comunidade e alterar a forma como o adolescente é enxergado pela comunidade (CIDADANIA, 2022).</p>

                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">
                                <p>Pela natureza própria da medida, a PSC envolve mais de uma instituição para sua realização, sendo importante destacar que a unidade do SUAS responsável pelo acompanhamento e as instituições parceiras têm atribuições diferentes. Cabendo a primeira credenciar, capacitar, acompanhar, supervisionar e dar apoio técnico às entidades parceiras por meio de diversas estratégias (reuniões semanais, videoconferências, oficinas de capacitação, supervisão continuada).</p>
                            </div>
                        </div>
                        <br><br>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Um “termo de parceria/cooperação” (abordado no Módulo I) deve ser construído coletivamente e celebrado entre as partes, para alinhar o que foi pactuado, podendo conter informações como dias/horários das tarefas, discriminação das atividades a serem realizadas, e nome do profissional de referência na instituição para o acompanhamento do adolescente.</p>
                            </div>
                        </div>
                        <br><br>


                        <p>A equipe do serviço deve acompanhar, em conjunto com a instituição parceira, como o adolescente desenvolve as atividades, seus progressos e recuos. É recomendável aproveitar essa grandiosidade, combinando as potencialidades identificadas e propondo ações em dupla, trio ou grupo, entendendo que cada adolescente é um ser diferente mas que podem ter trajetórias, sonhos e desejos similares.</p>

                        <div class="bd-callout bd-callout-success">
                            <p>As entidades parceiras não podem restringir sua atuação à simples “cessão de espaço”, ou seja, o adolescente realizar a tarefa sem maior envolvimento da entidade com sua vida ou mesmo com o sentido da própria medida. Há casos de entidades que não foram capacitadas adequadamente e apenas monitoram a presença do adolescente nos dias combinados, como se ele fosse um corpo estranho à instituição ou como se sua responsabilidade fosse apenas com a atividade a ser realizada e não com o adolescente em si. (CIDADANIA, 2022, p. 74)</p>
                        </div>

                        <p>Cabe também à entidade parceira, apoiar o adolescente no desenvolvimento da atividade, observar sua execução, ter atenção aos cuidados necessários para o bom desempenho e dar suporte para identificar as dificuldades e, finalmente, dar retorno ao serviço de acompanhamento do SUAS.</p>

                        <p>Para além disso, a unidade deve estabelecer as rotinas de monitoramento junto à entidade com os profissionais de nível superior e os técnicos que acompanham diretamente o adolescente e as dificuldades apresentadas devem ser discutidas e superadas juntas. Ela (Unidade) deve estar aberta para discutir com o adolescente as condições para execução das atividades e os percalços atravessados no cotidiano, não esquecendo que a frequência é uma obrigação do adolescente e as alterações podem ser pactuadas e sempre informadas à equipe técnica do serviço.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Quando a entidade acolhe o adolescente, não se encerra a responsabilidade do técnico do SUAS! Ele deve seguir acompanhando e oferecendo todo o suporte necessário durante o cumprimento da medida (tanto para o adolescente, quanto para a entidade). </p>
                            </div>
                        </div>
                        <br><br>

                        <p>Os profissionais do CREAS devem avaliar a cultura, valores e objetivos das instituições parceiras para observar se são compatíveis com a socioeducação. Após todo esse aparato de informações acerca do perfil, e de todo o arcabouço que envolve tanto o adolescente quanto às entidades parceiras, inicia-se, efetivamente, o acompanhamento a PSC, conforme abordado no Módulo I.</p>

                        <!-- Dúvida  -->
                        <div class="DuvidaCaixa">
                            <p class="DuvidaTitulo"> Dúvida</p>
                            <div class="DuvidaTexto">
                                <p><strong>E se a instituição parceira receber o adolescente diretamente do Judiciário (sem passar antes pelo CREAS ou outra unidade do SUAS)? </strong></p>
                                <p>A instituição deve cumprir a decisão judicial, mas reportar ao magistrado a necessidade de encaminhamento anterior às unidades do SUAS. Recomenda-se também o contato com o CREAS. O estabelecimento de fluxos entre as instituições permite que esse processo seja aprimorado.</p>

                                <p class="FonteFigura text-end">Fonte: Guia de orientações para entidades assistenciais, hospitais, escolas e estabelecimentos congêneres bem como os programas comunitários e governamentais que recebem adolescentes para o cumprimento de prestação de serviços à comunidade (PSC), 2022, p. 05.</p>
                            </div>
                        </div>
                        <br><br>

                        <p>Após a aplicação da medida socioeducativa pelo juiz, o adolescente e sua família devem comparecer ao CREAS (ou, na ausência deste, pelo órgão do SUAS) para que os próximos passos sejam traçados, podendo, algumas vezes, o adolescente ser encaminhado pelo sistema de justiça diretamente para uma instituição, o que não é o ideal, uma vez que, é importante que um plano seja preparado com o adolescente, com o intuito de cumprir a medida, respeitando seu perfil e habilidades e também para que outras oportunidades e novas rotas possam ser construídas.</p>

                        <p>Antes mesmo de encaminhar o adolescente à instituição, é fundamental que seja definida uma pessoa de referência para acompanhá-lo ao longo do cumprimento da PSC. O cumprimento dessa medida socioeducativa se dá, efetivamente, após o encaminhamento para a entidade parceira, a acolhida pelas unidades do SUAS e os atendimentos que precedem o encaminhamento. Estes são decisivos para a escolha acertada da instituição e das atividades a serem desempenhadas pelos adolescentes.</p>

                        <!-- Curiosidade -->
                        <div class="CuriosidadeCaixa">
                            <p class="CuriosidadeTitulo"> Curiosidade</p>
                            <div class="CuriosidadeTexto">
                                <p>A Resolução nº 119/2006, do Conselho Nacional dos Direitos da Criança e do Adolescente, orienta que seja definido <strong>um profissional de nível superior da instituição como referência</strong> para, no máximo, 10 adolescentes.</p>
                            </div>
                        </div>
                        <br>
                        <br>


                        <p>Assim, o adolescente terá duas pessoas de referência durante o cumprimento da PSC: um técnico do CREAS e um profissional de nível superior da instituição parceira.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A referência socioeducativa da entidade é o profissional que estará mais próximo do adolescente, e sua escolha deve privilegiar vínculos de afeto e respeito estabelecidos na instituição, criando laços que devem ser respeitados e valorizados, se trazem benefícios ao cumprimento da PSC.</p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <p>A referência socioeducativa de nível superior deve orientar os atores sobre os limites dessa relação e as atribuições de cada um, sem que tragam prejuízos ao acompanhamento do socioeducando.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>Essas atribuições e limites de atuação devem estar claros nos Termo de Parceria/Cooperação pactuados entre o Órgão Gestor do SUAS e as entidades parceiras.</p>
                            </div>
                        </div>
                        <br>
                        <br>

                        <p>O CREAS deve orientar (junto à referência socioeducativa da instituição) os demais profissionais com que o adolescente se relaciona, suas responsabilidades, bem como viabilizar as condições de frequência do adolescente à instituição, como a adequação do território, e ser claro nas informações quanto às responsabilidades que a ele competem:</p>

                        <table class="table table-bordered" style="border: 1px solid #176507;">
                            <thead>
                                <tr class="text-center">
                                    <th style="background-color: #008000;" scope="col"><strong>Responsabilidades do adolescente</strong></th>
                                    <th style="background-color: #f40000;" scope="col"><strong>Não pode ser exigido do adolescente</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Frequentar o serviço nas datas acordados e nos horários estipulados</td>
                                    <td>Frequência em horários incompatíveis <strong>com a escola, trabalho ou outras</strong> atribuições que o adolescente exerça <strong>(cuidado de filhos ou de outros</strong> parentes, tratamento de saúde, curso <strong>profisionalizantes, etc.)</strong></td>
                                </tr>
                                <tr>
                                    <td>Participar ativamente da construção do <strong>PIA</strong></td>
                                    <td>Compromisso com planos irrealizáveis <strong>dentro de seu contexto de vida.</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Cumprir as atividades previstar no PIA</strong></td>
                                    <td><strong>Cumpra tarefas que não forma pré-acordadas</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Tratar respeitosamente os</strong> profissionais, usuários e demais <strong> pessoas que frequentam a unidade</strong></td>
                                    <td>Exigência de disciplina com características de instituição total (mãos para trás, olhos e cabeça baixos, uso de uniforme, obrigação de uso <strong>de pronomes de tratamento, Sr. ou Sra., etc.)</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Ter zelo e cuidado com as estruturas e materiais do equipamento</strong></td>
                                    <td><strong>Exigir que o adolescente traga</strong> materiais de casa como condição para <strong> participar das oficinas ou atividades</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Respeitar as regras de</strong> convivência do <strong>equipamento</strong></td>
                                    <td>Exigir comportamentos que não foram <strong>previamente explicitados</strong></td>
                                </tr>
                                <tr>
                                    <td>Informar a seu técnico de referência quaisquer dificuldades que o impeçam<strong> de realizar as tarefas ou de frequentar </strong> o serviço</td>
                                    <td>Personalizar o adolescente pela ausência de condições em cumprir a medida<strong> (falta de recursos para transporte, alimentação, ameaças no território, violência familiar ou outros).</strong></td>
                                </tr>
                                <tr>
                                    <td>Comunicar à referência socioeducativa e à unidade a Assistência Social caso a <strong> atividade realizada estiver perdendo o sentido para ele (o fato de a atividade ser compulsória não significa que não possa ser alterada)<; /strong>
                                    </td>
                                    <td><strong>Avaliar negativamente o adolescente</strong> pelo abandono da realização das tarefas sem investigação sobre as circunstâncias da decisão.</td>
                                </tr>

                            </tbody>
                        </table>
                        <p class="FonteFigura text-end">Fonte: Guia de orientações para entidades assistenciais, hospitais, escolas e estabelecimentos congêneres, bem como os programas comunitários e governamentais que recebem adolescentes para o cumprimento de prestação de serviços à comunidade (PSC), 2022, p. 06-07.</p>


                        <p>Recomenda-se que a primeira visita do adolescente à instituição parceira, seja feita em companhia do técnico de referência do CREAS, para sanar dúvidas e facilitar o processo de acolhida do adolescente na instituição.</p>

                        <p>As atribuições específicas do CREAS ou de outras unidades do SUAS devem ser conhecidas pelas unidades parceiras, tais como:</p>



                        <table class="table table-bordered" style="border: 1px solid #176507;">
                            <thead class="text-white" style="background-color: #008000;">
                                <tr class="text-center">
                                    <th scope="col"><strong><u>É atribuição dos CREAS</u></strong></th>
                                    <th scope="col"><strong><u> É vedado aos CREAS</u></strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Construir o PIA - Plano Individual de Atendimento junto à instituição parceira, o adolescente e sua família.</td>
                                    <td>Não envolver o adolescente, seus familiares e a entidade parceira na construção do PIA.</td>
                                </tr>
                                <tr>
                                    <td>Realizar a "interpretação da medida" com o adolescente e sua família explicando seus direitos, deveres, limites e obrigações no cumprimento da medida.</td>
                                    <td>Não explicar ao adolescente e sua família a natureza da medida e suas implicações.</td>
                                </tr>
                                <tr>
                                    <td>Assistir as famílias de modo a fortalecer a convivênvia e os vínculos comunitários, por meior da inserção em serviços, programas e benefícios sociais.</td>
                                    <td>impor modelos de família ou culpabilizar as mesmas pela situação do adolescente. Moralização de comportamentos, imposição de valores religiosos.</td>
                                </tr>
                                <tr>
                                    <td>Permitir o livre acesso dos adolescentes à instituição.</td>
                                    <td>Segregar o adolescente dentro de um setor específico da unidade; marcar o espaço de atendimento de modo a estigmatizá-lo.</td>
                                </tr>
                                <tr>
                                    <td>Incentivar as trocas, o diálogo entre o adolescente em cumprimento de PSC e os demais usuários da entidade.</td>
                                    <td>Proibir o contato do adolescente com o restante dos usuários da instituição. Atender em dias específicos para evitar o encontro do adolescente com outros públicos do CREAS (caso o adolescente tenha conflitos com outros usuários, a equipe deve analisar as alterantivas para proteção de todos.)</td>
                                </tr>
                                <tr>
                                    <td>Propiciar a prática de tarefas lúdicas, didáticas e interessantes para adolescente, afastando a execução da PSC de um caráter laboral ou punitivo.</td>
                                    <td>Impor tarefas humilhantes, perigosas ou degradantes como forma de PSC (lidar com produtos químicos, exposição da imagem do adolescente).</td>
                                </tr>
                                <tr>
                                    <td>Oferecer ambiente adequado de atendimento conforme previsto no caderno de orientações do CREAS.</td>
                                    <td>Atender em ambiente que não preserve o sigilo ou ofereça condições divergentes às normativas do SUAS.</td>
                                </tr>
                                <tr>
                                    <td>Acompanhar as atividades do adolescente na instituição parceira (incluindo supervisão, apoio técnico e visitas).</td>
                                    <td>Não fazer contato com a instituição parceira.</td>
                                </tr>
                                <tr>
                                    <td>Realizar acompanhamento socioassistencial e os encaminhamentos conforme orientação técnica do serviço.</td>
                                    <td>Delegar à entidade parceira o acompanhamento socioassistencial.</td>
                                </tr>
                                <tr>
                                    <td>Capacitar a instituição parceira sobre o funcionamento da PSC.</td>
                                    <td>Encaminhar o adolescente sem a devida capacitação da instituição parceira.</td>
                                </tr>
                                <tr>
                                    <td>Preencher, periodicamente, os sistemas de monitoramento do serviço</td>
                                    <td>Não registrar os atendimentos realizados.</td>
                                </tr>
                                <tr>
                                    <td>Promover o acesso do adolescente às demais políticas públicas por meio da estruturação de fluxos e protocolos intersetoriais.</td>
                                    <td>Encaminhar os adolescentes a outras políticas, sem articulação prévia com as mesma. Prestar informações insuficientes para o acesso.</td>
                                </tr>
                                <tr>
                                    <td>Subsidiar, de forma crítica e refletida, o sistema de justiça acerca da situação do adolescente para a tomada de decisões.</td>
                                    <td>Enviar os relatórios ao sistema de justiça sem devido aprofundamento técnico e teórico.</td>
                                </tr>
                                <tr>
                                    <td>Acompanhar, com especial ênfase, o desenvolvimento escolar do adolescente, bem como a adesão a serviços de rede.</td>
                                    <td>Deixar de realizar a referência e contra-referência com as políticas de educação e saúde.</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>

                        <p class="FonteFigura text-end">Fonte: Guia de Orientações para Entidades Assistenciais, Hospitais, Escolas e Estabelecimentos Congêneres bem como os Programas Comunitários e Governamentais que recebem adolescentes para o cumprimento de Prestação de Serviços à Comunidade (2022, p. 08-09).</p>


                        <p>As atividades da PSC não podem ser entendidas como um fim em si mesmas, elas são um instrumento para o alcance de um objetivo: a socioeducação. Ainda que a qualificação da oferta do serviço e o acompanhamento da medida sejam fundamentais, o foco da equipe deve ser o adolescente e não o cumprimento das atividades.</p>




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
                <a href="Topico02.2.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico02.4.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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