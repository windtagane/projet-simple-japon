@extends ('layouts.app')

<style>

.table-row {
	cursor: pointer;
}

.table-row:hover {
	background-color: #DEDEDE;
}

</style>

@section('content')


<a class="btn btn-danger" href="/trips/create" role="button">Créer mon parcours</a>

<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark text-center">
			<tr>
				<th scope="col">Thématique</th>
				<th scope="col">Titre</th>
				<!-- <th scope="col">Description</th>
				<th scope="col">Durée</th>
				<th scope="col">Prix Moyen</th>
				<th scope="col">Moyen de transport</th> -->
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
				<!-- <td>{{ $trip -> description }}</td>
				<td>{{ $trip -> travel_time }}</td>
				<td>{{ $trip -> average_price }}€</td>
				<td>{{ $trip -> transportation }}</td> -->
				<td>{{ $trip -> user -> name }}</td>
				<td>{{ $trip -> created_at }}</td>
				<td>
					<a href="{{ route('trips.show',$trip->id) }}" class="btn btn-primary">View</a>
					<a href="{{ route('trips.edit',$trip->id) }}" class="btn btn-primary">Edit</a>
					<form action="{{ route('trips.destroy', $trip->id) }}" method="POST">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>

			</tr>

			@endforeach

		</tbody>
	</table>
</div>

@endsection

<script type="text/javascript">
	
	$(document).ready(function($) {
		$(".table-row").click(function() {
			window.document.location = $(this).data("href");
		});
	});

</script>