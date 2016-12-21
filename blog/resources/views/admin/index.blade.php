@extends('layouts.admin')
@section('content')

<table class='table table-bordered'>
    <tbody>
        <th>Категория</th>
        <th>Название</th>
        <th>Описание</th>
        @for($i=0; $i<count($arr); $i++)
            <tr>   
                @foreach($arr[$i][1] as $item)
                <td>{{$arr[$i][0]}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->description}}</td>
            </tr>
                @endforeach
            
        @endfor
    </tbody>
</table>

@endsection