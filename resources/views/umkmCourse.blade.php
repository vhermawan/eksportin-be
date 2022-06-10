<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
<div class="box">
    <div class="box-body table-responsive no-padding">
        <table class='table table-hover table-striped table-bordered'>
            <thead>
                <tr>
                    <th>Nama Umkm</th>
                    <th>No Telepon</th>
                    <th>Kategori Umkm</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->description}}</td>
                    <td>{{$row->price}}</td>
                    <td>
                    
                    @if(CRUDBooster::isDelete() && $button_edit)
                    <a class='btn btn-success btn-sm' href='{{CRUDBooster::mainpath("delete/$row->id")}}'>Delete</a>
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- ADD A PAGINATION -->
<p>{!! urldecode(str_replace("/?","?",$result->appends(Request::all())->render())) !!}</p>
@endsection