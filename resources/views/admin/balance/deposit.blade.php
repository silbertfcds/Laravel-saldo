@extends('adminlte::page')

@section('title', 'Nova Recarga')

@section('content_header')
    <h1>Fazer recarga</h1>

    <ol class="breadcrumb">
        <li><a href="">Financeiro</a></li>
        <li><a href="">Saldo</a></li>
        <li><a href="">Depositar</a></li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3>Fazer Recarga</h3>
        </div>
        <div class="box-body">
            @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('deposit.store') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <input type="text" name="value" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Valor Recarga">
                </div>
                <div class="form-group form-check">
                    <button type="submit" class="btn btn-primary">Recarregar</button>  
                </div>
            </form>
        </div>
    </div>
@stop