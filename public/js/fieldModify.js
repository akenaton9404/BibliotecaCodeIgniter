function fieldModify(element) {
    element.innerHTML = `<input id="field-input" class="field-input" placeholder="${element.innerHTML}" type="text">`

    document.getElementById('field-input').select()
    document.getElementById('field-input').addEventListener("keydown", (e) => {

        switch (e.key) {
            case "Escape":
                element.innerHTML = element.childNodes[0].placeholder
                break
            case "Enter":
                let value = element.childNodes[0].value
                element.innerHTML = value.length > 0 ? value : element.childNodes[0].placeholder
                break
        }
    })
    document.getElementById('field-input').addEventListener("focusout", (e) => {
        element.innerHTML = element.childNodes[0].placeholder
    })
}