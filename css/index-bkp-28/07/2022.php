<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
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

<!-- <script>
    const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '1561f315a2msh05627d7e59c7c29p1f7c84jsn488559c0d099',
		'X-RapidAPI-Host': 'current-news.p.rapidapi.com'
	}
};
function test(){

    fetch('https://current-news.p.rapidapi.com/news', options)
        .then(response => response.json())
        .then(response => $(".title").text(response["news"][0]["title"]))
        // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
        .catch(err => console.error(err));

    fetch('https://current-news.p.rapidapi.com/news', options)
        .then(response => response.json())
        .then(response => $(".content-img").attr("src",response["news"][0]["urlToImage"]))
        // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
        .catch(err => console.error(err));

    fetch('https://current-news.p.rapidapi.com/news', options)
        .then(response => response.json())
        .then(response => $(".desc").text(response["news"][0]["description"]))
        // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
        .catch(err => console.error(err));
}
test();
</script> -->


<?php




// for($file = 0; $file <= 20;$file++){
//     $createfile = fopen('news/news'.$file.'.html','w');

// fwrite($createfile,'<!DOCTYPE html>
// <html>
// <head>
// <title>Latest News</title>
// <meta charset="UTF-8">
// <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Montserrat:wght@100;200;300&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
// <link rel="stylesheet" href="../css/style.css">
//     <script src="../js/script.js"></script>
//     <script src="../js/jquery.js"></script>
// <meta name="viewport" content="width=device-width, initial-scale=1">
// <style>

// </style>
// </head>
// <body>

// <!-- Note -->


// <!-- Header -->
// <div class="header">
//   <h1>Zee News</h1>
//   <!-- <p>With a <b>flexible</b> layout.</p> -->
// </div>

// <!-- Navigation Bar -->
// <div class="navbar">
//   <a href="#">Home</a>
//   <a href="#">News</a>
//   <a href="#">Articles</a>
//   <a href="#">Contact Us</a>
// </div>

// <!-- The flexible grid (content) -->
// <div class="row">
// <div class="side">
//   <h3>Recent news</h3>  
//   <ul class="article-list">
//     <!-- <li class="li-list"><a class="link-style" href="news/news0.php">article 1</a></li>
//     <li class="li-list"><a class="link-style" href="news/news1.php">article 2</a></li>
//     <li class="li-list"><a class="link-style" href="news/news2.php">article 3</a></li>
//     <li class="li-list"><a class="link-style" href="news/news3.php">article 4</a></li>
//     <li class="li-list"><a class="link-style" href="news/news4.php">article 5</a></li>
//     <li class="li-list"><a class="link-style" href="news/news5.php">article 6</a></li>
//     <li class="li-list"><a class="link-style" href="news/news6.php">article 7</a></li>
//     <li class="li-list"><a class="link-style" href="news/news7.php">article 8</a></li>
//     <li class="li-list"><a class="link-style" href="news/news8.php">article 9</a></li>
//     <li class="li-list"><a class="link-style" href="news/news9.php">article 10</a></li>
//     <li class="li-list"><a class="link-style" href="news/news10.php">article 11</a></li>
//     <li class="li-list"><a class="link-style" href="news/news11.php">article 12</a></li>
//     <li class="li-list"><a class="link-style" href="news/news12.php">article 13</a></li>
//     <li class="li-list"><a class="link-style" href="news/news13.php">article 14</a></li>
//     <li class="li-list"><a class="link-style" href="news/news14.php">article 15</a></li>
//     <li class="li-list"><a class="link-style" href="news/news15.php">article 16</a></li>
//     <li class="li-list"><a class="link-style" href="news/news16.php">article 17</a></li>
//     <li class="li-list"><a class="link-style" href="news/news17.php">article 18</a></li>
//     <li class="li-list"><a class="link-style" href="news/news18.php">article 19</a></li> -->
//   </ul>
//   <!-- <h2>About Me</h2>
//     <h5>Photo of me:</h5>
//     <div class="fakeimg" style="height:200px;">Image</div>
//     <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
//     <h3>More Text</h3>
//     <p>Lorem ipsum dolor sit ame.</p>
//     <div class="fakeimg" style="height:60px;">Image</div><br>
//     <div class="fakeimg" style="height:60px;">Image</div><br>
//     <div class="fakeimg" style="height:60px;">Image</div> -->
//   </div>
// <div class="main">
//     <h2 class="title"></h2>
    
//     <div class="img-container" ><img class="content-img" src="" alt=""></div>
    
//     <p ><b class="desc"></b></p>
//     <br>
   
//   </div>
//   <div class="side">
//   <h3>Recent news</h3>  
//   <ul class="article-list">
//     <!-- <li class="li-list"><a class="link-style" href="">article 1</a></li>
//     <li class="li-list"><a class="link-style" href="">article 2</a></li>
//     <li class="li-list"><a class="link-style" href="">article 3</a></li>
//     <li class="li-list"><a class="link-style" href="">article 4</a></li>
//     <li class="li-list"><a class="link-style" href="">article 5</a></li>
//     <li class="li-list"><a class="link-style" href="">article 6</a></li>
//     <li class="li-list"><a class="link-style" href="">article 7</a></li>
//     <li class="li-list"><a class="link-style" href="">article 8</a></li>
//     <li class="li-list"><a class="link-style" href="">article 9</a></li>
//     <li class="li-list"><a class="link-style" href="">article 10</a></li>
//     <li class="li-list"><a class="link-style" href="">article 11</a></li>
//     <li class="li-list"><a class="link-style" href="">article 12</a></li>
//     <li class="li-list"><a class="link-style" href="">article 13</a></li>
//     <li class="li-list"><a class="link-style" href="">article 14</a></li>
//     <li class="li-list"><a class="link-style" href="">article 15</a></li>
//     <li class="li-list"><a class="link-style" href="">article 16</a></li>
//     <li class="li-list"><a class="link-style" href="">article 17</a></li>
//     <li class="li-list"><a class="link-style" href="">article 18</a></li>
//     <li class="li-list"><a class="link-style" href="">article 19</a></li> -->
//   </ul>
//   <!-- <h2>About Me</h2>
//     <h5>Photo of me:</h5>
//     <div class="fakeimg" style="height:200px;">Image</div>
//     <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
//     <h3>More Text</h3>
//     <p>Lorem ipsum dolor sit ame.</p>
//     <div class="fakeimg" style="height:60px;">Image</div><br>
//     <div class="fakeimg" style="height:60px;">Image</div><br>
//     <div class="fakeimg" style="height:60px;">Image</div> -->
//   </div>
 
// </div>

// <!-- Footer -->
// <div class="footer">
//   <h2>Follow us</h2>
//   <ul>
//     <li class="li-list"><b>Instagram</b></li>
//     <li class="li-list"><b>Facebook</b></li>
//   </ul>
// </div>

// </body>
// </html>


// <script>
// $(document).ready(function(){
//     newslength=0;
// for(lenght=0;lenght<=20;lenght++){
//     length++;
//     $(".article-list").append(" <li class="li-list"><a class="link-style" href="news"+newslength+".html">article "+length+"</a></li>")
//     newslength++;
// }
// });


//     const options = {
// 	method: "GET",
// 	headers: {
// 		"X-RapidAPI-Key": "1561f315a2msh05627d7e59c7c29p1f7c84jsn488559c0d099",
// 		"X-RapidAPI-Host": "current-news.p.rapidapi.com"
// 	}
// };
// function test(){

//     fetch("https://current-news.p.rapidapi.com/news", options)
//         .then(response => response.json())
//         .then(response => $(".title").text(response["news"]['.$file.']["title"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));

//     fetch("https://current-news.p.rapidapi.com/news", options)
//         .then(response => response.json())
//         .then(response => $(".content-img").attr("src",response["news"]['.$file.']["urlToImage"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));

//     fetch("https://current-news.p.rapidapi.com/news", options)
//         .then(response => response.json())
//         .then(response => $(".desc").text(response["news"]['.$file.']["description"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));
// }
// test();
// </script>

// ');
// fclose($createfile);
// echo"file created successfully";
// }
?>