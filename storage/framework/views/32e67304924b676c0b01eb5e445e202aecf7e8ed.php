<?php $__env->startSection('title', ' - Nova Operadora'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.mensagens', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="<?php echo e(route('rastreadores.cadastrar')); ?>" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rastreadores</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Serial</th>
                  <th>Nome</th>
                  <th>Operadora</th>
                  <th>Pais operadora</th>
                  <th>Ação</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $rastreadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rastreador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                  <td><?php echo e($rastreador->serial); ?></td>
                  <td><?php echo e($rastreador->nome); ?></td>
                  <td><?php echo e($rastreador->nome_operadora); ?></td>
                  <td><?php echo e($rastreador->pais); ?></td>
                  <td>
                    <div>
                      <a class="btn btn-warning btn-xs" href="<?php echo e(url('/editar-rastreador/'.$rastreador->serial)); ?>" role="button">Editar</a>  
                      <a class="btn btn-danger btn-xs" href="<?php echo e(url('/excluir-rastreador/'.$rastreador->serial)); ?>" role="button">Excluir</a>  
                    </div>
                </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
              </table>
            </div>

          </div>

        </div>

      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>