const name = document.getElementById('name');
const mesaj = document.getElementById('mesaj');
const form = document.getElementById('form');
const  errorElement = document.getElementById('error');

form.addEventListener('submit', (e)=>{
    let messages = []
    if(name.value === '' || name.value===null){
        messages.push('Name is required!')
    }
    if(mesaj.value ==='' || mesaj.value===null){
        messages.push('Feedback box is empty!')
    }
    if (messages.length > 0){
        e.preventDefault()
        errorElement.innerText = messages.join(' ')
    }
})