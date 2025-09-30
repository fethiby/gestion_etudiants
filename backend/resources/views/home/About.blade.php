@extends('layouts.HomeLayout')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-lg shadow p-8">
        <h1 class="text-3xl font-bold mb-4 text-green-700">À propos de l'application Gestion Étudiants</h1>
        <p class="mb-6 text-gray-700">
            Cette application permet à l'administration de gérer efficacement les étudiants, les cours, les notes et les informations académiques. Elle vise à simplifier les processus administratifs et à améliorer la communication entre les étudiants et l'administration.
        </p>
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Fonctionnalités principales :</h2>
            <ul class="list-disc list-inside text-gray-800 space-y-1">
                <li>Gestion des profils étudiants</li>
                <li>Suivi des inscriptions et des absences</li>
                <li>Gestion des cours et des matières</li>
                <li>Attribution et consultation des notes</li>
                <li>Messagerie interne entre étudiants et administration</li>
                <li>Tableau de bord pour visualiser les statistiques</li>
            </ul>
        </div>
        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Notre mission</h2>
            <p class="text-gray-700">
                Offrir une solution moderne, intuitive et sécurisée pour faciliter la gestion scolaire et améliorer l'expérience des étudiants et du personnel administratif.
            </p>
        </div>
        <div>
            <h2 class="text-xl font-semibold mb-2 text-blue-700">Contact</h2>
            <p class="text-gray-700">
                Pour toute question ou suggestion, veuillez nous contacter à <a href="mailto:admin@etudiants.app" class="text-green-600 underline">admin@etudiants.app</a>.
            </p>
        </div>
    </div>
@endsection