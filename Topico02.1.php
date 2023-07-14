<?php
$AtividadeAvaliativa = $_GET['AA'];
?>
<?php
// EGPCE - Chama o conectamoodle.php
require_once('conectamoodle.php');
?>

<?php
$page = 'Topico02.1';
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

                  <!-- Sub Título -->
                  <p class="SubTitulo"> AS COPS E OS ACORDOS INTERNACIONAIS</p>
                  <hr>
                  <br>

                  <p>A preocupação ambiental tomou uma proporção maior a partir de 1972, quando foi realizada a Conferência das Nações Unidas sobre o Meio Ambiente, também chamada Conferência de Estocolmo, que foi um marco no que diz respeito à preocupação com o meio ambiente.</p>

                  <p>Com isso, vários estudos foram realizados mostrando os impactos das atividades humanas em diversos aspectos do meio ambiente, e um deles foi o climático. <strong>O buraco na camada de ozônio, os efeitos da poluição atmosférica na saúde, secas prolongadas, grandes tempestades,</strong> tudo isso trouxe visibilidade para a questão climática e despertou nos países a preocupação de discutir e tratar esse assunto.</p>

                  <p>Nesse sentido, durante a Conferência das Nações Unidas sobre Meio Ambiente e Desenvolvimento, conhecida como RIO 92, foi adotada a Convenção-Quadro das Nações Unidas sobre Mudança do Clima, assinada durante a “Cúpula da Terra”. Ela tem o objetivo de </p>

                  <div class="bd-callout bd-callout-success">
                     <p>“estabilizar as concentrações de gases de efeito estufa na atmosfera em um nível que impeça uma interferência humana perigosa no sistema climático. Esse nível deverá ser alcançado em um prazo suficiente que permita aos ecossistemas adaptarem-se naturalmente à mudança do clima, assegurando que a produção de alimentos não seja ameaçada e permitindo ao desenvolvimento econômico prosseguir de maneira sustentável”.</p>
                  </div>

                  <p>A partir de então, todas as negociações internacionais sobre Mudança do Clima passaram a acontecer no âmbito dela, tendo como órgão supremo e principal palco a <strong>Conferência das Partes (COP)</strong>, que acontece anualmente com a presença de todos os países signatários da Convenção.</p>

                  <!-- Titulo Figura -->
                  <div class="text-center">
                     <a href="imagens/Figura15.jpg" data-bs-toggle="modal" data-bs-target="#Imagem15">
                        <img class="img-fluid wow fadeInRight" data-wow-delay="0.5s" width="500" class="img-fluid" src="imagens/Figura15.jpg" alt="Alt da imagem fica aqui">

                     </a>
                  </div>

                  <!-- Imagem 15 - MODAL -->
                  <div class="modal fade text-center" id="Imagem15" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                           <div class="modal-body">
                              <img class="img-fluid" src="imagens/Figura15.jpg" alt="Alt da imagem fica aqui">
                           </div>
                           <div class="modal-footer text-center">

                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Imagem 15 - End -->
                  <br><br>

                  <p>A COP é uma associação de todos os países membros (ou “Partes”) signatários da Convenção, que, após sua ratificação em 1994, passaram a se reunir anualmente a partir de 1995, por um período de duas semanas, para avaliar a situação das mudanças climáticas no planeta e propor mecanismos a fim de garantir a efetividade da Convenção e dos compromissos firmados.</p>

                  <!-- Saiba Mais -->
                  <div class="SaibaMaisCaixa">
                     <p class="SaibaMaisTitulo"> Saiba Mais</p>
                     <div class="SaibaMaisTexto">
                        <p><a href="https://netzero.projetodraft.com/cop-27-conheca-a-historia-e-as-principais-decisoes-da-mais-importante-conferencia-climatica-do-mundo￼/" target="_blank">Conheça a história e as principais decisões da mais importante conferência climática do mundo</a></p>
                     </div>
                  </div>





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
            <a href="Topico02.php?AA=<?php echo $AtividadeAvaliativa ?>" class="btn btn-primary" role="button" aria-pressed="true"><i class="fa fa-chevron-left"></i> Voltar</a>
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