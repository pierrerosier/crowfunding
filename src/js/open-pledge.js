const $modalToggler = document.querySelector('openField')

    if ($modalToggler) {
        let openField = false

        $modalToggler.addEventListener('click', (evt) => {
            if (openField) {
                document.getElementById('secondPart').classList.remove('is-active')
            } else {
                document.getElementById('secondPart').classList.add('is-active')
            }
            openField = !openField
        });
    }