const student_id = document.getElementById('student_id')
const title = document.getElementById('title')
const name = document.getElementById('name')
const book_id = document.getElementById('book_id')
const issue_date = document.getElementById('issue_date')
const return_date = dosument.getElementById('return_date')
const from = document.getElementById('form')
// const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) =>{
    e.preventDefault();
    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDispaly = inputControl.querySelector('.error');

    errorDispaly.innerText = message;
    inputControl.classList.add('erroe');
    inputControl.classList.remove('success');
}

const validateInputs = () => {
    const student_idValue = student_id.value.trim()
    const titleValue = title.value.trim()
    const nameValue = name.value.trim()
    const book_idValue = book_id.value.trim()
    const issue_dateValue = issue_date.value.trim()
    const return_dateValue = return_date.value.trim()

    if (student_id === "" || student_id === null){
        setError(student_id, 'ID is required!');
    } else {
        setSuccess(student_id);
    }

    if(title === '' || title === null){
        setError(title, 'Title is required!')
    } else {
        setSuccess(title);
    }

    if(name === '' || name === null){
        setError(name, 'Name is required!')
    } else {
        setSuccess(name);
    }

    if(book_id === '' || book_id === null){
        setError(book_id, 'Book code is required!')
    } else {
        setSuccess(book_id)
    }

    if(issue_date === '' || issue_date === null){
        setError(issue_date, 'Date is required!')
    } else {
        setSuccess(issue_date)
    }

    if(return_date === '' || return_date === null){
        setError(return_date, 'Date is required!')
    } else {
        setSuccess(return_date)
    }
}