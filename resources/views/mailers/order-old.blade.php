<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hola</h1>
	<p>Tenviamos los datos de tu compra</p>
	<table>
		<tr>
			<th>Producto</th>
			<th>Costo</th>
		</tr>
		<tbody>
			@foreach($products as $product)
				<td>{{"product->title"}}</td>
				<td>{{"product->pricing"}}</td>
			@endforeach
		<tr>
			<td>Total</td>
			<td>{{"$order->total"}}</td>
		</tr>
		</tbody>
	</table>
</body>
</html>