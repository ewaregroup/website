@extends('layouts.appbase')
@section('content')
    <!-- Settings Section Start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Profile Information Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Informations de profil</h5>
                                    </div>
                                    <div class="title-header">
                                        <p>Mettez à jour les informations de profil et l'adresse email de votre compte</p>
                                    </div>
                                    <form method="post" action="{{ route('profile.update') }}" class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        @method('patch')

                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0" for="name">Nom d'utilisateur</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name" placeholder="Entrez votre nom d'utilisateur">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0" for="email">Email</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required autocomplete="username" placeholder="Entrez votre email">
                                                    @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror

                                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                                        <div class="mt-2">
                                                            <p class="text-sm text-gray-800">
                                                                {{ __('Votre adresse e-mail n\'a pas été vérifiée.') }}

                                                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    {{ __('Cliquez ici pour renvoyer l\'email de vérification.') }}
                                                                </button>
                                                            </p>

                                                            @if (session('status') === 'verification-link-sent')
                                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                                    {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                                                                </p>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-solid">Enregistrer</button>

                                        @if (session('status') === 'profile-updated')
                                            <p class="text-success mt-2">Profil mis à jour avec succès.</p>
                                        @endif
                                    </form>

                                    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!-- Profile Information End -->


                            <!-- Change Password Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5 class="mb-2">Modifier le mot de passe</h5>
                                    </div>
                                    <div class="title-header">
                                        <p class="mb-4">Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.</p>
                                    </div>
                                    <form method="post" action="{{ route('password.update') }}" class="theme-form theme-form-2 mega-form">
                                        @csrf
                                        @method('put')

                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Ancien mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="update_password_current_password" name="current_password" type="password" placeholder="Entrez votre ancien mot de passe" autocomplete="current-password">
                                                    @error('current_password', 'updatePassword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Nouveau mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="update_password_password" name="password" type="password" placeholder="Entrez votre nouveau mot de passe" autocomplete="new-password">
                                                    @error('password', 'updatePassword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title col-sm-2 mb-0">Confirmer le nouveau mot de passe</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="update_password_password_confirmation" name="password_confirmation" type="password" placeholder="Confirmer votre nouveau mot de passe" autocomplete="new-password">
                                                    @error('password_confirmation', 'updatePassword')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-solid">Enregistrer</button>

                                        @if (session('status') === 'password-updated')
                                            <p class="text-success mt-2">Mot de passe mis à jour avec succès.</p>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <!-- Change Password End -->


                            <!-- Delete Account Start -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5 class="mb-2">Supprimer votre compte</h5>
                                    </div>
                                    <div class="title-header">
                                        <p class="mb-4">Cette action est irréversible. Tous vos données seront supprimées définitivement.</p>
                                    </div>
                                    <button data-bs-toggle="modal" data-bs-target="#deleteModal" id="deleteModalButton" type="button" class="btn" style="background-color: #bd3737; color: white;">Supprimer</button>
                                </div>

                                <!-- Delete Modal Start -->
                                <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h5 class="modal-title mb-2" id="deleteModalLabel">Supprimer le compte</h5>
                                                <p>Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.</p>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <div class="button-box mt-3">
                                                    <button type="button" class="btn btn--no btn-secondary" data-bs-dismiss="modal">Non</button>
                                                    <button type="button" class="btn btn--yes btn-danger" onclick="document.getElementById('delete-form').submit();">Oui</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End -->

                                <!-- Delete Account Form -->
                                <form id="delete-form" action="{{ route('profile.destroy') }}" method="POST" style="display: none;">
                                    @csrf
                                    <!-- Ajoutez des champs cachés si nécessaire -->
                                </form>
                            </div>
                            <!-- Delete Account End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings Section End -->
@endsection









{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Profile') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.update-profile-information-form')--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.update-password-form')--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
{{--                <div class="max-w-xl">--}}
{{--                    @include('profile.partials.delete-user-form')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

{{--<!-- Change Password Start -->--}}
{{--<div class="card">--}}
{{--    <div class="card-body">--}}
{{--        <div class="title-header option-title">--}}
{{--            <h5>Modifier le mot de passe</h5>--}}
{{--        </div>--}}
{{--        <div class="title-header">--}}
{{--            <p class="mb-4">Assurez-vous que votre compte utilise un mot de passe long et aléatoire pour rester sécurisé.</p>--}}
{{--        </div>--}}
{{--        <form class="theme-form theme-form-2 mega-form">--}}
{{--            <div class="row">--}}
{{--                <div class="mb-4 row align-items-center">--}}
{{--                    <label class="form-label-title col-sm-2 mb-0">Ancien mot de passe</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <input class="form-control" type="password" placeholder="Entrez votre ancien mot de passe">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-4 row align-items-center">--}}
{{--                    <label class="form-label-title col-sm-2 mb-0">Nouveau mot de passe</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <input class="form-control" type="password" placeholder="Entrez votre nouveau mot de passe">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-4 row align-items-center">--}}
{{--                    <label class="form-label-title col-sm-2 mb-0">Confirmer le nouveau mot de passe</label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <input class="form-control" type="password" placeholder="Confirmer votre nouveau mot de passe">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <button type="submit" class="btn btn-solid">Enregistrer</button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}
