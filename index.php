<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc</title>

    <link rel="stylesheet" href="./css/style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body style="background-color: rgb(29, 45, 60);">

    <div id="app">

        <nav class="bg-black px-5  ">
            <div>

                <img src="./img/spotify.jpg" style="max-height: 50px;" alt="">
            </div>
        </nav>

        <div class="container pt-3">

            <div class="row">
                <div v-for="album in discList" class="col-md-4 d-flex justify-content-center ">
                    <div class="card mb-5 pt-4" style="width:290px; background-color: rgb(17, 32, 48);">

                        <img :src=" album.poster" class=" img-fluid " alt="" style=" max-height:160px;  object-fit: contain;">
                        <div class="card-body text-center text-white">
                            <h5 class="card-title"><strong>{{album.title}}</strong></h5>
                            <p class="card-text">{{album.author}}</p>
                            <p class="card-text"><strong>{{album.year}}</strong></p>
                            <!-- <p class="card-text">{{album.genre}}</p> -->
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>




    <script src="./js/main.js"></script>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>