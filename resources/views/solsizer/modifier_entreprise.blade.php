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
<!-- MultiStep Form -->
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
                            <form method="POST" enctype="multipart/form-data" class="needs-validation">
                                @csrf
                                <!-- Nom de l'entreprise -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="nom">Nom de l'entreprise</label>
                                        <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $entreprise->nom) }}" required>
                                        @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Année de création -->
                                    <div class="col-md-6">
                                        <label class="form-label" for="annee">Année de création</label>
                                        <input type="date" name="annee" id="annee" class="form-control" value="{{ old('annee', $entreprise->annee) }}" required>
                                        @error('annee')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Nombre de projets solaires réalisés -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="nombreProjets">Nombre de projets solaires réalisés</label>
                                        <input type="number" name="nombreProjets" id="nombreProjets" class="form-control" value="{{ old('nombreProjets', $entreprise->nombreProjets) }}" required>
                                        @error('nombreProjets')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Nombre d’ingénieur spécialiste -->
                                    <div class="col-md-6">
                                        <label class="form-label" for="ingenieur">Nombre d’ingénieur spécialiste</label>
                                        <input type="number" name="ingenieur" id="ingenieur" class="form-control" value="{{ old('ingenieur', $entreprise->ingenieur) }}" required>
                                        @error('ingenieur')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Régistre de commerce -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label" for="registre">Régistre de commerce</label>
                                        <input type="number" name="registre" id="registre" class="form-control" value="{{ old('registre', $entreprise->registre) }}" required>
                                        @error('registre')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Immatriculation fiscale -->
                                    <div class="col-md-6">
                                        <label class="form-label" for="immatriculation">Immatriculation fiscale (NIF)</label>
                                        <input type="number" name="immatriculation" id="immatriculation" class="form-control" value="{{ old('immatriculation', $entreprise->immatriculation) }}" required>
                                        @error('immatriculation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Adresse de l'entreprise -->
                                <div class="mb-4">
                                    <label class="form-label" for="adresse">Adresse de l'entreprise</label>
                                    <input type="text" name="adresse" id="adresse" class="form-control" value="{{ old('adresse', $entreprise->adresse) }}" required>
                                    @error('adresse')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Capital de l'entreprise -->
                                <div class="mb-4">
                                    <label class="form-label" for="capital">Capital de l'entreprise</label>
                                    <input type="text" name="capital" id="capital" class="form-control" value="{{ old('capital', $entreprise->capital) }}" required>
                                    @error('capital')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Numéro de téléphone -->
                                <div class="mb-4">
                                    <label class="form-label" for="phone">Numéro de Téléphone</label>
                                    <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone', $entreprise->phone) }}" required>
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Email de l'entreprise -->
                                <div class="mb-4">
                                    <label class="form-label" for="email">Votre Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $entreprise->email) }}" required>
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Logo de l'entreprise -->
                                <div class="mb-4">
                                    <label class="form-label d-flex" for="logo">Ajouter le logo de votre entreprise</label>
                                    <div class="input-group">
                                        <input type="file" name="logo" id="logo" class="form-control">
                                        <label class="input-group-text" for="logo">Aucun fichier choisi</label>
                                    </div>
                                    @error('logo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Documents du personnel -->
                                <div class="mb-4">
                                    <label class="form-label d-flex" for="document">Ajouter les documents justificatifs du personnel (CV, Diplôme)</label>
                                    <div class="input-group">
                                        <input type="file" name="document" id="document" class="form-control">
                                        <label class="input-group-text" for="document">Aucun fichier choisi</label>
                                    </div>
                                    @error('document')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Documents de l'entreprise -->
                                <div class="mb-4">
                                    <label class="form-label d-flex" for="documents">Ajouter les documents justificatifs de l’entreprise (RCCM, CIF, etc..)</label>
                                    <div class="input-group">
                                        <input type="file" name="documents" id="documents" class="form-control">
                                        <label class="input-group-text" for="documents">Aucun fichier choisi</label>
                                    </div>
                                    @error('documents')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Domaine d'activité -->
                                <div class="mb-4">
                                    <label class="form-label d-flex" for="domaine">Domaine d'activité</label>
                                    <select class="form-select" id="domaine" name="domaine">
                                        <option value="Aucune Option" {{ old('domaine', $entreprise->domaine) == 'Aucune Option' ? 'selected' : '' }}>Aucune Option</option>
                                        <option value="Fournisseur de matériels électrique et solaire" {{ old('domaine', $entreprise->domaine) == 'Fournisseur de matériels électrique et solaire' ? 'selected' : '' }}>Fournisseur de matériels électrique et solaire</option>
                                        <option value="Installateur de pompe solaire" {{ old('domaine', $entreprise->domaine) == 'Installateur de pompe solaire' ? 'selected' : '' }}>Installateur de pompe solaire</option>
                                        <option value="Installateur de générateur solaire" {{ old('domaine', $entreprise->domaine) == 'Installateur de générateur solaire' ? 'selected' : '' }}>Installateur de générateur solaire</option>
                                        <option value="Installateur de chauffe-eau solaire" {{ old('domaine', $entreprise->domaine) == 'Installateur de chauffe-eau solaire' ? 'selected' : '' }}>Installateur de chauffe-eau solaire</option>
                                        <option value="Société de maintenance solaire" {{ old('domaine', $entreprise->domaine) == 'Société de maintenance solaire' ? 'selected' : '' }}>Société de maintenance solaire</option>
                                        <option value="Autre" {{ old('domaine', $entreprise->domaine) == 'Autre' ? 'selected' : '' }}>Autre</option>
                                    </select>
                                    @error('domaine')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Boutons -->

                                <button type="submit"  data-mdb-ripple-init style="background-color: #222567;" class="btn text-white btn-block mb-4">Enregistrez les Modifications</button>



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


