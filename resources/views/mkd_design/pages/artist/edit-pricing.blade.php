@extends('mkd_design.layouts.mkd-layout')
@section('content')
<form action="{{route('price.update',$price)}}" method="POST">
    @csrf
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Makeup Name</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                    @if (is_null($makeup))
                        <tr><td colspan="2">You Have No Data to Show
                            <a href="{{route('price.create')}}">create</a>
                            </td></tr>
                    @else
                    @foreach ($makeup as $item)
                    <tr>
                        <td><input type="text" name="makeup_type" value="{{$item->makeup_type}}" placeholder="makeup type"></td>
                        <td><input type="text" name="price" value="{{$item->price}}" placeholder="makeup price"></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        <button type="submit" class="btn btn-dark"> Submit </button>
</form>
@endsection
