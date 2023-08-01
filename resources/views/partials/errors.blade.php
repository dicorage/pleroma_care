@if ($errors->any())
    <div class="content-header" id="alert">
     	<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> Error!</h4>
         @foreach($errors->all() as $error)
				<div>{{$error}}</div>
		@endforeach
         </div>
    </div>
@endif

@if (session('success'))
    <div class="content-header" id="alert">
     	<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4></i> Success!</h4>
            <div>{{session('success')}}</div>
         </div>
    </div>
@endif