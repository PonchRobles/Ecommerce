
{!! Form::open(['url' => $url, 'method' => $method, 'files' => true])!!}
<div class="form-group">
  {{Form::text('title',$product->title,['class' => 'form-control',
  'placeholder'=>'Titulo...'])   }}
</div>
  <div class="form-group">
    {{Form::number('pricing',$product->pricing,['class' => 'form-control',
    'placeholder'=>'precio de tu producto en centavos de dolar...'])   }}
  </div>

<div class="form-group">
  {{Form::file('cover')}}
</div>

<div class="form-group">

    {{Form::textarea('description',$product->description,['class' => 'form-control',
    'placeholder'=>'describe tu producto...'])   }}
  </div>

    <div class="form-group">
    <a href="{{url('/products')}}">Regresar al listado de productos</a>
<input type="submit" value="Enviar" class="btn btn-success"></input>
    </div>

{!! Form::close()!!}
</div>
