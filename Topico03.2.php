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

                        <p class="SubTitulo">Bases legais para a elaboração do PIA</p>
                        <hr>
                        <br>

                        <p>A seguir comentaremos os principais artigos da Lei do SINASE (Lei nº 12.594/2012) que se configuram como bases legais para a elaboração do PIA.</p>

                        <div class="bd-callout bd-callout-warning">
                            <ul class="none">
                                <li class="wow fadeInUp" data-wow-delay="0.3s"><strong> Art. 52º</strong> - natureza obrigatória do PIA; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="0.6s"><strong> Art. 41º</strong> - versa sobre a avaliação do juiz e seu indeferimento, caso ache necessário; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="0.9s"><strong> Art. 42º</strong> - trata da avaliação a cada seis meses de sua evolução; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="1.3s"><strong> Art. 44º</strong> - afirma que pode ser alterado, desde que autorizado pela autoridade judiciária; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="1.6s"><strong> Art. 49º</strong> – determina a participação do adolescente nesse processo, além do Art. 56º que nos reporta ao cumprimento das medidas socioeducativas de Prestação de Serviços à Comunidade (PSC) e de Liberdade Assistida (L.A) estabelecendo o prazo de até 15 dias do ingresso do adolescente no programa de atendimento para a entrega do PIA; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="1.9s"><strong> Art. 58º</strong> - trata da reavaliação da medida, sendo obrigatória a apresentação pela direção do programa de atendimento e relatório da equipe técnica sobre a evolução do adolescente no cumprimento do plano individual de atendimento; </li><br>
                                <li class="wow fadeInUp" data-wow-delay="2.3s"><strong> Art. 59º</strong> - prevê o acesso ao PIA restrito aos servidores do respectivo programa de atendimento, ao adolescente e a seus pais ou responsável, ao Ministério Público e ao defensor, exceto expressa autorização judicial. </li><br>
                            </ul>
                        </div>


                        <!-- Fique Atento -->
                        <div class="FiqueAtentoCaixa">
                            <p class="FiqueAtentoTitulo"> Fique Atento</p>
                            <div class="FiqueAtentoTexto">
                                <p class="text-center"><strong>LEI Nº 12.594/2012 - LEI DO SINASE</strong></p>
                                <p><strong>Art. 41</strong> - A autoridade judiciária dará vistas da proposta de plano individual de que trata ao Defensor e ao Ministério Público pelo prazo sucessivo de 3 (três) dias, contados do recebimento da proposta encaminhada.</p>
                                <p><strong>Art. 42</strong> - As medidas socioeducativas de liberdade assistida, de semiliberdade e de internação deverão ser reavaliadas no máximo a cada 6 (seis) meses, podendo a autoridade judiciária, se necessário, designar audiência, no prazo máximo de 10 (dez) dias, cientificando o defensor, o Ministério Público, a direção do programa de atendimento, o adolescente e seus pais ou responsável.</p>
                                <p><strong>Art. 44</strong> - Na hipótese de substituição da medida ou modificação das atividades do plano individual, a autoridade judiciária remeterá o inteiro teor da decisão à direção do programa de atendimento, assim como as peças que entender relevantes à nova situação jurídica do adolescente.</p>
                                <p><strong>Art. 52</strong> - Natureza obrigatória - “(...) instrumento de previsão, registro e gestão das (…) atividades a serem desenvolvidas com o adolescente”. Parágrafo ùnico “deverá contemplar a participação dos pais ou responsáveis, os quais têm o dever de contribuir com o processo ressocializador do adolescente (...)”.</p>
                                <p><strong>Art. 54</strong> - Constarão do plano individual, no mínimo:</p>

                                <ol type="I">
                                    <li class="wow fadeInDown" data-wow-delay="0.3s"> os resultados da avaliação interdisciplinar;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.6s"> os objetivos declarados pelo adolescente;</li>
                                    <li class="wow fadeInDown" data-wow-delay="0.9s"> a previsão de suas atividades de integração social e/ou capacitação profissional;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.3s"> atividades de integração e apoio à família;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.6s"> formas de participação da família para efetivo cumprimento do plano individual;</li>
                                    <li class="wow fadeInDown" data-wow-delay="1.9s"> as medidas específicas de atenção à sua saúde.</li>
                                </ol>

                                <p><strong>Art. 56</strong> - Para o cumprimento das medidas de prestação de serviços à comunidade e de liberdade assistida, o PIA será elaborado no prazo de até 15 (quinze) dias do ingresso do adolescente no programa de atendimento.</p>
                                <p><strong>Art. 57</strong> - Para a elaboração do PIA, a direção do respectivo programa de atendimento, pessoalmente ou por meio de membro da equipe técnica, terá acesso aos autos do procedimento de apuração do ato infracional e aos dos procedimentos de apuração de outros atos infracionais atribuídos ao mesmo adolescente.</p>
                                <p><strong>Art. 58</strong> - Por ocasião da reavaliação da medida, é obrigatória a apresentação pela direção do programa de atendimento e relatório da equipe técnica sobre a evolução do adolescente no cumprimento do plano individual.</p>
                                <p><strong>Art. 59</strong> - O acesso ao plano individual será restrito aos servidores do respectivo programa de atendimento, ao adolescente e a seus pais ou responsável, ao Ministério Público e ao defensor, exceto expressa autorização judicial.*</p>

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
                <a href="Topico03.3.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true">Próximo <i class="fa fa-chevron-right"></i></a>
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