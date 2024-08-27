@extends('dashboard.layout')

@section('tailwindcss')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">

@show
@section('admin_content')
    <div class="mt-20 p-4 hiddenscroll">
        <h2 class="darkmode mb-4 text-xl font-bold text-gray-900 dark:text-white" id="darkmode">Tambahkan Data Movie</h2>
        <form action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid gap-4 grid-cols-1 lg:grid-cols-2 sm:gap-6">
                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="judul"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Judul Film</label>
                    <input id="input" type="text" name="judul" id="judul"
                        value="{{ old('judul', $movie->judul) }}"
                        class="darkmode @error('judul') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan judul film.." required>
                    @error('judul')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full col-span-2 lg:col-span-1">
                    <label id="darkmode" for="genre"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Genre</label>
                    <input id="input" type="text" name="genre" id="genre"
                        value="{{ old('genre', $movie->genre) }}"
                        class="darkmode @error('genre') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan genre film.." required>
                    @error('genre')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="w-full col-span-2 lg:col-span-1">
                    <label id="darkmode" for="link_movie"
                        class="darkmode block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Full
                        Movie(Youtube)</label>
                    <input id="input" type="text" name="link_movie" id="link_movie"
                        value="{{ old('link_movie', $movie->link_movie) }}"
                        class="darkmode @error('link_movie') border-red-700 border @enderror bg-gray-50 border darkmode border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Link Full Movie.." required>
                    @error('link_movie')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-2 lg:col-span-1">
                    <label id="darkmode" for="link_trailer"
                        class="darkmode block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link
                        Trailer(Youtube)</label>
                    <input id="input" type="text" name="link_trailer" id="link_trailer"
                        value="{{ old('link_trailer', $movie->link_trailer) }}"
                        class="darkmode @error('link_trailer') border-red-700 border @enderror bg-gray-50 border darkmode border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Link Trailer.." required>
                    @error('link_trailer')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="actor"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Nama Actor</label>
                    <input type="text" name="actor" id="actor" value="{{ old('actor', $movie->actor) }}"
                        class="darkmodebg darkmode @error('actor') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Nama Actor">
                    @error('actor')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="sutradara"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Sutradara</label>
                    <input type="text" name="sutradara" id="sutradara" value="{{ old('sutradara', $movie->sutradara) }}"
                        class="darkmodebg darkmode @error('sutradara') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Nama Sutradara">
                    @error('sutradara')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="tahun"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Tahun
                        Pembuatan</label>
                    <input type="text" name="tahun" id="tahun" value="{{ old('tahun', $movie->tahun) }}"
                        class="darkmodebg darkmode @error('tahun') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukan Tahun Pembuatan">
                    @error('tahun')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="rating"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Rating </label>
                    <input type="text" name="rating" id="rating" value="{{ old('rating', $movie->rating) }}"
                        class="darkmodebg darkmode @error('rating') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cth: 8.3">
                    @error('rating')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-span-2 lg:col-span-1">
                    <label id="darkmode" for="durasi"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode">Durasi</label>
                    <input type="text" name="durasi" id="durasi" value="{{ old('durasi', $movie->durasi) }}"
                        class="darkmodebg darkmode @error('durasi') border-red-700 border @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Cth: 1 jam 20 menit">
                    @error('durasi')
                        <div class=" text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div class="w-full col-span-2">
                    <label id="darkmode" id="input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode"
                        for="image">Banner
                        Gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $movie->gambar }}">
                    @if ($movie->gambar)
                        <img src="/storage/{{ $movie->gambar }}" class="img-preview mb-2 w-1/2 -z-50 object-cover">
                    @else
                        <img class="img-preview mb-2 w-1/2 -z-50 object-cover">
                    @endif
                    <input onchange="previewImage()"
                        class="@error('gambar')
                            border-red-700 border
                             @enderror block w-full p-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer dark:text-gray-400 focus:outline-none  dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="file_input_help" id="image" name="gambar" type="file">
                    <p class="mt-1 text-sm  text-gray-900 dark:text-white" id="file_input_help">PNG, JPG or JPEG (MAX.
                        30mb).</p>
                    @error('gambar')
                        <div class="absolute text-xs text-red-500">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-span-2">
                    <label id="darkmode" id="input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white darkmode"
                        for="image">Deskripsi Singkat</label>
                    <input type="hidden" id="deskripsi" name="deskripsi"
                        value="{{ old('deskripsi', $movie->deskripsi) }}">
                    <textarea class="form-control deskripsi darkmode darkmodebg" id="deskripsi" input="deskripsi" name="deskripsi"></textarea>

                </div>
            </div>
            <button type="submit"
                class="inline-flex items-center px-5 mt-4  py-2.5   text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Publish
            </button>
        </form>
    </div>
@endsection

<script>
    function previewImage() {
        const image = document.querySelector("#image");
        const imgPreview = document.querySelector("#img-preview");

        // Menampilkan preview hanya jika file telah dipilih
        if (image.files && image.files[0]) {
            imgPreview.style.display = "block";

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        }
    }
</script>
