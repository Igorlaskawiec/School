class Products {
    render() {
        let htmlCatalog = `<ul class="products-container">`;

        //for (i = 0; CATALOG.length; i++)
        CATALOG.forEach(
            (product) => {
                htmlCatalog += `
                <li class="product">
                <span>${product.name}</span>
                <img src="${product.img}"/>
                <span>${product.price}</span>
                <button class="product-btn">DO KOSZYKA</button>
            </li>
                `;
            }
        );
        htmlCatalog += `</ul>`;
        ROOT_PRODUCTS.innerHTML = htmlCatalog;
    }
}

let productPage = new Products();
productPage.render();



















/*class Car {
    constructor(name) {
       this.name =  name;
    }

    go() {
        console.log("jade prosto samochodem " + this.name);
    }

    fuel() {
        console.log("tankowanie");
    }
}

let audi = new Car("myAudi");
let bmw = new Car("myBMW");

audi.go();
bmw.go();*/

