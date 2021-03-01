@extends('layouts.footer')
@extends('layouts.content')
@section('content')
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Putri&Rakha</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <div class="container">
        <img src="https://pngimage.net/wp-content/uploads/2018/06/gambar-kartun-anak-sekolah-png-1.png" class="img-fluid w-100" alt="...">  
        <div class="row align-items-start bg-light">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="https://faktualnews.co/images/2019/07/ilustrasi-gambar-alat-game_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Edu Games</h5>
                            <p class="card-text">Marbel Educational Games</p>
                            <a href="#https://www.educastudio.com/category/marbel-edu-games" class="btn btn-primary">Edu Games</a>
                        </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/OIP.rvaOf5WLgeBRFnl7j015eQAAAA?pid=ImgDet&rs=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kids Games</h5>
                            <p class="card-text"> Marbel & Friends - Kids Games.</p>
                            <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games" class="btn btn-primary">Kids Games</a>
                        </div>
                </div>
            </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="https://th.bing.com/th/id/R89033d73778e12f2e8d12d886bb706d6?rik=k3kBo%2bAP4bWRAA&riu=http%3a%2f%2fmylittlebookshop.in%2fwp-content%2fuploads%2f2016%2f09%2fWhatsApp-Image-2016-09-13-at-23.43.01-1080x675.jpeg&ehk=FkgfTq9XR8tUACnKLE%2flw1H1DxD3BTviMixMVBdFt5M%3d&risl=&pid=ImgRaw" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Stroy Books</h5>
                            <p class="card-text">Riri Story Books</p>
                            <a href="https://www.educastudio.com/category/riri-story-books" class="btn btn-primary">Story Books</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light">
            <div class="col">
            <div class="card" style="width: 18rem;">
                    <img src="https://multimedia-english.com/img/web/covers/kids-songs.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Songs</h5>
                            <p class="card-text">Kolak Kids Songs</p>
                            <a href="https://www.educastudio.com/category/kolak-kids-songshttps://www.educastudio.com/category/kolak-kids-songs" class="btn btn-primary">Kids Songs</a>
                        </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@extends('layouts.sidebar')
@extends('layouts.header')