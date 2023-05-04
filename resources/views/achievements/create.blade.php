@extends('layout.user')

@section('layout')
    <form method="POST" action="{{ route('achievements.store') }}" class="achievement-form" enctype="multipart/form-data">
        @csrf
        <div class="achievement-form__container">
            <div class="grid gap-6 mb-6">
                <div>
                    <label for="name" class="achievement-form__label">
                        Name
                    </label>
                    <input type="text" id="name" class="achievement-form__input" placeholder="John" name="name"
                        value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->name }}"
                        {{ Auth::user()->role == 'admin' ? 'autofocus' : '' }}>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="nim" class="achievement-form__label">
                        NIM
                    </label>
                    <input type="text" id="nim" class="achievement-form__input" placeholder="123456789"
                        name="nim" value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->nim }}"
                        {{ Auth::user()->role == 'admin' ? 'autofocus' : '' }}>
                    @error('nim')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="program_studi" class="achievement-form__label">
                        Program Studi
                    </label>
                    <input type="text" id="program_studi" class="achievement-form__input"
                        placeholder="Teknik Informatika" name="program_studi"
                        value="{{ Auth::user()->role == 'admin' ? '' : Auth::user()->program_studi }}"
                        {{ Auth::user()->role == 'admin' ? '' : 'disabled' }}>
                    @error('program_studi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="nama_kompetisi" class="achievement-form__label">
                        Nama Kompetisi
                    </label>
                    <input type="text" id="nama_kompetisi" class="achievement-form__input" placeholder="Nama Kompetisi"
                        name="nama_kompetisi">
                </div>
                <div>
                    <label for="deskripsi_kompetisi" class="achievement-form__label">
                        Deskripsi Kompetisi
                    </label>
                    <textarea id="deskripsi_kompetisi" class="achievement-form__input" placeholder="Deskripsi Kompetisi"
                        name="deskripsi_kompetisi"></textarea>
                </div>
                <div>
                    <label for="peringkat" class="achievement-form__label">
                        Peringkat
                    </label>
                    <select id="peringkat" class="achievement-form__input" name="peringkat">
                        <option value="">Pilih Peringkat</option>
                        <option value="Juara 1">Juara 1</option>
                        <option value="Juara 2">Juara 2</option>
                        <option value="Juara 3">Juara 3</option>
                        <option value="Juara Harapan Setara 1">Juara Harapan Setara 1</option>
                        <option value="Juara Harapan Setara 2">Juara Harapan Setara 2</option>
                        <option value="Juara Harapan Setara 3">Juara Harapan Setara 3</option>
                        <option value="Juara Favorit">Juara Favorit</option>
                        <option value="Juara Lainnya">Juara Lainnya</option>
                        <option value="Peserta">Peserta</option>
                    </select>
                </div>
                <div>
                    <label for="file_ide" class="achievement-form__label">
                        File IDE/Karya
                    </label>
                    <input type="file" id="file_ide" class="achievement-form__input" name="file_ide">
                </div>
                <div>
                    <label for="file_poster" class="achievement-form__label">
                        File Poster/Undangan Kompetisi
                    </label>
                    <input type="file" id="file_poster" class="achievement-form__input" name="file_poster">
                </div>
                <div>
                    <label for="file_foto" class="achievement-form__label">
                        File Foto/Dokumentasi
                    </label>
                    <input type="file" id="file_foto" class="achievement-form__input" name="file_foto">
                </div>
                <div>
                    <label for="file_sertifikat" class="achievement-form__label">
                        File Sertifikat
                    </label>
                    <input type="file" id="file_sertifikat" class="achievement-form__input" name="file_sertifikat">
                </div>
                <div>
                    <label for="nama_instansi" class="achievement-form__label">
                        Nama Instansi Penyelenggara
                    </label>
                    <input type="text" id="nama_instansi" class="achievement-form__input"
                        placeholder="Nama Instansi Penyelenggara" name="nama_instansi">
                </div>
                <div>
                    <label for="tingkat_kompetisi" class="achievement-form__label">
                        Tingkat Kompetisi
                    </label>
                    <select id="tingkat_kompetisi" class="achievement-form__input" name="tingkat_kompetisi">
                        <option value="">Pilih Tingkat Kompetisi</option>
                        <option value="Lokal">Lokal</option>
                        <option value="Regional">Regional</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internasional</option>
                    </select>
                </div>
                <div>
                    <label for="tanggal_pelaksanaan" class="achievement-form__label">
                        Tanggal Mulai - Tanggal Selesai Pelaksanaan
                    </label>
                    <input type="text" id="tanggal_pelaksanaan" class="achievement-form__input"
                        placeholder="dd/mm/yyyy - dd/mm/yyyy" name="tanggal_pelaksanaan">
                </div>
            </div>
            <button type="submit" class="achievement-form__button">Submit</button>
        </div>
    </form>
@endsection
