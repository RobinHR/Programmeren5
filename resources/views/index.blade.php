<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>Voeg nieuwe Speler toe</h4>
            <form action="{{route('footballplayer.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Voornaam</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Voornaam">
                </div>

                <div class="form-group">
                    <label for="">Achternaam</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Achternaam">
                </div>

                <div class="form-group">
                    <label for="">Positie</label>
                    <input type="text" class="form-control" name="position" placeholder="Positie">
                </div>

                <div class="form-group">
                    <label for="">Rugnummer</label>
                    <input type="number" class="form-control" name="back_number" placeholder="Rugnummer">
                </div>

                <div class="form-group">
                    <label for="">Extra Informatie</label>
                    <input type="text" class="form-control" name="extra_information" placeholder="Extra Informatie">
                </div>

                <div class="form-group">
                    <label for="">Land</label>
                    <input type="text" class="form-control" name="country" placeholder="Land">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">SAVE</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
