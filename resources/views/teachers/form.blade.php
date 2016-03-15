{{ csrf_field() }}

<div class="form-group">
    <div class="row">
        <label for="student_id" class="col-md-4 text-right">教师工号:</label>
        <div class="col-md-4">
            <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $student_id }}"
                   required>
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <label for="name" class="col-md-4 text-right">教师姓名:</label>
        <div class="col-md-4">
            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" required>
        </div>
    </div>
</div>

<input type="hidden" name="password" value="{{ bcrypt('123456') }}">
<input type="hidden" name="role_id" value="2">

<div class="form-group text-center">
    <button type="submit" class="btn btn-info btn-q"> 确定</button>
    <a href="/teachers" class="btn btn-default btn-q"> 取消 </a>
</div>
