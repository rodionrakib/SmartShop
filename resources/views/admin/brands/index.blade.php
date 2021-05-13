<x-layout>
    <div class="row">
        <a class="btn btn-danger" href="{{ route('admin.brands.create') }}"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add New</a> 
    </div>
    <br>
<table class="table table-hover table-bordered" id="sampleTable">
<thead>
<tr>
    <th> # </th>
    <th> Name </th>
    <th> Slug </th>
    <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
</tr>
</thead>
<tbody>
@foreach($brands as $brand)
    <tr>
        <td>{{ $brand->id }}</td>
        <td>{{ $brand->name }}</td>
        <td>{{ $brand->slug }}</td>
        <td class="text-center">
            <div class="btn-group" role="group" aria-label="Second group">
                <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                <a href="{{ route('admin.brands.destroy', $brand->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </div>
        </td>
    </tr>
@endforeach
</tbody>
</table>
</x-layout>