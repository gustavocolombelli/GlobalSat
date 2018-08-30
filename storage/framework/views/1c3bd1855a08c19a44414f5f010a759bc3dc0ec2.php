<?php $__env->startSection('title', ' - Novo veículo'); ?>

<?php $__env->startSection('content_header'); ?>
 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.includes.mensagens', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <div class="row">
        <div class="col-md-4">
             <a class="btn btn-success" href="<?php echo e(route('veiculos.cadastrar')); ?>" role="button">Adicionar Novo</a>
        </div>
        
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Veículos</h3>
            </div>
            
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Placa</th>
                  <th>Chassi</th>
                  <th>Ano Fabricação</th>
                  <th>Nome rastreador</th>
                  <th>Serial</th>
                  <th>Operadora</th>
                  <th>Código</th>
                  <th>Pais Operadora</th>
                  <th>Ação</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $veiculos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $veiculo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                  <tr>
                      <td><?php echo e($veiculo->placa); ?></td>
                      <td><?php echo e($veiculo->chassi); ?></td>
                      <td><?php echo e($veiculo->ano_fabricacao); ?></td>
                      <td><?php echo e($veiculo->nome); ?></td>
                      <td><?php echo e($veiculo->serial); ?></td>
                      <td><?php echo e($veiculo->nome_operadora); ?></td>
                      <td><?php echo e($veiculo->codigo_operadora); ?></td>
                      <td><?php echo e($veiculo->pais); ?></td>
                      <td>
                        <div>
                          <a class="btn btn-warning btn-xs" href="<?php echo e(url('/editar-veiculo/'.$veiculo->placa)); ?>" role="button">Editar</a>  
                          <a class="btn btn-danger btn-xs"href="<?php echo e(url('/excluir-veiculo/'.$veiculo->placa)); ?>" role="button">Excluir</a>  
                        </div>
                      </td>
                  </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
              </table>
            </div>

            <div class="box-footer clearfix">
              <?php echo e($veiculos->links()); ?>

            </div>
          </div>

        </div>

      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>