class LocalStorageUtil {
    getProducts() {
        const prodLocalStorage = localStorage.getItem(`products`);
        if(prodLocalStorage != null){
        return JSON.parse(prodLocalStorage);
        }
        return [];
    }
}
const localStorageUtil = new LocalStorageUtil();
