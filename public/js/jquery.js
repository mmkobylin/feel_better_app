// making sure the content is first loaded
document.addEventListener('DOMContentLoaded', () => {
    

    const subtitle1 = document.getElementById('subtitle1')

    const paragraph1 = document.getElementById('paragraph1')

    let visible = false

    subtitle1.addEventListener('click', () => {
        
        paragraph1.style.display = visible? 'block' : 'none'

    })

    visible = !visible

});