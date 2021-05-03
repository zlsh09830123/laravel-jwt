<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <button id="get-data">Get Data</button>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>

<script>
    const getData = document.getElementById('get-data');
    getData.addEventListener('click', function() {
        axios.get('/api/products')
            .then((result) => {
                console.log(result.data);
            }).catch((err) => {
                console.log(err);
            });
    });
</script>