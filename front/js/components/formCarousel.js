function formCarousel(){
    const form = document.querySelector(".formCarousel__form")
    const carousel = document.querySelector(".formCarousel__carousel")
    const items = document.querySelectorAll(".formCarousel__item")
    const submit = document.querySelector(".formCarousel__submit")

    let index = 0;
    let translate = 0;
    const marginRight = 50;

    

    submit.addEventListener("click", (e) => {
        e.preventDefault()

        if(index === items.length - 1){

        }
        else if(items[index].querySelector("input").value.length === 0){

        }
        else{
            index++;
            moveSlider()
        }
    })

    function moveSlider(){
        carousel.style.transform = `translateX(-${ index * (items[0].offsetWidth + marginRight)}px)`
    }
}
formCarousel()