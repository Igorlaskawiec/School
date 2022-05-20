class Header {

    openShopping(){
        shoppingPage.render();
    }

    render(count) {
        const html=`
        <div class="header-container">
            
        <div class="header-counter" onclick="headerDiv.openShopping()">
        😊${count}
        </div>
    </div>

`;

        ROOT_HEADER.innerHTML=html;
    }
}
const headerDiv = new Header();
const productsStore = localStorageUtil.getProducts();
headerDiv.render(productsStore.length);
