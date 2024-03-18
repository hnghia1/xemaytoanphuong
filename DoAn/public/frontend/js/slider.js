const listImage = document.querySelector('.list-images');
const imgs = document.getElenmentsByTagName('img')
const btnLeft = document.querySelector('.btn-left')
const btnRight = document.querySelector('.btn-right')
const length = imgs.length  
let current = 0

const handleChangeSlide = () => {
    if (current == length - 1) {
        current = 0
        let width = imgs[0].offsetWidth
        slider.style.transform = `translateX(0px)`
    } else {
        current ++
        let width = imgs[0].offsetWidth
        slider.style.transform = `translateX(${width * -1 * current}px)`
    }
}

setInterval(handleChangeSlide, 4000)


btnRight.addEventListener('click',() => {

    handleChangeSlide()

})
