let title = document.getElementById("title");
let voltarForm = document.getElementById("voltarForm");
let sectionForm = document.getElementById("sectionForm");
let resultadosImc = document.getElementById("resultadosImc");
let mostraResultados = document.getElementById("mostraResultados");

mostraResultados.addEventListener("click", function() {
    title.textContent="RESULTADOS IMC";
    sectionForm.setAttribute("style", "display: none");
    resultadosImc.setAttribute("style", "display: block");
});

voltarForm.addEventListener("click", function() {
    title.textContent="CALCULE SEU IMC";
    resultadosImc.removeAttribute("style", "display: none");
    sectionForm.setAttribute("style", "display: block");
});
