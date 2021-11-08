<form action="{{ route('dummy.destroy', ['dummy' => $dummy->token]) }}" method="POST">
    @csrf
    @method('DELETE')
    <a class="btn" href="{{ route('dummy.show', ['dummy' => $dummy->token]) }}">SHOW</a>
    <a class="btn" href="{{ route('dummy.edit', ['dummy' => $dummy->token]) }}">EDIT</a>
    <input class="btn" type="submit" value="DELETE" />
</form>
