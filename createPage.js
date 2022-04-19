function addElement() {
    let formulario = document.getElementById("fields");
    let newTag = document.getElementById("new").value;
    let element = document.createElement("INPUT");
    element.setAttribute("type", newTag);
    element.setAttribute("class", "campo");
    element.setAttribute("accept", "image/*");
    formulario.appendChild(element);
}

function turnIntoText() {
    let fields = document.getElementsById("fields");
    let conteudo = document.getElementById("conteudo");
    conteudo.value = fields.textContent;
}