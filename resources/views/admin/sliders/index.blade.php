<x-layout>
<div class="row">
<a class="btn btn-danger" href="{{ route('admin.sliders.create') }}"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add New</a> 
</div>
<br>
<table class="table table-hover table-bordered" id="sampleTable">
    <thead>
        <tr>
            <th> # </th>
            <th> Title </th>
            <th> Image </th>
            <th class="text-center"> Active </th>
            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
        </tr>
    </thead>
    <tbody>
        @foreach($sliders as $slider)
            
                <tr>
                    <td>{{ $slider->id }}</td>
                    <td>{{ $slider->title }}</td>
                    <td> <img src="{{$slider->coverImagePath()}}" 
                                style="width: 200px; height: 200px"  
                                class="img-thumbnail" >  
                            
                    </td>
                 
                     <td class="text-center">
                        @if ($slider->status == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Second group">
                            <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <form method="post" action="{{ route('admin.sliders.destroy', $slider->id) }}" >
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
</x-layout>