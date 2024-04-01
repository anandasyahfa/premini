@extends('kerangka.master')

@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>Document</title>
        <style>
            .small-box-footer {
                color: blue;
            }
        </style>
    </head>

    <body>

        <section class="content">


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 21rem;">
                        <img src="{{ asset('image/cobamie.png') }}" width="175" height="250" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mie Suit</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya -></a>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="width: 21rem;">
                        <img src="{{ asset('image/cobamie.png') }}" width="175" height="250" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mie Hompimpa</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya -></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card border-primary mb-3" style="width: 21rem;">
                        <img src="{{ asset('image/cobamie.png') }}" width="175" height="250" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mie Gacoan</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Selengkapnya -></a>
                        </div>
                    </div>
                </div>

            </div>

            </div>
            </div>
            </div>
            </div>
        </section>
    </body>

    </html>
@endsection
