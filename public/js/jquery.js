// making sure the content is first loaded
document.addEventListener('DOMContentLoaded', () => {
    
    
    const toggle1 = document.getElementById('subtitle1')

    const paragraph1 = document.getElementById('paragraph1')

    const subtitle1 = document.getElementById('span1')
    const subtitle2 = document.getElementById('span2')

    let visible1 = true
    //toggling first parts
    toggle1.addEventListener('click', () => {
        
        paragraph1.style.display = visible1? 'block' : 'none'
        subtitle1.style.display = visible1? 'none' : 'block'
        subtitle2.style.display = visible1? 'block' : 'none'

        visible1 = !visible1

    })


    const toggle2 = document.getElementById('subtitle2')

    const paragraph2 = document.getElementById('paragraph2')

    const subtitle3 = document.getElementById('span3')
    const subtitle4 = document.getElementById('span4')

    let visible2 = true

    toggle2.addEventListener('click', () => {
        
        paragraph2.style.display = visible2? 'block' : 'none'
        subtitle3.style.display = visible2? 'none' : 'block'
        subtitle4.style.display = visible2? 'block' : 'none'

        visible2 = !visible2

    })





});
