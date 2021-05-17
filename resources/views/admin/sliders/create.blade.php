
<x-layout>

    <!-- Page Heading -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="col-md-8 mx-auto">
        <div class="tile">
            <h3 class="tile-title">Create Category</h3>
            <form action="{{ route('admin.sliders.store') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="title">Title <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title') }}"/>
                        @error('title') {{ $message }} @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="link">Link <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="link" id="link" value="{{ old('link') }}"/>
                        @error('link') {{ $message }} @enderror
                    </div>
                  
                 
                   
                    <div class="form-group">
                        <label class="control-label"> Image</label>
                        <input class="form-control @error('cover') is-invalid @enderror" type="file" id="cover" name="cover"/>
                        @error('cover') {{ $message }} @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status <span class="m-l-5 text-danger"> *</span></label>
                        <select id=status class="form-control custom-select mt-15 @error('status_id') is-invalid @enderror" name="status">
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                        </select>
                        @error('status') {{ $message }} @enderror
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Slider</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.sliders.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>



</x-layout>







