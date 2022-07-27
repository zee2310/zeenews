// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '1561f315a2msh05627d7e59c7c29p1f7c84jsn488559c0d099',
// 		'X-RapidAPI-Host': 'current-news.p.rapidapi.com'
// 	}
// };
// function test(){

//     fetch('https://current-news.p.rapidapi.com/news', options)
//         .then(response => response.json())
//         .then(response => $(".title").text(response["news"][0]["title"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));

//     fetch('https://current-news.p.rapidapi.com/news', options)
//         .then(response => response.json())
//         .then(response => $(".content-img").attr("src",response["news"][0]["urlToImage"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));

//     fetch('https://current-news.p.rapidapi.com/news', options)
//         .then(response => response.json())
//         .then(response => $(".desc").text(response["news"][0]["description"]))
//         // .then(response => $(".testing-img").attr("src",response["news"][0]["urlToImage"]))
//         .catch(err => console.error(err));
// }
// test();
// function test1(){

//     fetch('https://current-news.p.rapidapi.com/news', options)
//         .then(response => response.json())
//         .then(response => $(".test1").text(response["news"][1]["description"]))
//         .catch(err => console.error(err));
// }
// test1();



//     fetch('https://current-news.p.rapidapi.com/news', options)
//         .then(response => response.json())
//         .then(response => console.log(response["news"]))
//         .catch(err => console.error(err));

// sports api 
// var APIkey='169aabdf807c17116f47ee8431e584b22567d5650a73c7bd414f6fdd6421b302';

// var socket  = new WebSocket('wss://wss.allsportsapi.com/live_events?widgetKey='+APIkey+'&timezone=+03:00');
// socket.onmessage = function(e) {
//   if (e.data) {
//     var matchesData = JSON.parse(e.data);
//     // Now variable matchesData contains all matches that received an update
//     // Here can update matches in dom from variable matchesData
//     console.log(matchesData);
//   }
// }



// const options = {
// 	method: 'GET',
// 	headers: {
// 		'X-RapidAPI-Key': '1561f315a2msh05627d7e59c7c29p1f7c84jsn488559c0d099',
// 		'X-RapidAPI-Host': 'google-news.p.rapidapi.com'
// 	}
// };


    
    
//     fetch('https://google-news.p.rapidapi.com/v1/topic_headlines?lang=en&country=US&topic=technology', options)
//         .then(response => response.json())
//         .then(response => console.log(response))
//         .catch(err => console.error(err));