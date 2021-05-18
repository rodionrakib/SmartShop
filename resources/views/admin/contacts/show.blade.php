<x-layout>
<div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Query Details</h1>
            
        </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <section class="invoice">
                
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject #</th>
                                <th>email</th>
                                <th>Message</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->subject }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@section('js')
<script type="text/javascript">
    $('#order-status').on('change',function(){
        $('#osform').submit();
    });

    $('#payment-status').on('change',function(){
        $('#psform').submit();
    });


</script>
@endsection
</x-layout>
