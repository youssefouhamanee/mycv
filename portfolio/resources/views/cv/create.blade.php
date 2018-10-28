@extends('layouts.master')
@section('content')

<form action="{{ url('cv/create') }}" class="col-md-6 offset-3" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
            <div class="container">
            <div class="jumbotron">
                    @if (count($errors))
                    <div class="alert alert-danger">
                    
                            
                            @foreach ($errors->all() as $error)
                                <ul>
                                <li>{{ $error }}</li>
                                </ul>
                            @endforeach
                        
                    </div>
                    @endif
                    <div class="row">
                        <div class="form-group">
                                <div class="btn btn-primary btn-sm float-left">
                                        <label><b>Choose files * : </b></label>
                                        <input type="file" name="img" class="form-control" multiple>
                                    </div>
                        </div>
                        <div class="form-group">
                                
                                        <label><b>Presentation : * </b></label>
                                        <textarea class="form-control" name="presentation" placeholder="Presentation ...." cols="150" rows="10"></textarea>    
                        </div>
                        <div class="form-group">
                                <button class="btn btn-outline-info btn-lg" > <i class="fa fa-plus"></i> Add</button>
                        </div>

                    </div>

                </div>
</div>

    </form>

    
@endsection