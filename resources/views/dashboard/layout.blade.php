<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Dashboard Admin </title>
    @yield('tailwindcss')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="{{ asset('assets/js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('assets/js/charts-pie.js') }}" defer></script>


    <style>
        .ck-editor__editable {
            min-height: 200px;
        }

        .ck-editor__top [data-cke-tooltip-text="Insert image"] {
            display: none !important;
        }

        .ck-editor__top [data-cke-tooltip-text="Insert table"] {
            display: none !important;
        }

        .ck-editor__top [data-cke-tooltip-text="Insert media"] {
            display: none !important;
        }




        .ck-editor__editable h1 {
            font-size: 2rem;
            font-weight: bold;
            color: black;

        }

        .ck-editor__editable h2 {
            font-size: 1.5rem;
            font-weight: bold;
            color: black;

        }

        .ck-editor__editable h3 {
            font-size: 1.17rem;
            font-weight: bold;
            color: black;

        }

        .ck-editor__editable h4 {
            font-size: 1rem;
            font-weight: bold;
            color: black;

        }

        .ck-editor__editable blackquote {
            font-style: italic;
            border-left: 5px solid #ddd;
            margin-left: 0;
            padding-left: 1rem;
            color: black;

        }


        .ck-editor__editable ul {
            list-style-type: disc !important;
            margin-left: 1rem !important;
            color: black;


        }

        .ck-editor__editable a {
            text-decoration: underline;

        }



        .ck-editor__editable ol {
            list-style-type: decimal !important;
            margin-left: 1rem !important;
            color: black;

        }
    </style>
</head>

<body>

    <div class="container">
        @include('dashboard.components.sidebar')
        @yield('admin_content')
        @include('dashboard.components.rightbar')
    </div>

    @include('sweetalert::alert')


    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>


    <script>
        ClassicEditor
            .create(document.querySelector('.deskripsi'))
            .catch(error => {
                console.error(error);
            });

        CKEDITOR.on('dialogDefinition', function(ev) {
            // Take the dialog name and its definition from the event
            // data.
            var dialogName = ev.data.name;
            var dialogDefinition = ev.data.definition;

            // Check if the definition is from the dialog we're
            // interested on (the Link and Image dialog).
            if (dialogName == 'link' || dialogName == 'image') {
                // remove Upload tab
                dialogDefinition.removeContents('Upload');
            }
        });
    </script>

    <script type="importmap">
        {
            "imports": {
                "ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.js",
                "ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.0.0/"
            }
        }
    </script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet"> --}}

    <script>
        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".img-preview");

            // Menampilkan preview hanya jika file telah dipilih
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>


    <script type="module">
        import {
            ClassicEditor,
            Essentials,
            Bold,
            Italic,
            Font,
            Paragraph
        } from 'ckeditor5';

        ClassicEditor
            .create(document.querySelector('#editor'), {
                plugins: [Essentials, Bold, Italic, Font, Paragraph],
                toolbar: {
                    items: [
                        'undo', 'redo', '|', 'bold', 'italic', '|',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor'
                    ]
                }
            })
            .then( /* ... */ )
            .catch( /* ... */ );
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
