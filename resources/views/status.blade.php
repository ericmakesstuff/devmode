@extends('app')

@section('content')
<div class="jumbotron">
    <h1>Developer Stress</h1>
    <div id="status-button-container" class="row">
        <div class="col-sm-12 col-md-6 col-md-offset-3">
            <button type="button" data-level="severe" class="btn btn-danger btn-lg status-button disabled">
                SEVERE
                <div class="small">Even if I make eye contact, don't talk to me.</div>
            </button>
            <button type="button" data-level="high" class="btn btn-warning btn-lg status-button disabled">
                HIGH
                <div class="small">Deadline looming - emergency contact only!</div>
            </button>
            <button type="button" data-level="elevated" class="btn btn-elevated btn-lg status-button disabled">
                ELEVATED
                <div class="small">Hazards on the horizon - proceed cautiously.</div>
            </button>
            <button type="button" data-level="guarded" class="btn btn-info btn-lg status-button disabled">
                GUARDED
                <div class="small">This project could grow legs, but okay ATM.</div>
            </button>
            <button type="button" data-level="low" class="btn btn-success btn-lg status-button disabled">
                LOW
                <div class="small">Nothing pressing, just knocking out some small tasks.</div>
            </button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="application/javascript">setLevel('{{ $level }}');</script>
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.log = function(message) {
        if (window.console && window.console.log) {
            window.console.log(message);
        }
    };

    var pusher = new Pusher('7f1ae275b2a2328ef80f');
    var channel = pusher.subscribe('status');
    channel.bind('App\\Events\\StatusLevelUpdated', function(data) {
        setLevel(data.log.level);
    });
</script>
@endsection
