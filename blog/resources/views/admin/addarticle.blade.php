@extends('layouts.admin')
@section('content')

<div class="panel-body">
    
    <!-- Форма новой задачи -->
    <form action="{{route('savearticle')}}" method="POST" class="form-horizontal">
      {{ csrf_field() }}
      <!-- Имя задачи -->
      <div class="form-group">
        <label for="name" class="col-sm-3 control-label">Имя</label>

        <div class="col-sm-6">
          <input type="text" name="name" id="name" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <label for="description" class="col-sm-3 control-label">Описание</label>

        <div class="col-sm-6">
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="category" class="col-sm-3 control-label">Выбор Категории</label>

        <div class="col-sm-6">
            <select name="category" id="category" class="form-control">
                @foreach($cat as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
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