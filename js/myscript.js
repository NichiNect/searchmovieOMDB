function searchMovies() {
	$('#list-movie').html('');

	$.ajax({
		url: 'https://omdbapi.com',
		type: 'get',
		dataType: 'json',
		data: {
			'apikey' : '', //your api key from omdbapi
			's' : $('#search-input').val()
		},
		success: function( result ){
			if (result.Response == 'True') {
				let movies = result.Search;

				$.each(movies, function(i, data){
					$('#list-movie').append(`
						<div class="col-md-4">
							<div class="card my-2">
								<img src="`+ data.Poster +`" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">`+ data.Title +`</h5>
									<h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
									<a href="#" class="card-link see-detail" data-toggle="modal" data-target="#detail" data-id="`+ data.imdbID +`">See Detail</a>
								</div>
							</div>
						</div>
						`);
				});

				// $('#search-input').val('');
			} else {
				$('#list-movie').html(`
					<div class="col">
						<h1 class="text-center">`+ result.Error +`</h1>
					</div>
					`);
			}
		}
	});
}

$('#search-button').on('click', function(){
	searchMovies();
});

$('#search-input').on('keyup', function(e){
	if (e.which === 13) {
		searchMovies();
	}
});

$('#list-movie').on('click', '.see-detail', function(){
	$.ajax({
		url: 'https://omdbapi.com',
		type: 'get',
		dataType: 'json',
		data: {
			'apikey' : 'bd3bc37a',
			'i' : $(this).data('id')
		},
		success: function(movie){
			if (movie.Response) {
				$('.modal-body').html(`
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-4">
									<img src="`+ movie.Poster +`" class="img-fluid">
								</div>
								<div class="col-md-8">
									<ul class="list-group">
										<li class="list-group-item"><h3>`+ movie.Title +`</h3></li>
										<li class="list-group-item">Released : `+ movie.Released +`</li>
										<li class="list-group-item">Runtime : `+ movie.Runtime +`</li>
										<li class="list-group-item">Genre : `+ movie.Genre +`</li>
										<li class="list-group-item">Writer : `+ movie.Writer +`</li>
										<li class="list-group-item">Actors : `+ movie.Actors +`</li>
										<li class="list-group-item">Country : `+ movie.Country +`</li>
									</ul>
								</div>
							</div>
							<br>
							<div class="row">
								<h5>Plot :</h5>
								<br>
								<p style="text-indent: 25px;">`+ movie.Plot +`</p>
							</div>
						</div>
					`);

			}
		}
	});
});
