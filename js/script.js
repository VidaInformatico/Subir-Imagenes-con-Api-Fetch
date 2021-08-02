document.getElementById("img").addEventListener("change", (e) =>{
    document.getElementById("vistaPrevia").classList.remove("d-none");
    let name = e.target.files[0];
    let img = URL.createObjectURL(name);
    document.getElementById("imgprevia").src = img;
});
document.getElementById("btn-publicar").addEventListener("click", async () =>{
    let frmImg = document.getElementById("frmImg");
    try {
        let response = await fetch("subir.php",{
            method: "POST",
            body: new FormData(frmImg)
        });
        let data = await response.text();
        if (data == "ok") {
            VanillaToasts.create({
                title: "Mensaje",
                text: "Imagen publicada",
                type: "success",
                timeout: 3000
            });
            document.getElementById("vistaPrevia").classList.add("d-none");
            frmImg.reset();
            listar();
        } else {
            VanillaToasts.create({
                title: "Mensaje",
                text: "Error al publicar",
                type: "error",
                timeout: 3000
            });
        }
    } catch (error) {
    }
});
async function listar() {
    let response = await fetch("listar.php");
    let data = await response.text();
    document.getElementById("resultado").innerHTML = data;
}
listar();