function addElement() {
    let formulario = document.getElementById("fields");
    let newTag = document.getElementById("new").value;
    let element = document.createElement("INPUT");
    element.setAttribute("type", newTag);
    element.setAttribute("class", "campo");
    element.setAttribute("accept", "image/*");
    formulario.appendChild(element);
}

function getContent() {
    let content= document.getElementById("fields");
    let data = document.getElementById("conteudo");
    data.value = content.outerHTML;
}
