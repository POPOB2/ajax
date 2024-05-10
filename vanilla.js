function eventList(events){
    let title=document.querySelector(".title")
    title.innerHTML=events.title
    let ul=document.querySelector('ul')
    let li=''
    let entrys=events.entry
    for(let i=0; i<entrys.length; i++){
        li=li+`<li class='card col-3'>
                <div class='card-body'>
                    ${entrys[i].title}
                <div class='name'>${entrys[i].author.name}</div>
                <div class='summary'>${entrys[i].summary}</div>
                </div>
            </li>`
    }
    ul.innerHTML=li
}