const link = "https://api.tvmaze.com/search/shows?";

const maindiv = document.getElementById("app");
const inp = document.getElementById("textInput");
const search = document.getElementById("search");



const fetchData = async () => {
     let nazwa = textInput.value;
     const result = await fetch(`${link}q=${nazwa}`);
      const data = await result.json();
      console.log(data);

        for(let x = 0; x<data.length; x++){
                let name = data[x].show.name;
                let img = data[x].show.image.medium;
                let summary = data[x].show.summary;
                let netlink = data[x].show.url;
                let episodeNumber = x+1;
                let language = data[x].show.language;
                let rating = data[x].show.rating.average;
                let genres = data[x].show.genres;

                maindiv.innerHTML+=
                `
                <br><br>
                <hr>
                <br>

                <a href="${netlink}"><h1> ${name}</h1></a>
                <br>
                <strong>Rating: </strong>
                `
                if(rating == null){

                        maindiv.innerHTML+=
                        `
                        <strong>Not given</strong>
                        `
                }else{
                        for(let j = 0; j < rating; j++){
                                maindiv.innerHTML+=
                                `
                                <span class="fa fa-star checked"></span>
                
                                `
                                }
                }
                maindiv.innerHTML+=
                `

                <br>
                <br>
                <img src="${img}"/>
                <br>
                <br>
                <strong>Description:</strong>
                <br>
                ${summary}
                <br>
                <strong> Genres: </strong>`


                console.log(genres)

                for(let y=0; y<genres.length;y++){

                        if(genres[y] == "Drama"){
                                maindiv.innerHTML+=
                                `
                                <img width="30px" height="30px" src="drama.png"></img>
                                
                                `
                        }
                        if(genres[y] == "Action"){
                                maindiv.innerHTML+=
                                `
                               <img width="30px" height="30px" src="action.png"></img>
                                
                                `
                        }
                        if(genres[y] == "Fantasy"){
                                maindiv.innerHTML+=
                                `
                                <img width="30px" height="30px" src="fantasy.png"></img>
                                
                                `
                        }
                        if(genres[y] == "Horror"){
                                maindiv.innerHTML+=
                                `
                                <img width="30px" height="30px" src="horror.png"></img>
                        
                                `
                                
                        }
                        if(genres[y] == "Science-Fiction"){
                                maindiv.innerHTML+=
                                `
                                <img width="30px" height="30px" src="sf.png"></img>
                        
                                `
                                
                        }
                        if(genres[y]!= "Drama" && genres[y]!= "Action" && genres[y]!= "Fantasy" && genres[y]!= "Horror" && genres[y]!= "Science-Fiction" ){
                                maindiv.innerHTML+=
                                `
                                ${genres[y]}
                                `
                        }
                }

                maindiv.innerHTML+=
                `
                <br>
                <br>
                <br>
                `


                if(language == "English"){
                        maindiv.innerHTML+=
                        `
                        <strong> Language: </strong> <img width="20px" height="20px" src="us.png"></img> ${language}
         
                         `
                }
                if(language == "Spanish"){
                        maindiv.innerHTML+=
                        `
                        <strong> Language: </strong> <img width="20px" height="20px" src="es.png"></img> ${language}
         
                         `
                }
                
                if(language == "French"){
                        maindiv.innerHTML+=
                        `
                        <strong> Language: </strong> <img width="20px" height="20px" src="fr.png"></img> ${language}
         
                         `
                }
                if(language != "English" && language != "Spanish" && language != "French"){
                        maindiv.innerHTML+=
                        `
                        <strong> Language: </strong>  ${language}
         
                         `
                }

               
                

        }

        
}

const clearDiv = () =>{
        
        maindiv.innerHTML = 
        `
       
        `

}

search.addEventListener("click", clearDiv);
search.addEventListener("click", fetchData);
