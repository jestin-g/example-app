<form method="POST" action="{{ route('note.update', [$note]) }}" role="form" enctype="multipart/form-data">
    @csrf
  <label for="contenu">Contenu:</label><br>
  <input type="text" id="contenu" name="contenu" value="{{ $note->contenu }}"><br>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>