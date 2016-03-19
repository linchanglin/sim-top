{{ csrf_field() }}

<div class="form-group">
    <div class="row">
        <label for="name" class="col-md-4 text-right">{{ $whose }}名称:</label>
        <div class="col-md-4">
            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="description" class="col-md-4 text-right">{{ $whose }}描述:</label>
        <div class="col-md-4">
            <textarea name="description" id="description" class="form-control" rows="4">{{ $description }}</textarea>
        </div>
    </div>
</div>