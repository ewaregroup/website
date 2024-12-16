@extends('layout.admin')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>Liste des entreprises</h5>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-product" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Domaine</th>
                                            <th>Capital</th>
                                            <th>Pays</th>
                                            <th>Phone number</th>
                                            <th>Année de création</th>
                                            <th>Nombre de projets réalisés</th>
                                            <th>Nombre d’ingénieurs</th>
                                            <th>Régistre de commerce</th>
                                            <th>Immatriculation fiscale</th>
                                            <th>Logo</th>
                                            <th>Document du personnel</th>
                                            <th>Documents de l'entreprise</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        @foreach($entreprises as $entreprise)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $entreprise->nom }}</td>
                                                    <td>{{ $entreprise->email }}</td>
                                                    <td>{{ $entreprise->domaine }}</td>
                                                    <td>{{ $entreprise->capital }}</td>
                                                    <td>{{ $entreprise->pays }}</td>
                                                    <td>{{ $entreprise->phone }}</td>
                                                    <td>{{ $entreprise->annee }}</td>
                                                    <td>{{ $entreprise->nombreProjets }}</td>
                                                    <td>{{ $entreprise->ingenieur }}</td>
                                                    <td>{{ $entreprise->registre }}</td>
                                                    <td>{{ $entreprise->immatriculation }}</td>
                                                    <td>
                                                        <img src="{{ Storage::url($entreprise->logo) }}" alt="Logo" width="50" height="50">
                                                    </td>
                                                    <td>
                                                        <a href="{{ Storage::url($entreprise->document) }}" download>Voir le document</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ Storage::url($entreprise->documents) }}" download>Voir les documents</a>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-9">
                                                            <label class="switch">
                                                                <input type="checkbox" checked=""><span
                                                                    class="switch-state"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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





