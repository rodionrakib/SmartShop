<x-layout>
<a href="{{route('admin.products.create')}}" class="btn btn-primary btn-lg active" style="margin-left: 30px" role="button" aria-pressed="true">Add Product</a> 

<div class="tile">
    <div class="tile-body">
        
        <table class="table table-hover table-bordered" id="sampleTable">
         
            <thead>
            <tr>
                <th> # </th>
                <th> SKU </th>
                <th> Name </th>
                <th> Slug </th>
                <th class="text-center"> Categories </th>
                <th class="text-center"> Price </th>
                <th class="text-center"> Status </th>
                <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->slug }}</td>
                        <td>
                            @foreach($product->categories as $category)
                                <span class="badge badge-info">{{ $category->name }}</span>
                            @endforeach
                        </td>
                        <td>{{ config('settings.currency_symbol') }}{{ $product->price }}</td>
                        <td class="text-center">
                            @if ($product->status == 1)
                                <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Not Active</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Second group">
                                <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <form method="post" action="{{ route('admin.products.destroy', $product->id) }}" >
                                 @csrf
                                 @method('DELETE')   
                                <button  type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>                            
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@section('js')
 <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable({
        "order": [[ 0, "desc" ]] // Order on init. # is the column, starting at 0
    });</script>
@endsection

</x-layout>