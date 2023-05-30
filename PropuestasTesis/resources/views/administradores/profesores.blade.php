@extends('templates.master')

@section('contenido-principal')
<div>
    <table class="table table-striped table-hover">
        <thead>
            <th>N</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
        <tbody>
            @foreach ($profesores as $num=>$profesor)
            <tr>
                <td class="align-middle">{{ $num+1 }}</td>
                <td class="align-middle">{{ $profesor->Rut }}</td>
                <td class="align-middle">{{ $profesor->Nombre }}</td>
                <td class="align-middle">{{ $profesor->Apellido }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
@endsection