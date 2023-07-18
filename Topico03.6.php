<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico03.6';
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
                        <p class="SubTitulo">Atores da elaboração do PIA </p>
                        <hr>
                        <br>

                        <div class="bd-callout bd-callout-warning">
                            <p>O PIA será elaborado sob a responsabilidade da equipe técnica do respectivo programa de atendimento, com a participação efetiva do adolescente e de sua família, representada por seus pais ou responsável. (Lei nº 12.594/2012, Art. 53º)</p>
                        </div>

                        <p>As normativas vedam que o adolescente seja atendido por apenas um profissional. A Resolução CONANDA nº 119/2006 e a Norma Operacional Básica - Recursos Humanos (NOB-RH) do SUAS definem que o atendimento técnico deve ser interdisciplinar. Nesse sentido, a construção do PIA precisa de um olhar múltiplo e articulado, contando com, no mínimo, a experiência do Serviço Social, Pedagogia e Psicologia, podendo ainda ter a colaboração de outros profissionais. Dispõe ainda sobre os princípios e diretrizes da gestão do trabalho no SUAS, indicando as equipes de referência dos equipamentos e serviços da Política de Assistência Social.</p>

                        <p>A composição da equipe é imprescindível à qualidade da prestação de serviços da rede socioassistencial. Os técnicos que acompanharão adolescentes em cumprimento de medidas em meio aberto, devem integrar as categorias profissionais previstas pela Resolução CNAS nº 17/2011.</p>

                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p>A Resolução CNAS nº 17/2011 prevê como profissionais do SUAS, aqueles com formação nas áreas: do Direito, da Psicologia e do Serviço Social, bem como pedagogo, sociólogo, terapeuta ocupacional, musicoterapeuta, antropólogo e economista doméstico, ampliando, assim, a interdisciplinaridade.</p>
                            </div>
                        </div>
                        <br><br>

                        <div class="bd-callout bd-callout-primary">
                            <p>De acordo com a citada resolução do CONANDA, é recomendável que a composição da equipe de referência das entidades e/ou programas que executam a medida socioeducativa de PSC e de LA, corresponda ao número de 20 (vinte) adolescentes para cada técnico.</p>
                        </div>

                        <p>Devem também ser considerados os profissionais da rede local de serviços que atendem ou atenderão o adolescente (CREAS, CRAS, CAPS, Conselho Tutelar, Unidade de Saúde, Escolas, demais políticas públicas: trabalho, habitação esporte, cultura e lazer, dentre outras OSC’s) que ofertem os serviços ou programas sociais.</p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">Estabelecer profissionais de referência não significa monopólio do saber sobre o caso ou diminuir a importância das demais áreas. Ainda que exista um técnico de referência, este será o articulador do diálogo interdisciplinar, entendendo que esta é uma condição imprescindível para a socioeducação, de fato, se concretizar e os responsáveis têm o dever de contribuir com o processo de elaboração. (BRASIL, 2022, p. 28)</p>

                        <p>A rede de atendimento precisa ser sistematizada e cada profissional realizar contatos com a área de atuação da rede buscando consolidar o trabalho desenvolvido.</p>



                        <!-- Importante -->
                        <div class="ImportanteCaixa">
                            <p class="ImportanteTitulo"> Importante</p>
                            <div class="ImportanteTexto">

                                <p>É fundamental a participação da família no processo de execução das medidas socioeducativas e até mesmo para a sua proteção.</p>

                                <p>Os responsáveis têm o dever de contribuir com o processo, porém a família precisa estar protegida para que possa exercer seus cuidados com os adolescentes. Perspectivas moralizadoras ou que partam de conceitos como: “família desestruturada”; “anomalia familiar” ou “família disfuncional” reforçam preconceitos, especialmente para aquelas pertencentes às classes mais empobrecidas. (BRASIL, 2022, p. 07)</p>
                            </div>
                        </div>
                        <br><br>

                        <p class="wow fadeIn" data-wow-delay="0.3s">O PIA não finda em si mesmo, ele deve se apresentar como instrumento que evidencia e fortalece as potencialidades reais na busca do acesso a direitos e da ampliação de perspectivas para o futuro dos socioeducandos. “A atribuição do técnico não é apenas ‘fazer o PIA’, visitas domiciliares ou relatórios, essas são ferramentas que atendem a uma necessidade”. (BRASIL, 2022, p. 07) </p>

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
                <a href="Topico03.5.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
                <a href="Topico03.7.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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