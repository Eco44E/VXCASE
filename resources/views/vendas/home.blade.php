
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<nav style="background:#000000" class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
  <h2 style="color:#ffffff">vx case</h2>
 
    <button style="margin-left:10px" class="btn btn-outline-Light" submit="salvarVenda()">REGISTRAR VENDA</button>
  
</nav>
<form method="post" action="{{ route('vendas.save') }}" accept-charset="UTF-8">
@csrf
@method('POST')


<body style="background: #ffffe6">
<div class="class container">
  <div class="form-group">
    <strong>
    <p style="margin-top: 25px">REGISTRO DE VENDAS</p>
    </strong>
  </div>

  <div class="form-row">

    <div class="form-group col-md-5">
      <label style="font-size: 14px">LISTA DE PRODUTOS (SELECIONE)</label>
      @foreach ($produtos as $item)
      <ul class="list-group">
        <li style="padding: .25rem 1.25rem;" class="list-group-item list-group-item-info"><input value="{{$item->id}}" name="produtos[]" type="checkbox">{{$item -> nome}}</li>
      </ul>
      @endforeach
       
    </div>
  
  <div class="form-group col-md-7">
    <div class="container">
    <strong class="float-right">
      <p style="margin-top: 20px" >RELATÓRIO DE VENDAS</p>
    </strong>
		<table class="table mt-2 text-center">
    <tr>
			<th>Referência</th>
			<th>Produtos</th>
			<th>Previsão de Entrega</th>
    </tr>
    @forelse($vendas as $venda)
    <tr>
      <td>{{$venda->id}}</td>
      <td>
        <ul>
        @foreach($venda->produtos as $produto)
          <li style="list-style: none">{{ $produto->nome }}</li>
        @endforeach
        </ul>
      </td>
      <td>
      <ul>
        @foreach($venda->produtos as $produto)
          <li style="list-style: none">{{ $produto->entrega }}</li>
        @endforeach
      </ul>
      </td>
    </tr>
    @empty
    <tr>
    <p>Não há vendas</p>
    </tr>
    @endforelse
    </table>
  </div>
</div>
</div> 
<div class="conteiner">
</form>
</div>
</body>

