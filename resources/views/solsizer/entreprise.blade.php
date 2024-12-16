<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SolSizer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{url('assets/images/fav-icon/SolSizer.png')}}">

    <!-- MDB UI Kit CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- Country Select CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-select-js/build/css/countrySelect.min.css">

    <!-- Bootstrap icons and Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
        }

        #radius-shape-1 {
            height: 220px;
            width: 220px;
            top: -60px;
            left: -130px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }
    </style>
</head>

<body>
<div class="background-radial-gradient overflow-hidden">
    <!-- Section: Design Block -->
    <section class="text-center p-5">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="z-index: 10">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                             class="img-fluid" alt="Sample image" style="width: 80%; height: auto;">
                    <h2 class="my-3  display-11 fw-bold ls-tight"  style="color: hsl(218, 81%, 95%)">
                        Enregistrez votre entreprise
                    </h2>
                    <p class="mb-4 opacity-70 justify-content-center" style="color: hsl(218, 81%, 85%);text-align: justify">
                        Profitez de l'opportunité, pour promouvoir vos services auprès d'une large communauté à la recherche de solutions énergétiques durables. En vous inscrivant, vous aurez accès à un flux constant de clients potentiels et vous pourrez développer votre activité dans le secteur florissant de l'énergie solaire. Rejoignez-nous dès aujourd'hui et faites partie de notre réseau d'experts solaires de confiance.
                    </p>
                </div>

                <div class="col-lg-7 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-5 py-5 px-md-5">
                                <form class="needs-validation"  method="POST" enctype="multipart/form-data" >
                                @csrf
                                <!-- Text input -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('nom'))
                                            <span class="text-danger">{{ $errors->first('nom') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input name="nom" id="form3Example1" type="text"  class="form-control" />
                                            <label class="form-label" for="form3Example1" >Nom de l'entreprise</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('annee'))
                                            <span class="text-danger">{{ $errors->first('annee') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="date" name="annee" id="form3Example2" class="form-control" required />
                                            <label class="form-label" for="form3Example2">Année de création</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('nombreProjets'))
                                            <span class="text-danger">{{ $errors->first('nombreProjets') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="number" name="nombreProjets" id="form3Example1" class="form-control" required />
                                            <label class="form-label" for="form3Example1">Nombre de projets solaires réalisés</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('ingenieur'))
                                            <span class="text-danger">{{ $errors->first('ingenieur') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="number" name="ingenieur" id="form3Example2" class="form-control" required />
                                            <label class="form-label" for="form3Example2">Nombre d’ingénieur spécialiste</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('registre'))
                                            <span class="text-danger">{{ $errors->first('registre') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="number" name="registre" id="form3Example1" class="form-control" required />
                                            <label class="form-label" for="form3Example1">Régistre de commerce</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        @if ($errors->has('immatriculation'))
                                            <span class="text-danger">{{ $errors->first('immatriculation') }}</span>
                                        @endif
                                        <div data-mdb-input-init class="form-outline">
                                            <input type="number" name="immatriculation" id="form3Example2" class="form-control" required />
                                            <label class="form-label" for="form3Example2">Immatriculation fiscale (NIF)</label>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('adresse'))
                                    <span class="text-danger">{{ $errors->first('adresse') }}</span>
                                @endif
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" name="adresse" id="form3Example4" class="form-control" required />
                                    <label class="form-label" for="form3Example4">L'adresse de l'entreprise</label>
                                </div>
                                @if ($errors->has('capital'))
                                    <span class="text-danger">{{ $errors->first('capital') }}</span>
                                @endif
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" name="capital" id="form3Example4" class="form-control" required />
                                    <label class="form-label" for="form3Example4">Le capital de l'entreprise</label>
                                </div>
                                <!-- Capital -->
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                                <div class="form-outline mb-4" data-mdb-input-init>
                                    <input type="tel" name="phone" id="typePhone" class="form-control" required />
                                    <label class="form-label" for="typePhone">Numéro de Télephone</label>
                                </div>
                                <!-- Email input -->
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="email" id="form3Example3" name="email" class="form-control" required />
                                    <label class="form-label" for="form3Example3">Votre Email</label>
                                </div>
                                @if ($errors->has('logo'))
                                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                                @endif
                                <div class="form-outline mb-4" >
                                    <label class="form-label d-flex"  for="logo">Ajouter le logo de votre entreprise</label>
                                    <div class="input-group" data-mdb-input-init>
                                        <input type="file" name="logo" id="logo" class="form-control" required />
                                        <label class="input-group-text" for="logo">Aucun fichier choisi</label>
                                    </div>
                                </div>
                                @if ($errors->has('document'))
                                    <span class="text-danger">{{ $errors->first('document') }}</span>
                                @endif
                                <div class="form-outline mb-4">
                                    <label class="form-label d-flex" for="document">Ajouter les documents justificatifs du personnel (CV, Diplôme)</label>
                                    <div class="input-group" data-mdb-input-init>
                                        <input type="file" name="document" id="document" class="form-control" required />
                                        <label class="input-group-text" for="document"></label>
                                    </div>
                                </div>
                                <!-- File input for documents -->
                                @if ($errors->has('documents'))
                                    <span class="text-danger">{{ $errors->first('documents') }}</span>
                                @endif
                                <div class="form-outline mb-4">
                                    <label class="form-label d-flex" for="documents">Ajouter les documents justificatifs de l’entreprise (RCCM, CIF, etc..)</label>
                                    <div class="input-group" data-mdb-input-init>
                                        <input type="file" name="documents" id="documents" class="form-control" required />
                                    </div>
                                </div>
                                @if ($errors->has('domaine'))
                                    <span class="text-danger">{{ $errors->first('domaine') }}</span>
                                @endif
                                <div class="form-outline mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label d-flex" for="carSelect">Domaine d'activité* </label>
                                        <select class="form-select" id="carSelect" name="domaine">
                                            <option value="Aucune Option">Aucune Option</option>
                                            <option value="Fournisseur de matériels électrique et solaire">Fournisseur de matériels électrique et solaire</option>
                                            <option value="Installateur de pompe solaire">Installateur de pompe solaire</option>
                                            <option value="Installateur de générateur solaire">Installateur de générateur solaire</option>
                                            <option value="Installateur de chauffe-eau solaire">Installateur de chauffe-eau solaire</option>
                                            <option value="Vente de Kits solaires">Vente de Kits solaires</option>
                                            <option value="Bureau d'étude">Bureau d'étude</option>
                                        </select>
                                    </div>

                                </div>

                                <!-- Country Select Field -->
                                @if ($errors->has('pays'))
                                    <span class="text-danger">{{ $errors->first('pays') }}</span>
                                @endif
                                <div class="form-outline mb-4 d-flex" data-mdb-input-init>
                                    <label class="form-label" for="countrySelect">Sélectionnez un pays |  </label>
                                    <input type="text" name="pays" id="countrySelect" class="form-control" required />
                                </div>
                                <!-- Submit button -->
                                <button type="submit"  data-mdb-ripple-init style="background-color: #222567;" class="btn text-white btn-block mb-4">
                                    Enregistrez
                                </button>


                                <a href="menu" type="button" class="btn btn-secondary btn-block mb-4" onclick="window.history.back()">
                                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <!-- Message will be inserted here dynamically -->
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <div id="toastError" class="toast align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    <!-- Message will be inserted here dynamically -->
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <!-- Section: Design Block -->
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

<!-- Country Select JS -->
<script src="https://cdn.jsdelivr.net/npm/country-select-js/build/js/countrySelect.min.js"></script>

<script src="{{asset('assets/js/solsizer/entreprise.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#countrySelect").countrySelect({
            defaultCountry: "tg",
            // Vous pouvez ajouter d'autres options ici
        });
    });
</script>

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastSuccess = new bootstrap.Toast(document.getElementById('toastSuccess'), {
                delay: 3000
            });
            document.getElementById('toastSuccess').querySelector('.toast-body').textContent = '{{ session('success') }}';
            toastSuccess.show();
        });
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastError = new bootstrap.Toast(document.getElementById('toastError'), {
                delay: 3000
            });
            document.getElementById('toastError').querySelector('.toast-body').textContent = '{{ session('error') }}';
            toastError.show();
        });
    </script>
@endif

</body>
</html>
