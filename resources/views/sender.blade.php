<form action="/sender" method="post">
{{ csrf_field() }}
<input type="text" name="text">
<input type="submit">