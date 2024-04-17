<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Vue -->
    <script src="<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>" 
    <!-- Axios -->
    <script src="<script src="https://unpkg.com/axios/dist/axios.min.js"></script>"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css">

    <title>PHP-dischi-json</title>
</head>

<body>
    
<div id="app">

    <ul class="list-group">
        <li v-for="(item, index) in list"
        :key="index"
        class="list-group-item d-flex justify-content-between"
        >
        <div class="card d-flex w-50 my-5 mx-auto border-primary  ">
            <div class="card-body">
            <h5 class="card-title"> {{item.title}} </h5>
            <img :src="item.poster" class="card-img-top" :alt="item.title">
            <p class="card-text"> {{item.author}} </p>
            <p class="card-text"> {{item.year}} </p>
            <p class="card-text"> {{item.genre}} </p>
        </div>
        </li>
    </ul>

</div>

<script type="module" src="/script/script.js"></script>

</body>

</html>



    