class CartItem{
    constructor(id,productid,name,price){
        this.id=id;
        this.productid=productid;
        this.name=name;
        this.price=price;
        this.quantity=1;
    }
}
// functions
class LocalCart{
    static key ='cartProducts';
     //getting all items from cart and storing it in the localstorage
    static getCartItems(){
        let cartMap =new Map;
        const cart = localStorage.getItem(key)
        if(cart===null || cart.length===0) return cartMap;
        //we are making each cart into a javascript object to be showed on the localstorage
        return new Map(Object.entries(JSON.parse(cart)));
    }


    //adding items from cart to localstorage
    static addItemToCart(id, item){
        let cart = LocalCart.getCartItems();
        if(cart.has(id))
    }


    //removing from localstorage base on id
    static removeItemCart(id){

    }
}