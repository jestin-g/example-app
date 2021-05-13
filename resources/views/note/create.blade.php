<form method="POST" action="{{ route('note.store') }}" role="form" enctype="multipart/form-data">
    @csrf
  <label for="contenu">Contenu:</label><br>
  <input type="text" id="contenu" name="contenu"><br>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form> 