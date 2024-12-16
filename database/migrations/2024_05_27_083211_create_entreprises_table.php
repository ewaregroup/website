<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom
            $table->string('annee'); // Année de création
            $table->string('adresse');// Adresse
            $table->integer('nombreProjets'); // Nombre de projets solaires réalisés
            $table->integer('ingenieur'); // Nombre d’ingénieur spécialiste
            $table->string('registre'); // Régistre de commerce
            $table->string('immatriculation'); // Immatriculation fiscale
            $table->string('logo')->nullable(); // Chemin du logo
            $table->string('phone'); // Numéro de téléphone
            $table->string('email')->unique(); // Adresse email
            $table->string('domaine'); // domaine
            $table->string('document')->nullable(); // Chemin du document justificatif du personnel
            $table->string('documents')->nullable(); // Chemin des documents justificatifs de l’existence de l’entreprise
            $table->string('capital'); // Capital
            $table->string('pays'); // Pays
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprises');
    }
};
