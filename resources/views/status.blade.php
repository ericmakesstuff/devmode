<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Developer Stress Level</title>

    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Developer Stress</h1>
            <div id="status-button-container" class="row">
                <div class="col-sm-12 col-md-6 col-md-offset-3">
                    <button type="button" class="btn btn-danger btn-lg status-button disabled">
                        SEVERE
                        <div class="small">Even if I make eye contact, don't talk to me.</div>
                    </button>
                    <button type="button" class="btn btn-warning btn-lg status-button disabled">
                        HIGH
                        <div class="small">Deadline looming - emergency contact only!</div>
                    </button>
                    <button type="button" class="btn btn-elevated btn-lg status-button disabled">
                        ELEVATED
                        <div class="small">Hazards on the horizon - proceed cautiously.</div>
                    </button>
                    <button type="button" class="btn btn-info btn-lg status-button disabled">
                        GUARDED
                        <div class="small">This project could grow legs, but okay ATM.</div>
                    </button>
                    <button type="button" class="btn btn-success btn-lg status-button">
                        LOW
                        <div class="small">Nothing pressing, just knocking out some small tasks.</div>
                    </button>
                </div>
            </div>
        </div>

    </div> <!-- /container -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
