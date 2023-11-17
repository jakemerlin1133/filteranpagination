var tbody = document.querySelector("tbody");
var pageUI = document.querySelector(".pagination");
var itemShow = document.querySelector("#itemperpage");
var tr = tbody.querySelectorAll("tr");
var emptyBox = [];
var index = 1;
var itemParPage = 8; 

for (let i = 0; i < tr.length; i++){
    emptyBox.push(tr[i]);
}

itemShow.onchange = giveTrPerPage;

function giveTrPerPage(){
    itemParPage = Number(this.value);   
    displayPage(itemParPage);
    pageGenerator(itemParPage);
}

function displayPage(limit){
    tbody.innerHTML = '';
    for(let i = 0; i < limit; i++){
        tbody.appendChild(emptyBox[i]);
    }
    const pageNum = pageUI.querySelectorAll(".list");
    pageNum.forEach(n => n.remove());
}

displayPage(itemParPage);

function pageGenerator(getem){
    const num_of_tr = emptyBox.length;
    if(num_of_tr <= getem){
        pageUI.style.display = "none";
    }
    else{
        pageUI.style.display = "flex";
        const num_of_page = Math.ceil(num_of_tr/getem);
        for(let i = 1; i <= num_of_page; i++){
            const li = document.createElement('li');
            li.className = 'list';
            const a = document.createElement('a'); 
            a.href = "#";   
            a.innerText = i;
            a.setAttribute('data-page', i);
            li.appendChild(a);
            pageUI.insertBefore(li, pageUI.querySelector(".next"));
        }
    }
}
pageGenerator(itemParPage);