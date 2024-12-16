 @extends('layouts.base')

@section('head')
    <!-- Contenu supplémentaire pour le <head> -->

    <!-- Country Select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.4.0/build/css/intlTelInput.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <style>
        #phone{
            width: 295px;
            height: 45px;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
    <div class="page-body">
        <!-- New User start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 offset-sm-0">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" >
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="title-header option-title">
                                                        <h5>Veuillez saisir les informations</h5>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <form class="theme-form theme-form-2 mega-form" method="POST"  action="{{ route('user.store') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Pays :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <input id="phone" id="pays" name="pays" class="form-control" placeholder="Sélectionnez un pays">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Type utilisation :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <select class="js-example-basic-single w-100" name="type_utilisation" id="usageTypeSelect">
                                                                            <option value="">Veuillez choisir le type utilisation</option>
                                                                            <option value="Maison">Maison</option>
                                                                            <option value="CI">Commerce et Industrie (C&I)</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Nom :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <input class="form-control" type="text" name="nom" placeholder="Entrez votre nom">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Prénom :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <input class="form-control" type="text" name="prenom" placeholder="Entrez votre prénom">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Téléphone :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <input class="form-control" type="number" name="telephone" placeholder="Numéro Téléphone (optionnel)">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="card o-hidden card-hover">
                                                            <div class="card-body p-0">
                                                                <div>
                                                                    <img id="usageImage" src="{{'/assets/images/powers/image/Veuillez choisir le type utilisation.jpg'}}" alt="Type d'utilisation" style="max-width: 100%; height: auto; display: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="d-flex justify-content-end">
                                                            <button type="button" id="nextButton" class="btn btn-primary">Suivant</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-technique" >
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="title-header option-title">
                                                        <h5>Veuillez saisir les informations</h5>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <form class="theme-form theme-form-2 mega-form" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-4 row align-items-center">
                                                                    <label for="solution" class="col-lg-4 col-md-5 form-label-title">Solution :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <select class="form-control" name="solution" id="usagetypeselect" id="solution">
                                                                            <option>Veuillez choisir la Solution recherchée</option>
                                                                            <option>Réduire la facture d’électricité</option>
                                                                            <option>Système secours en cas de coupure</option>
                                                                            <option>Installation en site isolé</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <!-- Section Maison -->
                                                                <div id="maisonFields" style="display: none;">
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label for="timeUsage" class="col-lg-4 col-md-5 form-label-title">Utilisation :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <select class="form-control" name="timeUsage" id="timeUsage">
                                                                                <option>Temps d’utilisation du système</option>
                                                                                <option>En journée (8 - 16 h)</option>
                                                                                <option>En soirée (16 h - 8 h)</option>
                                                                                <option>24 heures sur 24</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label for="hasElectricMeter" class="col-lg-4 col-md-5 form-label-title">Compteur :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <select class="form-control" name="hasElectricMeter" id="hasElectricMeter">
                                                                                <option>Existence d’un compteur électrique</option>
                                                                                <option>Oui</option>
                                                                                <option>Non</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div id="meterDetails" style="display: none;">
                                                                        <div class="mb-4 row align-items-center">
                                                                            <label for="meterType" class="col-lg-4 col-md-5 form-label-title">Type compteur :</label>
                                                                            <div class="col-md-7 col-lg-8">
                                                                                <select class="form-control" name="meterType" id="meterType">
                                                                                    <option>Type de compteur</option>
                                                                                    <option>Monophasé (2 fils)</option>
                                                                                    <option>Triphasé (4 fils)</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="mb-4 row align-items-center">
                                                                            <label for="amperage" class="col-lg-4 col-md-5 form-label-title">Ampérage :</label>
                                                                            <div class="col-md-7 col-lg-8">
                                                                                <select class="form-control" name="amperage" id="amperage">
                                                                                    <option>Ampérage du compteur</option>
                                                                                    <option>5 A</option>
                                                                                    <option>10 A</option>
                                                                                    <option>15 A</option>
                                                                                    <option>20 A</option>
                                                                                    <option>30 A</option>
                                                                                    <option>60 A</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="noMeter" style="display: none;">
                                                                        <div class="mb-4 row align-items-center">
                                                                            <label for="chooseMeter" class="col-lg-4 col-md-5 form-label-title">Choisissez un compteur :</label>
                                                                            <div class="col-md-7 col-lg-8">
                                                                                <select class="form-control" name="chooseMeter" id="chooseMeter">
                                                                                    <option>Choisissez un compteur</option>
                                                                                    <option>5 A</option>
                                                                                    <option>10 A</option>
                                                                                    <option>15 A</option>
                                                                                    <option>20 A</option>
                                                                                    <option>30 A</option>
                                                                                    <option>60 A</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!-- Section Commerce et Industrie (C&I) -->
                                                                <div id="ciFields" style="display: none;">
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label for="max_puissance" class="col-lg-4 col-md-5 form-label-title">Puissance :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <input class="form-control" name="max_puissance" id="max_puissance" type="number" placeholder="la puissance maximale du site (kVA)">
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label for="Energie" class="col-lg-4 col-md-5 form-label-title">Energie totale :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <input class="form-control" name="Energie" id="Energie" type="number" placeholder="Energie consommée par mois (kWh)">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="mb-4 row align-items-center">
                                                                    <label for="batterie" class="col-lg-4 col-md-5 form-label-title">Type batterie :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <select class="js-example-basic-single w-100" name="batterie" id="batterie">
                                                                            <option value="">Veuillez choisir le type de batterie</option>
                                                                            @foreach ($batterie as $battery)
                                                                                <option value="{{ $battery->id }}">{{ $battery->Reference }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label for="panneau" class="col-lg-4 col-md-5 form-label-title">Type panneau :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <select class="js-example-basic-single w-100" name="panneau" id="panneau">
                                                                            <option value="">Veuillez choisir le type de panneau</option>
                                                                            @foreach ($solar as $Solars)
                                                                                <option value="{{ $Solars->id }}">{{ $Solars->Reference }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="card o-hidden card-hover">
                                                            <div class="card-body p-0">
                                                                <div>
                                                                    <img id="usageimage" src="" alt="Type d'utilisation" style="max-width: 100%; height: auto; display: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <button type="button" id="prehome" class="btn btn-secondary">Précédent</button>
                                                        <button type="button" id="nextfinance" class="btn btn-primary">Suivant</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-financière">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="title-header option-title">
                                                        <h5>Veuillez saisir les informations</h5>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('financiere.data') }}">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Monnaie Pays :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <p id="currency" name="currency">Non disponible</p>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Budget prévu :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <select class="js-example-basic-single w-100" name="budget_prevu" id="montantSelect"  value="10000" required>
                                                                            <option>Investissement initial prévu</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 row align-items-center">
                                                                    <label class="col-lg-4 col-md-5 form-label-title">Facture payée :</label>
                                                                    <div class="col-md-7 col-lg-8">
                                                                        <input class="form-control" type="number" name="facture_payee" placeholder="Electricité Mensuel Payé">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="card o-hidden card-hover">
                                                            <div class="card-body p-0">
                                                                <div>
                                                                    <img id="usageImage" src="{{'/assets/images/powerse/image finance3.jpg'}}" alt="Type d'utilisation" style="max-width: 100%; height: auto;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Boutons sur la même ligne -->
                                                <div class="row">
                                                    <div class="col d-flex justify-content-between">
                                                        <button type="button" id="pretechnique" class="btn btn-secondary">Précédent</button>
                                                        <button type="button" id="nextresultats" class="btn btn-primary">Suivant</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="pills-résultats">
                                            <div class="row">
                                                <div class="title-header option-title">
                                                    <h5>Données Pays</h5>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form class="theme-form theme-form-2 mega-form" method="POST">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Incitations fiscales :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="incitations">Non exonéré</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Irradiance min (kWh/m²/jour) :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="irradiance_min">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Irradiance max (kWh/m²/jour) :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="irradiance_max">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Irradiance moyenne (kWh/m²/jour) :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="irradiance_moy">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">TVA appliquée (%) :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="tva">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Taxes à l'importation (%) :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="taxes_import">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-4 row align-items-center">
                                                                        <label class="col-lg-4 col-md-5 form-label-title">Coût du kWh :</label>
                                                                        <div class="col-md-7 col-lg-8">
                                                                            <p id="cout_kwh">Non disponible</p>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Bouton pour calculer -->
                                                                    <div class="row">
                                                                        <div class="col d-flex justify-content-between">
                                                                            <button type="button" id="prefinance" class="btn btn-secondary">Précédent</button>
                                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Calculer</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- modal pour le calcul -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="invoiceModalLabel">Résultats de simulation <i class="fas fa-calculator"></i>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center mb-4" >
                        <!-- Logo à gauche -->
                        <div class="logo">
                            <img src="{{'assets/images/logo/SolSizer2.png'}}" alt="Logo de l'entreprise" style="height: 120px;">
                        </div>

                        <!-- Titre DEVIS avec bordure directement autour du texte -->
                        <!-- Espace vide à droite pour équilibrer -->
                        <div style="width: 120px;"></div>
                    </div>

                    <!-- Informations de la facture -->
                    <div class="invoice-info mb-4">
                        <p>Date : <strong id="invoiceDate"></strong></p>
                        <p>Numéro du devis : <strong>1234</strong></p>

                    </div>

                    <!-- Informations sur le client -->
                    <div class="invoice-client mb-4">
                        <h5><strong>Facturé à :</strong></h5>
                        <p>Nom du client : <strong>John Doe</strong></p>
                        <p>Téléphone : +228 90 43 32 12</p>
                    </div>

                    <!-- Tableau des éléments facturés -->
                    <div class="invoice-items">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Description</th>
                                <th>Valeur</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Capacité totale du capteur solaire (Modules PV)</td>
                                <td>10 kWc</td>
                            </tr>
                            <tr>
                                <td>Modèle de panneau solaire choisi</td>
                                <td>Jinko Solar</td>
                            </tr>
                            <tr>
                                <td>Nombre de panneaux solaires à installer</td>
                                <td>30 panneaux</td>
                            </tr>
                            <tr>
                                <td>Puissance de sortie du système</td>
                                <td>8 kW</td>
                            </tr>
                            <tr>
                                <td>Capacité de stockage</td>
                                <td>15 kWh</td>
                            </tr>
                            <tr>
                                <td>Modèle de batterie choisi</td>
                                <td>Victron Energy</td>
                            </tr>
                            <tr>
                                <td>Nombre de batteries à installer</td>
                                <td>6 batteries</td>
                            </tr>
                            <tr>
                                <td>Production journalière moyenne</td>
                                <td>50 kWh</td>
                            </tr>
                            <tr>
                                <td>Investissement nécessaire</td>
                                <td>10 000 €</td>
                            </tr>
                            <tr>
                                <td>Capacité financière comparée à l’investissement nécessaire</td>
                                <td>80%</td>
                            </tr>
                            <tr>
                                <td>Gain journalier estimé</td>
                                <td>2 500 €</td>
                            </tr>
                            <tr>
                                <td>Durée de récupération de l’investissement</td>
                                <td>5 ans</td>
                            </tr>
                            <tr>
                                <td>Surface nécessaire à l’installation</td>
                                <td>100 m²</td>
                            </tr>
                            <tr>
                                <td>Disponibilité de l’espace</td>
                                <td>Oui</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Recommandations -->
                    <div class="recommendations mt-4">
                        <h6><strong>Recommandations :</strong></h6>
                        <p>Faites attention à la qualité. Contactez <strong>EWARE Group</strong> pour plus d’informations au info@ewaregroup.org</p>
                        <p><strong>Recommandations de fabricants :</strong></p>

                        <!-- Affichage horizontal des logos de fabricants -->
                        <div class="d-flex flex-wrap justify-content-center">
                            <div class="p-2"><img src="{{'assets/images/logo/logoma1.png'}}" alt="Jinko Solar Logo" style="height: 60px;"></div>
                            <div class="p-2"><img src="{{'assets/images/logo/logo-footer5.png'}}" alt="JA Solar Logo" style="height: 60px;"></div>
                            <div class="p-2"><img src="{{'assets/images/logo/logomat3.png'}}" alt="Trina Solar Logo" style="height: 60px;"></div>
                            <div class="p-2"><img src="{{'assets/images/logo/logo-part8.png'}}" alt="Victron Energy Logo" style="height: 60px;"></div>
                            <div class="p-2"><img src="{{'assets/images/logo/logo-part9.png'}}" alt="Huawei Logo" style="height: 60px;"></div>
                        </div>

                        <!-- Boutons -->
                        <div class="mt-4 d-flex justify-content-between">
                            <a href="{{url('installateur')}}"><button  type="button" class="btn btn-primary">Trouvez un installateur</button></a>
                            <button type="button" class="btn btn-secondary">Télécharger le devis</button>
                        </div>
                    </div>

                    <!-- Bouton de fermeture -->
                    <div class="modal-footer mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const today = new Date();
            const formattedDate = today.getDate().toString().padStart(2, '0') + '/' +
                (today.getMonth() + 1).toString().padStart(2, '0') + '/' +
                today.getFullYear();
            document.getElementById("invoiceDate").textContent = formattedDate;
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="path-to-your-script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.4.0/build/js/intlTelInput.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.4.0/build/js/utils.js"></script>
    <script>
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("tg"));
            },
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.4.0/build/js/utils.js"
        });

        input.addEventListener('countrychange', function() {
            const countryData = iti.getSelectedCountryData();
            input.value = countryData.name;
            console.log("ISO du pays sélectionné : ", countryData.iso2); // Utilisation de countryData.iso2

            // Vérification de la disponibilité de countryData et de countryData.iso2
            if (countryData && countryData.iso2) {
                console.log("ISO du pays sélectionné :", countryData.iso2);

                const csrfTokenMeta = document.querySelector('meta[name="csrf-token"]');
                const csrfToken = csrfTokenMeta ? csrfTokenMeta.getAttribute('content') : '';

                fetch('/get-country-data', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        iso: countryData.iso2
                    })
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.data) {
                            // Mise à jour des champs avec les données du pays
                            document.getElementById("incitations").textContent = data.data.Tax_incentive || 'Non exonéré';
                            document.getElementById("irradiance_min").textContent = data.data.irradiance_Min || 'Non disponible';
                            document.getElementById("irradiance_max").textContent = data.data.irradiance_Max || 'Non disponible';
                            document.getElementById("irradiance_moy").textContent = data.data.irradiance_Average || 'Non disponible';
                            document.getElementById("tva").textContent = data.data.VAT || 'Non disponible';
                            document.getElementById("taxes_import").textContent = data.data.Import_Tax || 'Non disponible';
                            document.getElementById("cout_kwh").textContent = data.data.electricity_cost_household || 'Non disponible';
                            document.getElementById("currency").textContent = data.data.currency || 'Non disponible';
                        } else {
                            console.error("Erreur lors de la récupération des données du pays : ", data.message);
                        }
                    })
                    .catch(error => console.error('Erreur:', error));
            } else {
                console.error("Erreur : Le code ISO du pays n'a pas pu être récupéré.");
            }
        });

        window.addEventListener('load', function() {
            const countryData = iti.getSelectedCountryData();
            console.log("ISO du pays détecté au chargement : ", countryData.iso2.toUpperCase());
        });

    </script>



    <script>
        document.getElementById('typeselect').addEventListener('change', function() {
            const usageImage = document.getElementById('usageimage');
            const selectedValue = this.value;

            if (selectedValue) {
                usageImage.src = `/assets/images/powerse/${selectedValue}.jpg`;
                usageImage.style.display = 'block';
            } else {
                usageImage.style.display = 'none';
            }
        });
    </script>

    <script>
        // document.getElementById('nextButton').addEventListener('click', function () {
        //     const nextTab = document.querySelector("#pills-technique-tab");
        //     nextTab.click();
        // });
        document.getElementById('nextButton').addEventListener('click', function () {
            const paysElement = document.getElementById('pays');
            const formData = {
                nom: document.querySelector("input[name='nom']")?.value || '', // Ajout d'une vérification de sécurité
                prenom: document.querySelector("input[name='prenom']")?.value || '',
                telephone: document.querySelector("input[name='telephone']")?.value || '',
            };

            // Vérifie si les données requises sont présentes
            if (!formData.nom || !formData.prenom || !formData.telephone) {
                alert("Veuillez remplir tous les champs requis.");
                return;
            }

            // Effectue la requête Axios
            axios.post('/store-user-data', formData)
                .then(response => {
                    console.log(response.data.message);

                    // Passe à l'onglet suivant
                    const nextTab = document.querySelector("#pills-technique-tab");
                    if (nextTab) nextTab.click();
                    else console.error("L'élément 'pills-technique-tab' est introuvable.");
                })
                .catch(error => {
                    console.error(error.response?.data || error);
                    alert("Une erreur est survenue. Veuillez vérifier vos données.");
                });
        });


        document.getElementById('nextfinance').addEventListener('click', function () {
            const nextTab = document.querySelector("#pills-financiere-tab");
            nextTab.click();
        });

        document.getElementById('nextresultats').addEventListener('click', function () {
            const nextTab = document.querySelector("#pills-resultats-tab");
            nextTab.click();
        });


        document.getElementById('prehome').addEventListener('click', function () {
            const nextTab = document.querySelector("#pills-home-tab");
            nextTab.click();
        });

        document.getElementById('pretechnique').addEventListener('click', function () {
            const nextTab = document.querySelector("#pills-technique-tab");
            nextTab.click();
        });

        document.getElementById('prefinance').addEventListener('click', function () {
            const nextTab = document.querySelector("#pills-financiere-tab");
            nextTab.click();
        });

    </script>

    <script>
        document.getElementById('usagetypeselect').addEventListener('change', function() {
            const usageImage = document.getElementById('usageimage');
            const selectedValue = this.value;

            if (selectedValue) {
                usageImage.src = `/assets/images/power/${selectedValue}.png`;
                usageImage.style.display = 'block';
            } else {
                usageImage.style.display = 'none';
            }
        });
    </script>

    <script>
        document.getElementById('usageTypeSelect').addEventListener('change', function() {
            const usageImage = document.getElementById('usageImage');
            const selectedValue = this.value;

            if (selectedValue) {
                usageImage.src = `/assets/images/powers/${selectedValue}.jpg`;
                usageImage.style.display = 'block';
            } else {
                usageImage.style.display = 'none';
            }
        });
    </script>

    <script>
        document.getElementById('usageTypeSelect').addEventListener('change', function () {
            const maisonFields = document.getElementById('maisonFields');
            const ciFields = document.getElementById('ciFields');
            const meterDetails = document.getElementById('meterDetails');
            const noMeter = document.getElementById('noMeter');

            const selectedType = this.value;

            // Reset all sections visibility
            maisonFields.style.display = 'none';
            ciFields.style.display = 'none';

            if (selectedType === 'Maison') {
                maisonFields.style.display = 'block';
            } else if (selectedType === 'CI') {
                ciFields.style.display = 'block';
            }

            // Handle "Existence d’un compteur électrique"
            document.querySelector('select[name="hasElectricMeter"]').addEventListener('change', function () {
                if (this.value === 'Oui') {
                    meterDetails.style.display = 'block';
                    noMeter.style.display = 'none';
                } else if (this.value === 'Non') {
                    meterDetails.style.display = 'none';
                    noMeter.style.display = 'block';
                } else {
                    meterDetails.style.display = 'none';
                    noMeter.style.display = 'none';
                }
            });
        });
    </script>
@endsection
