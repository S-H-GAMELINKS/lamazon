<form action="/products/import" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="file" name="file">
    <button type="submit">import</button>
</form>