// Const Varibale Used In Validation 
const errorMessage = document.querySelectorAll('.errorMessage');
const form = document.getElementById('addCategory');

const CategoryName = document.querySelector('input[name="name"]');
const CategoryDescription = document.querySelector('textarea[name="description"]');


// Validate Category Name Input Function 
function validateName() {

    const NameRegex = /^[a-zA-Z0-9\s]+$/;
    const NameValue = CategoryName.value;

    switch (true) {
        case !NameValue:
            errorMessage[0].innerText = "Category Name Should Not Be Empty";    
            return false;
        case NameValue.length < 8:
            errorMessage[0].innerText = "Category Name Should Be At Least 8 Characters";
            return false;
        case NameValue.length > 25:
            errorMessage[0].innerText = "Category Name Should Not Surpass 25 Characters";
            return false;
        case !NameRegex.test(NameValue):
            errorMessage[0].innerText = "Category Name Should Only Contain Numbers And Letters";
            return false;
        default:
            errorMessage[0].innerText = "";
            return true;
    }
}

// Validate Category Description Input Function 
function validateDescription() {

    const DescriptionRegex = /^[a-zA-Z\s]+$/;
    const DescriptionValue = CategoryDescription.value;

    switch (true) {
        case !DescriptionValue:
            errorMessage[1].innerText = "Category Description Should Not Be Empty";    
            return false;
        case DescriptionValue.length < 30:
            errorMessage[1].innerText = "Category Description Should Be At Least 30 Characters";
            return false;
        case DescriptionValue.length > 150:
            errorMessage[1].innerText = "Category Description Should Not Surpass 150 Characters";
            return false;
        case !DescriptionRegex.test(DescriptionValue):
            errorMessage[1].innerText = "Category Description Should Only Contain Letters";
            return false;
        default:
            errorMessage[1].innerText = "";
            return true;
    }
}

// Validate Input On Key Up
CategoryName.addEventListener('input', () => validateName());
CategoryDescription.addEventListener('input', () => validateDescription());

// Handling Form Submit 
form.addEventListener('submit', (e) => {

    validateName();
    validateDescription();

    if (!validateName() || !validateDescription()) {
        e.preventDefault();
    } else {
        form.submit();
    }
})