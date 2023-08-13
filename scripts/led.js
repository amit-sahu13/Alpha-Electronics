fetch('json-files/led.json')
.then(response=>{
    return response.json();
})
.then(objectData=>{
    let productData='';
    objectData.map((values)=>{
        productData+= ` <section class="section-1">
        <div class="product-1-image">
            <img src="${values.image}" alt="Error loading image">
        </div>
        <div class="product-1-content" >
            <h3 class="product-1-title">${values.title}</h3>
            <span class="description">${values.description}</span>
            <br><br>
            <p class="price">${values.price}</p>
            <div class="ratings">
                &#10025; &#10025; &#10025; &#10025; &#10025;
            </div>
            <button class="add-to-cart-btn"><span>Add to Cart</span></button>
        </div>
    </section>` 
    })
    document.getElementById('product-card').innerHTML=productData;
});

function led(){
    window.location.href = "led.html";
}