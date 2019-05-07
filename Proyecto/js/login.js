function validar() {
    var correo, contraseña, expresión;
    correo = document.getElementById("correo").value;
    contraseña = document.getElementById("contraseña").value;

    //* Expresión que permite validar el correo electrónico *//
    expresión = /\w+@\w+\.+[a-z]/;

    //* Condicional, valida que se debe escribir en todos los campos *//
    if (correo === "" || contraseña === "") {
        alert("Debe completar los campos");
        return false;
    }
    //* Validar que la expresión para el correo se aplique *//
    else if (!expresión.test(correo)) {
        alert("Correo No válido");
        return false;
    }
}
