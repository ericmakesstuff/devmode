@extends('app')

@section('content')
    <h1>Set Stress Level</h1>
    <button class="btn btn-danger set-status-button" data-level="severe">Severe</button>
    <button class="btn btn-warning set-status-button" data-level="high">High</button>
    <button class="btn btn-elevated set-status-button" data-level="elevated">Elevated</button>
    <button class="btn btn-info set-status-button" data-level="guarded">Guarded</button>
    <button class="btn btn-success set-status-button" data-level="low">Low</button>
@endsection
