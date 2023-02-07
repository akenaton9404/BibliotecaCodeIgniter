let isTooltipShow = false;

function showColumnName(element, field_name) {
    const scrollForInvisibility = 244

    let visible = document.getElementById('thead').getBoundingClientRect().y > scale(scrollForInvisibility, 0, 1080, 0, window.innerHeight)

    if (isTooltipShow || visible) {
        document.getElementById('tooltip').style.visibility = 'hidden'
    } else {
        document.getElementById('tooltip').innerText = field_name
        document.getElementById('tooltip').style.top = element.getBoundingClientRect().top + "px"
        document.getElementById('tooltip').style.left = (element.getBoundingClientRect().left + element.getBoundingClientRect().width / 2) + "px"
        document.getElementById('tooltip').style.visibility = 'visible'
    }

    isTooltipShow = !isTooltipShow;
}

function scale (number, inMin, inMax, outMin, outMax) {
    return (number - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
}