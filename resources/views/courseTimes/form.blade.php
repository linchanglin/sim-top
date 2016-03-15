@inject('modules','App\Module')

{{ csrf_field() }}

<div class="form-group">
    <div class="row">
        <label for="name" class="col-md-4 text-right">课时名称:</label>
        <div class="col-md-4">
            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="description" class="col-md-4 text-right">课时描述:</label>
        <div class="col-md-4">
            <textarea name="description" id="description" class="form-control" rows="4">{{ $description }}</textarea>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="modules" class="col-md-4 text-right">关联模块:</label>
        <div class="col-md-4">
            <select name="modules[]" id="modules" class="form-control js-example-basic-multiple" multiple>
                @foreach($modules::orderBy('name')->get() as $module)
                    <option value="{{ $module->id }}" @if(in_array($module->id,$moduleIds)) selected @endif>{{ $module->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="form-group text-center">
    <button type="submit" class="btn btn-info btn-q"> 确定</button>
    <a href="/courseTimes" class="btn btn-default btn-q"> 取消 </a>
</div>


@section('scripts')
    <script type="text/javascript">
        $(".js-example-basic-multiple").select2();
    </script>
@stop
