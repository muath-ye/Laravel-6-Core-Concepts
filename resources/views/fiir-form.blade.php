<form action="{{ route('fiir') }}" method="post">
    @csrf
    <textarea type="text" name="text" id=""></textarea>
    <br>
    <input type="submit" value="decrypt">
</form>