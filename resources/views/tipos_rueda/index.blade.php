<!DOCTYPE html>
<html>
<head>
<title>Tipos de ruedas</title>

<style>

body{
    background:#1a1a1a;
    color:white;
    font-family:Arial;
}

.container{
    width:70%;
    margin:40px auto;
}

h1{
    color:#FFD000;
}

input{
    padding:8px;
    border-radius:5px;
    border:none;
    width:250px;
}

button{
    background:#FFD000;
    border:none;
    padding:8px 15px;
    border-radius:20px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:#e6be00;
}

table{
    width:100%;
    margin-top:20px;
    background:#2b2b2b;
    border-radius:10px;
}

th,td{
    padding:10px;
    text-align:left;
}
.btn-editar{
    background:#3498db;
    padding:6px 12px;
    border-radius:15px;
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.btn-editar:hover{
    background:#2d7fb9;
}

</style>

</head>

<body>

<div class="container">

<h1>Tipos de ruedas</h1>

<form method="POST" action="/tipos-rueda">
@csrf

<label>Nombre del tipo de rueda</label><br><br>

<input type="text" name="nombre" placeholder="Ej: Tracción">

<button type="submit">Guardar</button>

</form>

<hr>

<h2>Lista de tipos de ruedas</h2>

<table>

<tr>
<th>ID</th>
<th>Tipo de rueda</th>
<th>Acción</th>
</tr>

@foreach($tipos as $tipo)

<tr>

<td>{{ $tipo->id }}</td>

<td>{{ $tipo->nombre }}</td>

<td>

<a href="/tipos-rueda/{{ $tipo->id }}/edit" class="btn-editar">Editar</a>

<form method="POST" action="/tipos-rueda/{{ $tipo->id }}" style="display:inline;">
@csrf
@method('DELETE')

<button>Eliminar</button>

</form>

</td>

</tr>

@endforeach

</table>

</div>

</body>
</html>