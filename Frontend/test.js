function putText(text1, person){
    let msg =""
    let tag =document.createElement("div")
    // console.log(text1+ "    Helejlnlshndn")
    if(person == "1"){
        let text = document.createTextNode(text1)
        tag.className ="messages__item"
        tag.classList.add("messages__item--operator")
        // tag.className = "messages__item--operator"
        tag.appendChild(text)
        // msg = " <div class='messages__item messages__item--operator'>"+ text +"</div>"
    }
    else{
        let text = document.createTextNode(text1)
        tag.className ="messages__item"
        tag.classList.add("messages__item--visitor")

        // tag.className = "messages__item--operator"
        tag.appendChild(text)
        // msg = "<div class='messages__item messages__item--visitor'>"+ text + "</div> "
    }

    document.getElementById("mainText").appendChild(tag);
}