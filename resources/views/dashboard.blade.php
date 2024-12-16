@extends('layouts.appbase')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <!-- Table Start -->
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>Entreprises Enrégistrées</h5>
                                <form class="d-inline-flex">
                                    <a href="{{url('entreprises')}}" class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus"></i>Ajouter une Entreprise
                                    </a>
                                </form>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table id="table_id" class="table role-table all-package theme-table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nom</th>
                                                <th>Année</th>
                                                <th>Adresse</th>
                                                <th>Nombre de Projets</th>
                                                <th>Ingénieurs</th>
                                                <th>Régistre</th>
                                                <th>Immatriculation</th>
                                                <th>Logo</th>
                                                <th>Téléphone</th>
                                                <th>Email</th>
                                                <th>Domaine</th>
                                                <th>Document</th>
                                                <th>Documents</th>
                                                <th>Capital</th>
                                                <th>Pays</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($entreprises as $index => $entreprise)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $entreprise->nom }}</td>
                                                <td>{{ $entreprise->annee }}</td>
                                                <td>{{ $entreprise->adresse }}</td>
                                                <td>{{ $entreprise->nombreProjets }}</td>
                                                <td>{{ $entreprise->ingenieur }}</td>
                                                <td>{{ $entreprise->registre }}</td>
                                                <td>{{ $entreprise->immatriculation }}</td>
                                                <td>
                                                    <img src="{{ Storage::url($entreprise->logo) }}" alt="Logo" width="50" height="50">
                                                </td>
                                                <td>{{ $entreprise->phone }}</td>
                                                <td>{{ $entreprise->email }}</td>
                                                <td>{{ $entreprise->domaine }}</td>
                                                <td>
                                                    <a href="{{ Storage::url($entreprise->document) }}" download>Voir le document</a>
                                                </td>
                                                <td>
                                                    <a href="{{ Storage::url($entreprise->documents) }}" download>Voir les documents</a>
                                                </td>
                                                <td>{{ $entreprise->capital }}</td>
                                                <td>{{ $entreprise->pays }}</td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('entreprise_edit', ['id' => $entreprise->id]) }}" class="btn btn-outline">Modifier
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Table End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Solsizer 2024 © </p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection







































{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Tableau de Bord') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    {{ __("Vous êtes connecté!") }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12 mt-6">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    <table class="table align-middle mb-0 bg-white">--}}
{{--                        <thead class="bg-light">--}}
{{--                        <tr>--}}
{{--                            <th>Nom</th>--}}
{{--                            <th>Année</th>--}}
{{--                            <th>Adresse</th>--}}
{{--                            <th>Nombre de Projets</th>--}}
{{--                            <th>Nombre d'Ingénieurs</th>--}}
{{--                            <th>Registre</th>--}}
{{--                            <th>Immatriculation</th>--}}
{{--                            <th>Logo</th>--}}
{{--                            <th>Téléphone</th>--}}
{{--                            <th>Email</th>--}}
{{--                            <th>Domaine</th>--}}
{{--                            <th>Document Personnel</th>--}}
{{--                            <th>Documents Entreprise</th>--}}
{{--                            <th>Capital</th>--}}
{{--                            <th>Pays</th>--}}
{{--                            <th>Actions</th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($entreprises as $entreprise)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $entreprise->nom }}</td>--}}
{{--                                <td>{{ $entreprise->annee }}</td>--}}
{{--                                <td>{{ $entreprise->adresse }}</td>--}}
{{--                                <td>{{ $entreprise->nombreProjets }}</td>--}}
{{--                                <td>{{ $entreprise->ingenieur }}</td>--}}
{{--                                <td>{{ $entreprise->registre }}</td>--}}
{{--                                <td>{{ $entreprise->immatriculation }}</td>--}}
{{--                                <td>--}}
{{--                                    @if($entreprise->logo)--}}
{{--                                        <img src="{{ asset('storage/' . $entreprise->logo) }}"--}}
{{--                                             alt="Logo"--}}
{{--                                             style="width: 45px; height: 45px"--}}
{{--                                             class="rounded-circle"--}}
{{--                                        />--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>{{ $entreprise->phone }}</td>--}}
{{--                                <td>{{ $entreprise->email }}</td>--}}
{{--                                <td>{{ $entreprise->domaine }}</td>--}}
{{--                                <td>--}}
{{--                                    @if($entreprise->document)--}}
{{--                                        <a href="{{ asset('storage/' . $entreprise->document) }}" target="_blank">Voir</a>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    @if($entreprise->documents)--}}
{{--                                        <a href="{{ asset('storage/' . $entreprise->documents) }}" target="_blank">Voir</a>--}}
{{--                                    @endif--}}
{{--                                </td>--}}
{{--                                <td>{{ $entreprise->capital }}</td>--}}
{{--                                <td>{{ $entreprise->pays }}</td>--}}
{{--                                <td>--}}
{{--                                    <button type="button" class="btn btn-link btn-sm btn-rounded">--}}
{{--                                        Edit--}}
{{--                                    </button>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

