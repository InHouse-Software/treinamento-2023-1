function validaForm() {
    let titulo = document.forms["recipe_form"]["titulo"];
    let descricao = document.forms["recipe_form"]["descricao"];
    
    if (titulo.value === "") {
      let label = document.getElementById("titulo_label");
      label.style.color="red";
    }
    
    if (descricao.value === "") {
      let label = document.getElementById("descricao_label");
      label.style.color="red";
    }
}