<?php $__env->startSection('title', ' - Nova Operadora'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.mensagens', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="<?php echo e(route('operadoras.cadastrar')); ?>" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Operadoras</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">Código</th>
                    <th>Nome</th>
                    <th>País</th>
                    <th>Ação</th>
                   </tr>
                </thead>

                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $operadoras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $operadora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                    <td><?php echo e($operadora->codigo_operadora); ?></td>
                    <td><?php echo e($operadora->nome_operadora); ?></td>
                    <td><?php echo e($operadora->pais); ?></td>
                    <td>
                      <div>
                        <a class="btn btn-warning btn-xs" href="<?php echo e(url('/editar-operadora/'.$operadora->id)); ?>" role="button">Editar</a>  
                        <a class="btn btn-danger btn-xs" href="<?php echo e(url('/excluir-operadora/'.$operadora->id)); ?>" role="button">Excluir</a>  
                      </div>
                   </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
                </tbody>

              </table>
            </div>

            <div class="box-footer clearfix">
              
                     <?php echo e($operadoras->links()); ?>

           
            </div>
          </div>

        </div>

      </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>