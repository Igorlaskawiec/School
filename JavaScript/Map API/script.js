const link = "http://localhost/map API/map.php";
const map = document.getElementById("europe");
const buttonShow = document.getElementById("buttonShow");
const APILink ="http://api.weatherapi.com/v1/current.json?key=d36ecd7e04424dc8b8570910220104";




        const fetchData = async () => {
            const result = await fetch(`${link}`);
             const data = await result.json();
             //console.log(data);

             Object.entries(data).forEach((info) =>{
                 //console.log(info);
                 let path = info[1].path;
                 let query = info[1].city;
                 
                

                 const fetchData2 = async () => {
                     //console.log(query);
                    const result = await fetch(`${APILink}&q=${query}&aqi=no`);
                     const data2 = await result.json();
                    //console.log(data2);

                    let temperature = data2.current.temp_c;
                    //console.log(temperature);

                    let color;
                    if(temperature<=-10){
                        color = "#001dbf";
                    }
                    if(temperature>-5 && temperature<=-2){
                        color="#3a52de";
                    }
                    if(temperature>-2 && temperature<=0){
                        color="#3a71e8";
                    }
                    if(temperature>0 && temperature<=5){
                        color="#ff8142";
                    }
                    if(temperature>5 && temperature<=10){
                        color="#ff6242";
                    }                    
                    if(temperature>10 && temperature<=15){
                        color="#ff4d29";
                    }
                    if(temperature>15 && temperature<=20){
                        color="#ff3a12";
                    }
                    if(temperature>20){
                        color="#ff0000";
                    }


                    map.innerHTML += `
                    <path fill="${color}" d="${path}"></path>
                    `
                    //console.log(path);

                }
                fetchData2();
             })



        }

        fetchData();

        //buttonShow.addEventListener("click", fetchData);
       // buttonShow.addEventListener("click", showCountries);
