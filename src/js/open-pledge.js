const $containerRewards = document.querySelectorAll('.container__reward')
let $rewardOpened = null

$containerRewards.forEach(($containerReward) => {
    const $checkEvent = $containerReward.querySelector('.check-event')

    if ($checkEvent) {
        const $rewardDetail = $containerReward.querySelector('.reward-detail');

        $checkEvent.addEventListener('click', () => {
            if ($rewardOpened !== null && $checkEvent !== $rewardOpened) {
                $rewardOpened.classList.remove('open-field')
                $rewardOpened.classList.add('is-active')
            }

            $rewardDetail.classList.remove('open-field')
            $rewardDetail.classList.add('is-active')
            $rewardOpened = $checkEvent
        })
    }
})
