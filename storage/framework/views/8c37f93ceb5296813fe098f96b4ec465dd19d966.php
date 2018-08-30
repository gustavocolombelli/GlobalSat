<?php $__env->startSection('title', ' - Novo veículo'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.mensagens', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
     <div class="row">
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar novo veículo</h3>
            </div>
            
            <div class="box-body">
                <form method="POST" action="<?php echo e(route('veiculos.inserir')); ?>" name="myForm">

                  <?php echo csrf_field(); ?>

                
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="chassi">Número do chassi</label>
                        <input name="chassi" type="text" class="form-control" id="chassi" placeholder="Chassi" maxlength="17" required="">
                    </div>   
                      <div class="form-group col-md-6">
                          <label for="ano_fabricacao">Ano de fabricação</label>
                          <input name="ano_fabricacao" type="text" class="form-control" id="ano_fabricacao" placeholder="Ano" 
                                 maxlength="4" required=""> 
                      </div>
                                        
                  </div>

                  <div class="row">
                    <div class="form-group col-md-4">
                        <label for="serial"></label>
                        <div class="input-group margin">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger" name="serial" id="serial" data-toggle="modal" data-target="#modal-default">Escolher</button>
                </div>
                <input type="text" name="serialEscolhido" id="serialEscolhido" class="form-control" disabled="">
              </div> 
                      </div> 

                      <div class="form-group col-md-4">
                          <label for="placa">Placa</label>
                          <input name="placa" type="text" class="form-control" id="placa" placeholder="Placa" 
                                 maxlength="10" required="">  
                      </div>
                              
                  </div>



            <div class="col-md-6">
                 <button type="submit" class="btn btn-success">Salvar</button>
                 <a class="btn btn-primary" href="<?php echo e(route('veiculos.index')); ?>" role="button">Voltar</a>
            </div>
            

            <div class="box-footer clearfix">
               
            </div>
          </div>

        </div>

      </div>

<div class="modal fade form-group" id="modal-default">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Rastreadores</h4>
              </div>
              <div class="modal-body form-group">
                <iframe name="myIframe" id="myIframe" src="<?php echo e(route('rastreadores.todos')); ?>" frameborder="0" width="100%" height="100%"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" name="save" id="save" >Escolher</button>
              </div>
            </div>
          </div>
</div>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
  
    $('#save').click(function() {
      var iframe = document.getElementById('myIframe')  ;
      var innerDoc = (iframe.contentDocument) ? iframe.contentDocument : iframe.contentWindow.document;
      var ulObj = innerDoc.getElementById("r").value;


      var a = ulObj;
      //a = innerDoc.getElementById("r").rows[0].cells[1].innerHTML;
      $('#serialEscolhido').val(a);




      $('#modal-default').modal('hide');
    });

});
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>