@extends('layout.admin')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Liste Contacts</h5>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Email</th>
                                                <th>Sujet</th>
                                                <th>Message</th>
                                                <th>Télephone</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{$contact->nom}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->subject}}</td>
                                                <td>{{$contact->message}}</td>
                                                <td>{{$contact->phone}}</td>
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
        </div>
@endsection
