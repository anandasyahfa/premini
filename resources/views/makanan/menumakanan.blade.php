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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box">
                            <div class="inner">
                                <table>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <center>
                                            <h4 style="font-size: 20px">Mie Gacoan</h4>
                                        </center>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <center><img src="{{ asset('image/gacoan.png') }}" alt="" width="500px" height="300px">
                                        </center>
                                    </tr>
                                    <tr>
                                        <center><a href="#" class="small-box-footer text-blue">More info<i
                                            class="fas fa-arrow-circle-right "></i></a></center>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
@endsection
