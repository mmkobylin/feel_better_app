// making sure the content is first loaded
document.addEventListener('DOMContentLoaded', () => {
    

    const toggle = document.getElementById('subtitle1')

    const paragraph1 = document.getElementById('paragraph1')

    const subtitle1 = document.getElementById('span1')
    const subtitle2 = document.getElementById('span2')

    let visible = false

    toggle.addEventListener('click', () => {
        
        paragraph1.style.display = visible? 'block' : 'none'
        subtitle1.style.display = visible? 'none' : 'block'
        subtitle2.style.display = visible? 'block' : 'none'

        visible = !visible

    })


});