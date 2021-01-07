var fname;
var ftel;
var fmail;
var ftext;

var fsubmit;

var telregex = new RegExp('^(0)[1-9](\\d{2}){4}$');
var mailregex = new RegExp('^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,4}$');

var formready = true;

function checkIfFormIsCorrect() {
    formready = true;
    //si ftel n'est pas égal a null alors verifier si ftel est égal au Regex
    if (ftel) {
        if (ftel.value <= 0) {
            ftel.classList.remove("correctRegex");
            ftel.classList.remove("wrongRegex");
            formready = false;
        } else if (telregex.test(ftel.value)) {
            ftel.classList.remove("wrongRegex");
            ftel.classList.add("correctRegex");
        } else {
            ftel.classList.remove("correctRegex");
            ftel.classList.add("wrongRegex");
            formready = false;
        }
    }
    
    //Si fname n'est pas égal a null et que sa valeur correspond a la taille voulu alors
    if (fname) {
        fname.classList.remove("correctRegex");
        fname.classList.remove("wrongRegex");
        if ((fname.value.length < 3) || (fname.value.length > 15)) {
            if (fname.value.length !== 0) {
                formready = false;
                fname.classList.remove("correctRegex");
                fname.classList.add("wrongRegex");
            }
        } else {
            fname.classList.remove("wrongRegex");
            fname.classList.add("correctRegex");
        }
    }
    
    //Si fmail n'est pas égal a null et que sa veleur correspond au regex alors
    if (fmail) {
        if (fmail.value.length === 0) {
            fmail.classList.remove("correctRegex");
            fmail.classList.remove("wrongRegex");
            formready = false;
        } else if (mailregex.test(fmail.value)) {
            fmail.classList.remove("wrongRegex");
            fmail.classList.add("correctRegex");
        } else {
            fmail.classList.remove("correctRegex");
            fmail.classList.add("wrongRegex");
            formready = false;
        }
    }
    
    //si Form est pret (formready) alors activer le bouton Envoyer
    if (fsubmit) {
        fsubmit.classList.remove("correctRegex");
        fsubmit.classList.remove("wrongRegex");
        if (formready) {
            fsubmit.classList.add("correctRegex");
        } else {
            fsubmit.classList.add("wrongRegex");
        }
    }
    
    setTimeout(checkIfFormIsCorrect, 1000);
}
checkIfFormIsCorrect();

function sendMail() {
    window.open('mailto:'+fmail.value);
}