{{ csrf_field() }}

<div class="form-group">
    <div class="row">
        <label for="name" class="col-md-4 text-right">模块名称:</label>
        <div class="col-md-4">
            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="description" class="col-md-4 text-right">模块描述:</label>
        <div class="col-md-4">
            <textarea name="description" id="description" class="form-control" rows="4">{{ $description }}</textarea>
        </div>
    </div>
</div>


<div class="form-group text-center">
    <button type="submit" class="btn btn-info btn-q"> 确定</button>
    <a href="/modules" class="btn btn-default btn-q"> 取消 </a>
</div>
