@extends ('layouts.app')

<style>

.table-row:hover {
	background-color: #DEDEDE;
}

.thead {
	background-color: #CD1036;
}

.table-row {
	background-color: #E9E9E9;
	color: #000;
}

.a-button {
	height: 37px;
	margin-right: 0.2rem;
}

.btn {
	background-color: #CD1036;
}

.btn:hover {
	background-color: #B30E2F;
}

a.btn {
	color: #fff;
}

a.btn:hover {
	color: #fff;
}

</style>

@section('content')

<div class="w-75 mx-auto pt-4">

	<a class="btn mb-4" href="/trips/create" role="button">Créer mon parcours</a>

	<div class="table-responsive-lg">
		<table class="table">
			<thead class="thead text-center">
				<tr>
					<th scope="col">Thématique</th>
					<th scope="col">Titre</th>
					<th scope="col">Auteur</th>
					<th scope="col">Date de publication</th>
					<th scope="col">Options</th>

				</tr>
			</thead>
			<tbody>

				@foreach ($trips as $trip)

				<tr class="table-row text-center" data-href="/trips/{{ $trip -> id }}">
					<td>{{ $trip -> theme }}</td>
					<td>{{ $trip -> title }}</td>
					<td>{{ $trip->user->name }}</td>
					<td>{{ $trip -> created_at }}</td>
					<td>
						<div class="row justify-content-center">
							
							<a href="{{ route('trips.show',$trip->id) }}" class="btn btn-primary a-button">Consulter</a>

							@can('update', $trip)
							<a href="{{ route('trips.edit',$trip->id) }}" class="btn btn-primary a-button">Modifier</a>
							@endcan

							@can('delete', $trip)
							<form action="{{ route('trips.destroy', $trip->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger" type="submit">Supprimer</button>
							</form>
							@endcan

						</div>

					</td>

				</tr>

				@endforeach

			</tbody>
		</table>
	</div>
</div>

@endsection
