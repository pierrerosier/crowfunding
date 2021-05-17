const btnBooked = document.querySelector('#bookmarked');
const elt = document.querySelector('.is-grey')

btnBooked.addEventListener('click', ()=> {
    elt.classList.add('is-success')
})