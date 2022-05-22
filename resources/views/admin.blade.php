@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Dashboard</h5>
                </div>
            </div>

            <br>

            <div class="row">

                <div class="col-8">

                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <div class="row">
                                <h7 class="card-subtitle fw-lighter mb-2 text-muted">PROJECT</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">AIPROJECT</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <p class="fst-normal mt-3 mb-0" style="color: #62666A">LARAVEL 9</p>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <a href="" class="btn btn-outline-primary float-end">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col">

                    <div class="card shadow-sm text-light rounded-3" style="background-color: #576ACA">
                        <div class="card-body">
                            <div class="row">
                                <h7 class="card-subtitle mb-2 fw-lighter">DATABASE</h7>
                            </div>
                            <div class="row">
                                <h5 class="card-title fw-bolder">PHPMYADMIN</h5>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <p class="fst-normal mt-3 mb-0">MYSQL</p>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=laravel" target="_blank" class="btn btn-outline-light float-end">Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-4">

                <div class="col">
                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Content</th>
                                        <th scope="col">Content Title</th>
                                        <th scope="col">Desc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data1 as $data)
                                        <tr>
                                            <td>{{ $data['content'] }}</td>
                                            <td>{{ $data['contentTitle'] }}</td>
                                            <td>{{ $data['desc'] }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4">

                <div class="col">
                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Content</th>
                                        <th scope="col">Content Title</th>
                                        <th scope="col">Desc</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data2 as $data)
                                        <tr>
                                            <td>{{ $data['content'] }}</td>
                                            <td>{{ $data['contentTitle'] }}</td>
                                            <td>{{ $data['desc'] }}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4">

                <div class="row mt-4">

                    <div class="col">
                        <div class="card shadow-sm bg-white rounded-3">
                            <div class="card-body">
                                <table class="table table-hover table-borderless table-responsive">
                                    <thead>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Adress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data3 as $data)
                                            <tr>
                                                <td>{{ $data['email'] }}</td>
                                                <td>{{ $data['notelp'] }}</td>
                                                <td>{{ $data['alamat'] }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
