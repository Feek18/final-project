<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amandemy Market | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        section {
            margin-top: 117px;
        }
    </style>
</head>

<body>


    {{-- navbar --}}
    <header class="navbar bg-body-tertiary">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="">
                    <img src="https://amandemy.co.id/images/amandemy-logo.png" width="20%" alt="">
                </a>
                <nav class="d-flex align-items-center gap-4">
                    <a class="text-decoration-none text-dark" href="{{ route('home') }}">Home</a>
                    <a class="text-decoration-none text-dark" href="{{ route('product-view') }}">Products</a>
                    <button class="btn btn-primary">
                        <a class="text-decoration-none text-white fw-bold" href="{{ route('login') }}">Login</a>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    {{-- hero section --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center gap-3">
                        <div>
                            <p>Discover. Connect. Thrive</p>
                            <h1 class="fs-1 fw-bold">Transform Your Shopping Experience</h1>
                            <p class="opacity-75">Welcome to Amandemy Shopping, where your desires meet their perfect match. Immerse yourself in a world of endless possibilities, curated just for you. Whether your hunting for unique finds, everyday essentials, or extraordinary gifts, we've got you covered</p>
                            <button class="btn btn-primary">
                                <a class="text-decoration-none text-white" href="{{ route('product-view') }}">Buy Now!</a>
                            </button>
                        </div>
                        <div class="col-md-6">
                            <img src="https://img.freepik.com/free-vector/happy-freelancer-with-computer-home-young-man-sitting-armchair-using-laptop-chatting-online-smiling-vector-illustration-distance-work-online-learning-freelance_74855-8401.jpg?w=1060&t=st=1716479532~exp=1716480132~hmac=71d27bcc3890c23c3dcc56d150b799c6369ef47eb92dab6359ad447f0a4f4044" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
