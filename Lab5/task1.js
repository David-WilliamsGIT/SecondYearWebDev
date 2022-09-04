
function dobStartCheck(StartDate) {
    var startDate = new Date(StartDate.value);
    var today = new Date();

    today.setHours(0,0,0,0);

    if(startDate < today) 
        {
            startDate.setCustomValidty('Starting date should be today or after');
        }
    else
        {
            startDate.setCustomValidty('')
        }
 
}

function getAge(DateOfBirth) {
    var birthday = new Date(DateOfBirth.value);
    var today = new Date();
    var years = today.getFullYear() - birthday.getFullYear();

    birthday.setFullYear(today.getFullYear());

    if(today < birthday)
        {
            years--;
        }
    return years
}

function dobCheck(input) {
    var age;
    age = getAge(input);

    if(age < 17)
        {
            input.setCustomValidty('Student must be older than 17');
        }
    else 
        {
            input.setCustomValidty('');
        }
}

let form = document.getElementById('form')
let conemail = document.getElementById('conemail')
let email = document.getElementById('email')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    console.log('Hej inne i eventlyssnaren')
    console.log('email: '+email.value)
    console.log('confirm email: '+conemail.value)

    if (conemail.value === email.value) {
        alert("SAME EMAIL: " + " confirm: " + conemail.value + "  email: " + email.value);

    }else if(conemail.value !== email.value){
        alert("NOT SAME EMAIL: " + " confirm: " + conemail.value + "  email: " + email.value)
    }
    else
    {
        alert("Error")
    }
})