<?php $__env->startSection('title', ' - Novo rastreador'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
     <div class="row">
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Editar rastreador</h3>
            </div>
            
            <div class="box-body">
              	<form method="POST" action="<?php echo e(route('rastreadores.atualizar')); ?>">

              		<?php echo csrf_field(); ?>

                  <input type="hidden" name="oldSerial" value="<?php echo e($rastreador->serial); ?>">
              		<div class="row">
	              		<div class="form-group col-md-12">
	              			<label for="serial">Serial</label>
	                  		<input name="serial" type="text" class="form-control" id="serial" value="<?php echo e($rastreador->serial); ?>" maxlength="30" required="">
	              		</div>	              		
	              	</div>

              		<div class="row">
                  		<div class="form-group col-md-6">
    	              			<label for="nome">Nome</label>
    	              			<input name="nome" type="text" class="form-control" id="nome" value="<?php echo e($rastreador->nome); ?>" 
                                 maxlength="100" required="">	
    	              		</div>
    	
                        <div class="col-md-6">
                        <div class="form-group">
                          <label>Operadora</label>
                          <select name="id_operadora" class="form-control select2" style="width: 100%;">
                            <option selected="selected" value="<?php echo e($rastreador->id_operadora); ?>"><?php echo e($rastreador->nome_operadora); ?> - <?php echo e($rastreador->pais_operadora); ?></option>
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