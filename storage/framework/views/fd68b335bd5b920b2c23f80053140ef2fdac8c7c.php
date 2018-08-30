<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
    <table id="tRastreadores" class="table table-sm" >
                    <tr>
                      <th >Ação</th>
                      <th>Serial</th>
                      <th>Nome</th>

                    </tr>
              
                    <?php $__empty_1 = true; $__currentLoopData = $rastreadores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rastreador): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                       <tr >
                     <td ><input type="radio" id="r" name="r" value="<?php echo e($rastreador->serial); ?>"></td></center>
                      <td><?php echo e($rastreador->serial); ?></td>
                      <td><?php echo e($rastreador->nome); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
    </table>
    <?php echo e($rastreadores->links("pagination::bootstrap-4")); ?>


</body>
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
