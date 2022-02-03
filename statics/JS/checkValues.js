let res = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let checkValue = () => {
    if (document.userform.name.value.length < 5) {
        document.userform.name.focus();
        document.userform.name.style = "border-color: red;";
        alert("Name is not valid, name length should be greater or equal to 5.");
        return false;
    } else if (document.userform.mail.value.length < 15) {
        document.userform.mail.focus();
        document.userform.mail.style = "border-color: red;";
        alert("Email is not valid, email length should be greater or equal to 15");
        return false;
    } else if (document.userform.number.value.length != 10) {
        document.userform.number.focus();
        document.userform.number.style = "border-color: red;";
        alert("Number is not valid, number length should be  equal to 10");
        return false;
    } else if (!res.test(mail.value)) {
        document.userform.mail.focus();
        document.userform.mail.style = "border-color: red;";
        alert("Email is not valid.");
        return false;
    }
    return true;
};

let check = (field) => {
    let type = field.getAttribute("type");
    if ((type = "number")) {
        if (field.value.length != 10) {
            field.style = "border-color: red;";
        } else {
            field.style = "border-color: black;";
        }
    }
    if ((type = "mail")) {
        if (res.test(field)) {
            field.style = "border-color: black;";
        } else {
            field.style = "border-color: red;";
        }
        if (field.value.length < 15) {
            field.style = "border-color: red;";
        } else {
            field.style = "border-color: black;";
        }
    }
    if ((type = "text")) {
        if (field.value.length < 5) {
            field.style = "border-color: red; text-transform: capitalize;";
        } else {
            field.style = "border-color: black; text-transform: capitalize;";
        }
    }
};