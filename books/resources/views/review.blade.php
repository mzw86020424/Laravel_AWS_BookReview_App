@extends('layouts.app')

@section('content')
<h1	class="pagetitle">レビュー投稿ページ</h1>
<div class="rouw justify-content-center container">
	<div class="coll-md-10">
		<form method='POST' action="" enctype="multipart/form-data">
			@csrf
			<div class="card">
				<div class="card-body">
					<div class="form-group">
						<label>レビュー本文</label>
						<textarea class="description form-control" name='body' placeholder="本文を入力"></textarea>
					</div>
					<div class="form-group">
						<label for="file 1">本のサムネイル </label>
						<input type="file" id="file 1" name="image" class="form-control-file">
					</div>
					<input type='submit' class='btn btn-primary' value='レビューを登録'>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection