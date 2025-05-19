
@extends('layouts.app')
@section('content')


    <div class="container mx-auto px-4 py-8">


        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prenom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Écart P. Gauche</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Écart P. Droit</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monture</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hauteur P</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Verres</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prix</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @forelse($dossiers as $dossier)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->user->firstname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->user->lastname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->ecart_pupillaire_gauche }} mm</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->ecart_pupillaire_droit }} mm</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->monture_choisie }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->hauteur_position_p }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->verres_choisis }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->prix }}€</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $dossier->created_at->format('d/m/Y') }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="px-6 py-4 text-center text-gray-500">
                                    Aucun dossier trouvé
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
