{{-- <div class="row" id="resultats" hx-swap-oob="beforeend"> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">telephone</th>
                <th scope="col">Date Naissance</th>
            </tr>
        </thead>
        <tbody {{-- id="resultats" --}}>
            @forelse($personnes as $key => $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nom }}</td>
                <td>{{ $item->prenom }}</td>
                <td>{{ $item->telephone }}</td>
                <td>{{ $item->date_naissance }}</td>
            </tr>
            @empty
                <tr>
                    <td>Pas d'information</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="nav">
        {{ $personnes->appends(request()->input())->links('pagination::bootstrap-4') }}
    </div>
{{-- </div> --}}

