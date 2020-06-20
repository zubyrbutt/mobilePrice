
<div class="form-group">
    <form method="post" action="{{route('import')}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Import</button>
    </form>

</div>
