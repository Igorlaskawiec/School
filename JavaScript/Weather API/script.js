const link =
    "http://api.weatherstack.com/current?access_key=2f45f21a3088d8d943839735d6bb6146";

const root = document.getElementById("root");
const popup = document.getElementById("popup");
const textInput = document.getElementById("text-input");
const form = document.getElementById("form");

let store = {
    city: "Warsaw",
    temperature: 0,
    observationTime: "00:00 AM",
    isDay: "yes",
    description: "cloud",
    properties: {
        cloudcover: {
            title: "default",
            icon: "default",
            value: "default"
        },
        humidity: {
            title: "default",
            icon: "default",
            value: "default"
        },
        windSpeed: {
            title: "default",
            icon: "default",
            value: "default"
        },
        pressure: {
            title: "default",
            icon: "default",
            value: "default"
        },
        uvIndex: {
            title: "default",
            icon: "default",
            value: "default"
        },
        visibility: {
            title: "default",
            icon: "default",
            value: "default"
        }
    }
}

const getImage = (description) => {
    //const value = description.toLowerCase();

    switch (description) {
        case "Partly cloudy":
            return "partly.png";
        case "Cloud":
            return "cloud.png";
        case "fog":
            return "fog.png";
        case "Sunny":
            return "sunny.png";
        case "Cloud":
            return "cloud.png";
        default:
            return "the.png";
    }
};
console.log(store);
//console.log(typeof(store));

const renderProperties = (properties) => {
    console.log(properties);
    return Object.values(properties).map(({title, icon, value}) => {

        return `<div class="property">
            <div class="property-icon">
              <img src="./img/icons/${icon}" alt="">
            </div>
            <div class="property-info">
              <div class="property-info__value">${value}</div>
              <div class="property-info__description">${title}</div>
            </div>
          </div>`;
    }).join("");
}


const markup = () => {
    //console.log(store);
    /*const city = store.city;
    const description = store.description;
    const observationTime = store.observationTime;
    const temperature = store.temperature;
    const isDay = store.isDay;
    const properties = store.properties;*/
    const { city, description, observationTime, temperature, isDay, properties }
        = store;
        //console.log(store);
    const containerClass = isDay === "yes" ? "is-day" : "";
    return `<div class="container ${containerClass}">
            <div class="top">
              <div class="city">
                <div class="city-subtitle">Weather Today in</div>
                  <div class="city-title" id="city">
                  <span>${city}</span>
                </div>
              </div>
              <div class="city-info">
                <div class="top-left">
                <img class="icon" src="./img/${getImage(description)}" alt="" />
                <div class="description">${description}</div>
              </div>
           
              <div class="top-right">
                <div class="city-info__subtitle">as of ${observationTime}</div>
                <div class="city-info__title">${temperature}°</div>
              </div>
            </div>
          </div>
        <div id="properties">${renderProperties(properties)}</div>
      </div>`;
    //partly cloudy, cloud, fog, sunny, cloud
    //default => the.png
}
const toggleForm =() => {
  popup.classList.toggle("active")
}
const renderComponent = () => {
    root.innerHTML = markup();
    const city = document.getElementById("city");
city.addEventListener("click", toggleForm);

}
renderComponent();


const fetchData = async () => {
  let query = localStorage.getItem("city") || store.city;
    const result = await fetch(`${link}&query=${query}`);
    const data = await result.json();
    console.log(data);
    //store = data;
    //const name = data.location.city;
    const {
        current: {
            cloudcover, //data.location.cloudcover->cloudcover
            temperature,
            humidity,
            observation_time: observationTime,
            pressure,
            uv_index:uvIndex,
            visibility,
            is_day :isDay,
            weather_descriptions: description,//data.location.weather_descriptions->description
            wind_speed: windSpeed
        },
        location: { name }
    } = data;

    store = {
        isDay,
        city: name,
        temperature,
        observationTime,
        description: description[0],
        properties: {
            cloudcover : {
                title: "cloudcover",
                value: `${cloudcover}%`,
                icon: "cloud.png"
            },
            windspeed : {
                title: "",
                value: `${windSpeed}km/h`,
                icon: "wind.png"
            },
            uvIndex : {
                title: "uvIndex",
                value: `${uvIndex}/100`,
                icon: "uv-index.png"
            },
            humidity : {
                title: "humidity",
                value: `${humidity}%`,
                icon: "humidity.png"
            },
            pressure : {
                title: "pressure",
                value: `${pressure}Pa`,
                icon: "gauge.png"
            },
            visibility : {
                title: "visibility",
                value: `${visibility}%`,
                icon: "visibility.png"
            },
        }
    }
    renderComponent();
    //console.log(store);
}

const handleSubmit = (e) => {
  e.preventDefault();
  localStorage.setItem("city", store.city);
  fetchData();
  toggleForm();
}

const handleInput = (e) => {
 store = {
  ...store,
  city: e.target.value,

 }
}
form.addEventListener("submit", handleSubmit);
textInput.addEventListener("input", handleInput);

fetchData();


