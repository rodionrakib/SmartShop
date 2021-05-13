
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
            <form action="{{ route('admin.categories.store') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="tile-body">
                    <div class="form-group">
                        <label class="control-label" for="name">Name <span class="m-l-5 text-danger"> *</span></label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="description">Description</label>
                        <textarea class="form-control" rows="4" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="parent">Parent Category <span class="m-l-5 text-danger"> *</span></label>
                        <select id=select2 class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent">
                            <option value="">Select a parent category</option>
                                <!-- @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                    @if($category->children()->count() >  0)
                                    <optgroup  label="1">
                                        @foreach($category->children as $child)
                                        <option value="{{$child->id}}">{{$child->name}}</option>
                                            @if($child->children()->count()>0)
                                                <optgroup label="2">
                                                    @foreach($child->children as $grand)
                                                        <option value="{{$grand->id}}">{{$grand->name}}</option>
                                                        @if($grand->children()->count() > 0 )
                                                            <optgroup>
                                                                @foreach($grand->children as $gc)
                                                                    <option value="{{$gc->id}}">{{$gc->name}}</option>
                                                                @endforeach
                                                            </optgroup>

                                                        @endif
                                                    @endforeach
                                                </optgroup>
                                            @endif

                                        @endforeach
                                    </optgroup>
                                    @endif
                                @endforeach  -->
                                @foreach($categories as $category)
                                  <option class="level_1" value="{{$category->id}}">{{$category->name}}</option>
                                    @if($category->children()->count() > 0 )
                                        @foreach($category->children as $child)
                                            <option class="level_2" value="{{$child->id}}">{{$child->name}}</option>
                                            @if($child->children()->count()> 0 )
                                                @foreach($child->children as $gc)
                                                <option class="level_3" value="{{$gc->id}}">{{$gc->name}}</option>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                        </select>
                        @error('parent') {{ $message }} @enderror
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="featured" name="featured"/>Featured Category
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="menu" name="menu"/>Show in Menu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category Image</label>
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
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save Category</button>
                    &nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
            </form>
        </div>
    </div>

</script>
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
        $('#select2').select2({
            placeholder: 'Select an option',
            width: "100%",
            templateResult: formatResult,
          });


        });

        
</script>


@endsection

</x-layout>







