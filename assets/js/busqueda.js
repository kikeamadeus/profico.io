document.addEventListener("keyup", e =>{
    if(e.target.matches("#inputSearch")) {
        document.querySelectorAll(".prodName").forEach(productos =>{
            productos.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ? productos.closest(".col").setAttribute('id', 'show') : productos.closest(".col").setAttribute('id', 'hidden');
        })
    }
});