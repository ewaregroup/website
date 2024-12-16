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
    <!-- bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<!-- MultiStep Form -->
<div style="background-color: #151949;">
    <!-- Section: Design Block -->
    <section class="text-center p-5">
        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="margin-top: 50px;backdrop-filter: blur(30px);">
            <div class="card-body py-5 px-md-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10">
                        <img src="{{url('assets/images/SolSizer/loup.avif')}}" class="img-fluid" alt="Sample image" style="width:200px">
                        <h2 class="fw-bold mb-5">Choisir  un Prestataire de Services Solaires</h2>
                        <form class="row mt-5  mb-5 needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-5">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label d-flex" for="countrySelect">Sélectionnez un pays</label>
                                        <select class="form-select" id="countrySelect" required>
                                            <option selected disabled>Sélectionnez un pays</option>
                                            @foreach($pays as $p)
                                                <option value="{{ $p }}">{{ $p }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <label class="form-label d-flex" for="domaineSelect">Domaine d'activité</label>
                                        <select class="form-select" id="domaineSelect" required>
                                            <option selected disabled>Sélectionnez un domaine d'activité</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                <tr>
                                    <th>Nom de l'entreprise</th>
                                    <th>Logo</th>
                                    <th>Pays</th>
                                    <th>Nombre de projets réalisés</th>
                                    <th>Année de création</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody id="entreprisesTableBody">
                                <!-- Contenu du tableau sera rempli par JavaScript -->
                                </tbody>
                            </table>

                            <a href="menu" type="button" class="btn btn-secondary btn-block mb-4" onclick="window.history.back()">
                                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Retour
                            </a>
                            <button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-toggle="modal" data-mdb-target="#exampleModal" >Détails</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">DETAILS</h5>
                <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Fermer</button>
                <a class="btn mx-2" style="background-color: #0b3f0f;" target="_blank" id="whatsapp-link">
                    <i class="fa-brands fa-whatsapp fa-1x mr-1 text-white"></i>
                    <span style="margin-right: 5px;" class="text-white">Contacter</span>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- MDB UI Kit JS -->
<!-- MDB -->
<script
    type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.umd.min.js">
</script>

<script>
    $(document).ready(function() {
        var entreprises = @json($entreprises);
        var domaines = {};

        // Construire la liste des domaines pour chaque pays
        entreprises.forEach(function(entreprise) {
            if (!domaines[entreprise.pays]) {
                domaines[entreprise.pays] = new Set();
            }
            domaines[entreprise.pays].add(entreprise.domaine);
        });

        // Remplir le tableau avec les entreprises
        function fillTable(entreprises) {
            var tableBody = $('#entreprisesTableBody');
            tableBody.empty();
            entreprises.forEach(function(entreprise) {
                tableBody.append(`
                    <tr>
                        <td>${entreprise.nom}</td>
                        <td><img src="{{ asset('storage/${entreprise.logo}') }}" alt="${entreprise.nom}" style="width: 50px; height: auto;"></td>
                        <td>${entreprise.pays}</td>
                        <td>${entreprise.nombreProjets}</td>
                        <td>${entreprise.annee}</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-rounded" data-mdb-ripple-init data-mdb-modal-init data-mdb-toggle="modal" data-mdb-target="#exampleModal" data-id="${entreprise.id}" >Détails</button>
                        </td>
                    </tr>

                `);
            });

        }


        $('#entreprisesTableBody').on('click', 'button[data-id]', function() {
            var entrepriseId = $(this).data('id');
            showDetails(entrepriseId);
        });


        // Filtrer les domaines par pays
        $('#countrySelect').on('change', function() {
            var selectedCountry = $(this).val();
            var domaineSelect = $('#domaineSelect');
            domaineSelect.empty().append('<option selected disabled>Sélectionnez un domaine d\'activité</option>');

            if (domaines[selectedCountry]) {
                domaines[selectedCountry].forEach(function(domaine) {
                    domaineSelect.append(`<option value="${domaine}">${domaine}</option>`);
                });
            }

            // Remplir le tableau avec les entreprises du pays sélectionné
            var filteredEntreprises = entreprises.filter(function(entreprise) {
                return entreprise.pays.toLowerCase() === selectedCountry.toLowerCase();
            });
            fillTable(filteredEntreprises);
        });


        function showDetails(entrepriseId) {
            var entreprise = entreprises.find(function(e) {
                return e.id === entrepriseId;
            });

            if (entreprise) {
                $('.modal-title').text('');
                $('.modal-body').html(`
             <div class="text-center mb-3">
                <img src="{{ asset('storage/${entreprise.logo}') }}" alt="${entreprise.nom}" class="rounded-circle mb-3" style="width: 150px; height: auto;">
                <h5>

                    <span class="text-warning">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                </h5>
            </div>
            <div class="text-left">
                <p><strong>Nom:</strong> ${entreprise.nom}</p>
                <p><strong>Pays:</strong> ${entreprise.pays}</p>
                <p><strong>Nombre de projets réalisés:</strong> ${entreprise.nombreProjets}</p>
                <p><strong>Staff Technique (Employés):</strong> ${entreprise.ingenieur}</p>
                <p><strong>RCCM:</strong> ${entreprise.registre}</p>
                <p><strong>NIF:</strong> ${entreprise.immatriculation}</p>
                <p><strong>Adresse:</strong> ${entreprise.adresse}</p>
                <p><strong>Téléphone:</strong> ${entreprise.phone}</p>
                <p><strong>Email:</strong> ${entreprise.email}</p>
                <p><strong>Domaine:</strong> ${entreprise.domaine}</p>
            </div>
        `);
                var whatsappLinkElement = document.getElementById('whatsapp-link');
                whatsappLinkElement.href = 'https://wa.me/' + entreprise.phone;

                var modal = new mdb.Modal(document.getElementById('exampleModal'));
                modal.show();
            }
        }




        // Filtrer les entreprises par domaine
        $('#domaineSelect').on('change', function() {
            var selectedCountry = $('#countrySelect').val();
            var selectedDomaine = $(this).val();
            var filteredEntreprises = entreprises.filter(function(entreprise) {
                return entreprise.pays.toLowerCase() === selectedCountry.toLowerCase() &&
                    entreprise.domaine.toLowerCase() === selectedDomaine.toLowerCase();
            });
            fillTable(filteredEntreprises);
        });

        // Afficher toutes les entreprises au chargement de la page
        // fillTable(entreprises);
    });
</script>


</body>
</html>
