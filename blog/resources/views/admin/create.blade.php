@extends('layouts.admin')
@section('content')
<div class="panel-body">
    
    <!-- Форма новой задачи -->
    <form action="{{route('store')}}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <!-- Имя задачи -->
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Name</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="name" class="form-control">
          
        </div>
      </div>
      
      <!-- Кнопка добавления задачи -->
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
          <button type="submit" class="btn btn-default">
            <i class="fa fa-plus"></i> Create Product
          </button>
        </div>
      </div>
    </form>
  </div>


@endsection