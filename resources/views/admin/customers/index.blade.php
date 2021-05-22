<x-layout>
 <div class="row">
    <a class="btn btn-danger" href="{{ route('admin.customers.create') }}"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add New</a> 
</div>
<br>

<div class="tile">
    <div class="tile-body">
        
        <table class="table table-hover table-bordered" id="sampleTable">
         
            <thead>
            <tr>
               
                <th> Name </th>
                <th> Email </th>
                <th class="text-center"> Phone </th>
                <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
            </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                       
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                 
                       
                       <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.customers.show', $customer->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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