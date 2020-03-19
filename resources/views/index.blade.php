<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Slack project</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="css/album.css" rel="stylesheet">
    </head>
    <body>

        <main role="main">
            <section class="jumbotron text-center">
                <div class="container">
                <h1 class="jumbotron-heading">Send to Slack</h1>
                <p class="lead text-muted">Here you can send a message to Slack. Simply and easily.</p>

                <form action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-row align-items-center">
                        <div class="col-10">
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="message" placeholder="Message">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary mb-2">Send</button>
                        </div>
                    </div>
                </form>
                </div>
            </section>
        </main>

    </body>
</html>
