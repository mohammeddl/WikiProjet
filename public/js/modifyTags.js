function clickHiddenTag(id) {
    formHidden = document.getElementById("formHidden");
    if (formHidden.style.display === 'none') {
        formHidden.style.display = "block";
    }

    let idTag = document.getElementById('tag' + id).value;
    let nameTag = document.getElementById('tagName' + id).innerText;
    document.getElementById('tagName2').value = nameTag;

    document.getElementById('id2').value = idTag;
}

function hidePopupEdit() {
    formHidden = document.getElementById("formHidden");
    if (formHidden.style.display === 'block') {
        formHidden.style.display = "none";
    }
}