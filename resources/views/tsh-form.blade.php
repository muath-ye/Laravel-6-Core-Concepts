<form action="{{ route('tsh') }}" method="post">
    @csrf
    <textarea type="text" name="text" id=""></textarea>
    <br>
    <input type="submit" value="encrypt">
</form>
