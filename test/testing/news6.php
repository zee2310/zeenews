<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="index.js"></script>
    <script src="../jquery.js"></script>
    <title>website news</title>
</head>
<body>
    <div class="container">
<h1 class="title"></h1>

<img class="content-img" src="" alt="">

<h3 class="desc"></h3>
</div>

</body>
</html>

<style>
    .container{
        width: 50%;
    }
    .container img{
        width: 100%;
    }
    
</style>

<script>
    const options = {
	method: "GET",
	headers: {
		"X-RapidAPI-Key": "1561f315a2msh05627d7e59c7c29p1f7c84jsn488559c0d099",
		"X-RapidAPI-Host": "current-news.p.rapidapi.com"
	}
};
function test(){

    fetch("https://current-news.p.rapidapi.com/news", options)
        .then(response => response.json())
        .then(response => $(".title").text(response["news"][6]["title"]))
        // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
        .catch(err => console.error(err));

    fetch("https://current-news.p.rapidapi.com/news", options)
        .then(response => response.json())
        .then(response => $(".content-img").attr("src",response["news"][6]["urlToImage"]))
        .catch(err => console.error(err));

    fetch("https://current-news.p.rapidapi.com/news", options)
        .then(response => response.json())
        .then(response => $(".desc").text(response["news"][6]["description"]))
        .catch(err => console.error(err));
}
test();
</script>