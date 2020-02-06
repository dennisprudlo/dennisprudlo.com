@extends('layouts.app')

@section('title')
	Filne-Hochlader
@endsection

@section('content')
	@include('layouts.components.navigation.topbarSheet')
	<div class="layout__sheet">
		<h1>Super-Heiper-Blockbasta-Filne-Hochlader</h1>
		<p>Weng du doof bisd ledst du hir 1 filn hoch</p>
		@if (isset($uploaded) && $uploaded)
			<h3>Nicenstein, deim Datei ham ih hochgeladem!</h3>
			<a href="{!! route('get-upload') !!}">
				<button>NOCH 1 DETEIEM HOCHLADEM</button>
			</a>
		@else
			<form id="uploadForm" method="post" enctype="multipart/form-data" action="{!! route('post-upload') !!}">
				@csrf
				<input type="file" name="uploadFile" />
				<br />
				<br />
				<button type="submit">KLIG HIR ZUNG DEM PFILM HOHLADEM</button>
				<span id="percentage" style="display: none"><span id="percentageValue"></span> Prozend</span>
			</form>
		@endif
	</div>
	@include('layouts.components.footer')
@endsection

@section('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
	<script type="text/javascript">
		$('#uploadForm').ajaxForm({
			beforeSubmit: () => {
				let form = $('#uploadForm').get(0);
	        	if (!form.uploadFile.value) {
	            	alert('Du musd 1 Dateiem auswehlen');
	            	return false;
        		}
			},
			beforeSend: function() {
				$('#percentage').show();
				$('#percentageValue').text(0);
			},
			uploadProgress: function(event, position, total, percentComplete) {
				$('#percentageValue').text(percentComplete);
			},
			success: function(e) {
				$('#percentage').text('Dateiem isd hochgeladem. Warte mus noh schpeicherm.');
			},
			error: function (e) {
				$('#percentage').text('Isd ein fehler aufgetretem: ' + e.statusText);
			},
			complete: function(xhr) {
				if (xhr.status == 200) {
					$('#percentage').text('Ok dange. gespeicherd');
				}
			}
		});
	</script>
@endsection
