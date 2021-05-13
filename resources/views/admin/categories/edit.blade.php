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
            <h3 class="tile-title">Edit Category</h3>
            <form action="{{ route('admin.categories.update',['category' => $targetCategory->id]) }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name', $targetCategory->name) }}"/>
                        <input type="hidden" name="id" value="{{ $targetCategory->id }}">
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" rows="4" name="description" id="description">{{ old('description', $targetCategory->description) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="parent">Parent Category <span class="m-l-5 text-danger"> *</span></label>
                        <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id">
                            <option value="0">Select a parent category</option>
                            <!-- @foreach($categories as $category)
                                @if ($targetCategory->parent_id == $category->id)
                                    <option value="{{ $category->id }}" selected> {{ $category->name }} </option>
                                @else
                                    <option value="{{ $category->id }}"> {{ $category->name }} </option>
                                @endif

                            @endforeach -->
                                @foreach($categories as $category)
                                  <option class="level_1" value="{{$category->id}}" {{ $targetCategory->parent_id == $category->id ? 'selected' : '' }} >{{$category->name}}</option>
                                    @if($category->children()->count() > 0 )
                                        @foreach($category->children as $child)
                                            <option class="level_2" value="{{$child->id}}" {{ $targetCategory->parent_id == $child->id ? 'selected' : '' }}  >{{$child->name}}</option>
                                            @if($child->children()->count()> 0 )
                                                @foreach($child->children as $gc)
                                                <option class="level_3" value="{{$gc->id}}" {{ $targetCategory->parent_id == $gc->id ? 'selected' : '' }} >{{$gc->name}}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach


                        </select>
                        @error('parent_id') {{ $message }} @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured"
                                {{ $targetCategory->featured == 1 ? 'checked' : '' }}
                                />Featured Category
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="menu" name="menu"
                                {{ $targetCategory->menu == 1 ? 'checked' : '' }}
                                />Show in Menu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                @if ($targetCategory->hasMedia('cover'))
                                    <figure class="mt-2" style="width: 80px; height: auto;">
                                        <img src="{{ $targetCategory->coverImagePath() }}" id="categoryImage" class="img-fluid" alt="img">
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
                            <option value="1" {{ $targetCategory->status == 1 ? 'selected' : ''  }} >Active</option>
                            <option value="0" {{ $targetCategory->status == 0 ? 'selected' : ''  }} >InActive</option>
                            
                        </select>
                        @error('parent_id') {{ $message }} @enderror
                    </div>
                </div>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Category</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>

    @section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script type="text/javascript">
        $(document).ready(function(){

        
        function formatResult(node) {
        var level = 0;
        if(node.element !== undefined){
          level = (node.element.className);
          if(level.trim() !== ''){
            level = (parseInt(level.match(/\d+/)[0]));
          }
        }
        var $result = $('<span style="padding-left:' + (20 * level) + 'px;  "  >' + node.text + '</span>');
        return $result;
      };    
        $('#parent').select2({
            placeholder: 'Select an option',
            width: "100%",
            templateResult: formatResult,
          });


        });

        
</script>


@endsection
</x-layout>