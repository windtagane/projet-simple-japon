@extends ('layouts.app')

<style>

.table-row:hover {
	background-color: #DEDEDE;
}

</style>

@section('content')

<a class="btn btn-danger mb-4" href="/trips/create" role="button">Créer mon parcours</a>

<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark text-center">
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
					<a href="{{ route('trips.show',$trip->id) }}" class="btn btn-primary">View</a>

					@can('update', $trip)
					<a href="{{ route('trips.edit',$trip->id) }}" class="btn btn-primary">Edit</a>
					@endcan
					
					@can('delete', $trip)
					<form action="{{ route('trips.destroy', $trip->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
					@endcan

				</td>

			</tr>

			@endforeach

		</tbody>
	</table>
</div>

@endsection
