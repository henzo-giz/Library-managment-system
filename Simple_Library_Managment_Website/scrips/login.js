const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) =>{
    let messages = []
    if (name.value === "" || name.value === null){
        messages.push("Name must be filled!")
    }

    if (password.valu === "" || password.value === null){
        messages.push("Password must be filled!")
    }

    if (password.value.length <= 4){
        messages.push('Password must be morethan 4 characters')
    }

    if (password.value.length >= 8){
        messages.push('Password must be lessthan 8 characters')
    }

    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})