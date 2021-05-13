<x-layout>
<table class="table table-hover table-bordered" id="sampleTable">
    <thead>
        <tr>
            <th> # </th>
            <th> Name </th>
            <th> Slug </th>
            <th class="text-center"> Parent </th>
            <th class="text-center"> Featured </th>
            <th class="text-center"> Menu </th>
            <th class="text-center"> Order </th>
            <th class="text-center"> Active </th>
            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>{{ $category->parent ? $category->parent->name : 'Root' }}</td>
                    <td class="text-center">
                        @if ($category->featured == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($category->menu == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                    </td>
                    <td class="text-center">
                        {{ $category->order }}
                    </td>
                     <td class="text-center">
                        @if ($category->status == 1)
                            <span class="badge badge-success">Yes</span>
                        @else
                            <span class="badge badge-danger">No</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Second group">
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            <form method="post" action="{{ route('admin.categories.destroy', $category->id) }}" >
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