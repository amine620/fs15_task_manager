document.querySelector('.parent').addEventListener('click',(e)=>{

    let element=e.target.classList.contains('btn-edit')
    if(element)
    {
       e.target.parentElement.parentElement.previousElementSibling.classList.remove('d-none')
       e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.classList.add('d-none')
    }


})