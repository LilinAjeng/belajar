<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <div>
        <label>Judul Buku</label>
        <input type="text" name="title" 
        value="{{ old('title') }}" placeholder="Masukkan Judul">
        <!-- Title message error -->
        @error('title')
        <div>
            {{$message}}
</div>
@enderror
</div>
<div>
        <label>Penulis</label>
        <input type="text" name="author" placeholder="Masukkan Nama Penulis">
</div>
<div>
        <label>Kategori</label>
        <input type="text" name="categori_id" placeholder="Masukkan Kategori">
</div>
<button type="submit">Simpan</button>
</form>
