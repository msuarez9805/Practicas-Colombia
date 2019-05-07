// console.log('hola');

document.querySelector('#info').addEventListener('click', datos);

function datos() {

    // console.log('En la función');

    const enviar = new XMLHttpRequest();
    enviar.open('GET', 'practicas.json', true);
    enviar.send();
    enviar.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            // console.log(this.responseText);
            let datos = JSON.parse(this.responseText);
            // console.log(datos);

            let answer = document.querySelector('#answer');
            answer.innerHTML = '';

            for (let item of datos) {
                // console.log(item);
                answer.innerHTML += `
                <tr>
                    <td>${item.Empresa}</td>
                    <td>${item.Ubicación}</td>
                    <td>${item.Facultad}</td>
                    <td>${item.Teléfono}</td>
                    <td>${item.Elegir}</td>
                </tr>
`
            }
        }
    }
}
