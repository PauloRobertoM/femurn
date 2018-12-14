<?php include 'components/header.php'; ?>

      <section class="topo2">
         <div class="container">
            <h1>Fale Conosco</h1>

            <ol class="breadcrumb">
               <li><a href="#">Início</a></li>
               <li class="active">Fale Conosco</li>
            </ol>
         </div><!-- .container -->
      </section><!-- .topo2 -->

      <section class="interna fale-conosco">
         <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                  <form>
                    <div class="form-group">
                       <label>Nome</label>
                       <input type="text" name="nome" id="nome" class="form-control" value="" />
                    </div><!-- .form-group -->

                    <div class="form-group">
                       <label>Assunto</label>
                       <input type="text" name="assunto" id="assunto" class="form-control" value="" />
                    </div><!-- .form-group -->
                    
                    <div class="row">
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                             <label>E-mail</label>
                             <input type="text" name="email" id="email" class="form-control" value="" />
                          </div><!-- .form-group -->
                       </div><!-- .md-6 -->
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                             <label>Telefone</label>
                             <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                          </div><!-- .form-group -->
                       </div><!-- .md-6 -->
                    </div><!-- .row -->

                    <div class="form-group">
                       <label>Mensagem</label>
                       <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div><!-- .form-group -->

                    <input type="submit" class="botao pull-right" value="Enviar" />
                 </form>
               </div><!-- .md-8 -->
               <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                  <h4>Endereço</h4>
                  <p>Rua Maria Auxiliadora, 756 - Tirol, Natal/RN CEP: 59014-500</p>
                  <h4>Informações</h4>
                  <h5>Telefones</h5>
                  <p>(84) 3212-2545 / 3212.2882 / 99921-9963</p>
                  <h5>Secretaria Geral</h5>
                  <p>municipiosrn@uol.com.br</p>
                  <h5>Assessoria de Comunicação</h5>
                  <p>comunicacaofemurn@gmail.com</p>
                </div><!-- .md-4 -->
            </div><!-- .row -->
         </div><!-- .container -->
      </section><!-- .interna-blog -->

<?php include 'components/footer.php'; ?>