<?php $__env->startSection('title', ' - Novo rastreador'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.mensagens', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <div class="row">
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastrar novo rastreador</h3>
            </div>
            
            <div class="box-body">
              	<form method="POST" action="<?php echo e(route('rastreador.inserir')); ?>">

              		<?php echo csrf_field(); ?>

                
              		<div class="row">
	              		<div class="form-group col-md-12">
	              			<label for="serial">Serial</label>
	                  		<input name="serial" type="text" class="form-control" id="serial" placeholder="Serial" maxlength="30" required="">
	              		</div>	              		
	              	</div>

              		<div class="row">
                  		<div class="form-group col-md-6">
    	              			<label for="nome">Nome</label>
    	              			<input name="nome" type="text" class="form-control" id="nome" placeholder="Nome" 
                                 maxlength="100" required="">	
    	              		</div>
    	
                        <div class="col-md-6">
                        <div class="form-group">
                          <label>Operadora</label>
                          <select name="id_operadora" class="form-control select2" style="width: 100%;">
              
                            <?php $__currentLoopData = $operadoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operadora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($operadora->id); ?>"><?php echo e($operadora->nome_operadora); ?> - <?php echo e($operadora->pais); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
    	              	</div>
                  </div>
            </div>

            <div class="col-md-6">
		             <button type="submit" class="btn btn-success">Salvar</button>
		             <a class="btn btn-primary" href="<?php echo e(route('rastreadores.index')); ?>" role="button">Voltar</a>
		        </div>
            </form>

            <div class="box-footer clearfix">
            	
            </div>
          </div>

        </div>

      </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>