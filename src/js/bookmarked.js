const btnBooked = document.querySelector('#bookmarked');
const goBack = document.querySelector('.btn__back')
const elt = document.querySelector('.is-grey')

btnBooked.addEventListener('click', ()=> {
    elt.classList.add('is-success')
})

goBack.addEventListener('click', ()=> {
    elt.classList.remove('is-success')
})