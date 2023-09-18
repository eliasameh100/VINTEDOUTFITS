const products = [];
const items = document.querySelectorAll('.item');
items.forEach(item => {
    item.addEventListener('click' ,(e)=>{
        e.preventDefault();
        const data = e.target.value;
        const name =document.getElementById('name').textContent
        const price = document.getElementById('price').textContent
        const quantity = document.getElementById('qty').value
        console.log([name,price,quantity,data])
        items.push({data,name,price,quantity})
        const add = localStorage.setItem("cartitem", JSON.stringify(items))
        if(add){
            alert('Added To Cart');
        }
        console.log(localStorage.getItem("cartitem"));
    })
})

const item = document.querySelector('#item').addEventListener('click', addIUtem);

function addIUtem(e){
    e.preventDefault()
    const value = e.target.value;
    const itm = {id:value};
    items.push(itm)
    console.log(items);
    const senddata = fetch('send.php',{
        method: "POST",
        headers:{
            'Content-type':'application/json'
        },
        body : JSON.stringify(items)
    }).then( res=> {return res}).then(data => console.log(data.text()))
}