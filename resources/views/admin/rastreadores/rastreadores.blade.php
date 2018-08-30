<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<body>
    <table id="tRastreadores" class="table table-sm" >
                    <tr>
                      <th >Ação</th>
                      <th>Serial</th>
                      <th>Nome</th>

                    </tr>
              
                    @forelse($rastreadores as $rastreador)
                       <tr >
                     <td ><input type="radio" id="r" name="r" value="{{ $rastreador->serial }}"></td></center>
                      <td>{{$rastreador->serial}}</td>
                      <td>{{$rastreador->nome}}</td>
                    </tr>
                    @empty
                    @endforelse
    </table>
    {{ $rastreadores->links("pagination::bootstrap-4") }}

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
