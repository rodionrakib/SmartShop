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
            <h3 class="tile-title">Edit Slider</h3>
            <form action="{{ route('admin.sliders.update',['slider' => $slider->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Title <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title" value="{{ old('title', $slider->title) }}"/>
                        <input type="hidden" name="id" value="{{ $slider->id }}">
                        @error('title') {{ $message }} @enderror
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="link">Title <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('title') is-invalid @enderror" type="text" name="link" id="link" value="{{ old('link', $slider->link) }}"/>
                        <input type="hidden" name="link" value="{{ $slider->link }}">
                        @error('title') {{ $message }} @enderror
                    </div>
        
        

                  
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                @if ($slider->hasMedia('cover'))
                                    <figure class="mt-2" style="width: 80px; height: auto;">
                                        <img src="{{ $slider->coverImagePath() }}" id="categoryImage" class="img-fluid" alt="img">
                                    </figure>
                                @endif
                            </div>
                            <div class="col-md-10">
                                <label class="control-label">Category Image</label>
                                <input class="form-control @error('cover') is-invalid @enderror" type="file" id="cover" name="cover"/>
                                @error('cover') {{ $message }} @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Status <span class="m-l-5 text-danger"> *</span></label>
                        <select id=status class="form-control custom-select mt-15 @error('status_id') is-invalid @enderror" name="status">
                            <option value="1" {{ $slider->status == 1 ? 'selected' : ''  }} >Active</option>
                            <option value="0" {{ $slider->status == 0 ? 'selected' : ''  }} >InActive</option>
                            
                        </select>
                        @error('status') {{ $message }} @enderror
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Slider</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>


</x-layout>