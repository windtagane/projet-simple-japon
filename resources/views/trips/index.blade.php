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

<div class="table-responsive">
	<table class="table">
		<thead class="thead-dark text-center">
			<tr>
				<th scope="col">Thématique</th>
				<th scope="col">Titre</th>
				<th scope="col">Description</th>
				<th scope="col">Durée</th>
				<th scope="col">Prix Moyen</th>
				<th scope="col">Moyen de transport</th>
			</tr>
		</thead>
		<tbody>

			@foreach ($trips as $trip)

			<tr class="table-row text-center" data-href="localhost/trips/{{ $trip -> id }}">

				<td>{{ $trip -> theme }}</td>
				<td>{{ $trip -> title }}</td>
				<td>{{ $trip -> description }}</td>
				<td>{{ $trip -> travel_time }}</td>
				<td>{{ $trip -> average_price }}</td>
				<td>{{ $trip -> transportation }}</td>

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