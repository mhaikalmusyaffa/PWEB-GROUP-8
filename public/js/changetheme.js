
document.addEventListener('DOMContentLoaded', function() {
    let lightMode = localStorage.getItem('lightMode')
    const lightModeToggle = document.querySelector('#toogle')


    const enable = ()=>{
        document.body.classList.add('active')
        lightModeToggle.classList.add('active')
        localStorage.setItem('lightMode','enabled')
    }

    const disable = ()=>{
        document.body.classList.remove('active')
        lightModeToggle.classList.remove('active')
        localStorage.setItem('lightMode',null)
    }

    if(lightMode === 'enabled'){
        enable();
    }

    lightModeToggle.addEventListener('click',()=>{

        console.log('tes')
        lightMode = localStorage.getItem('lightMode')
        if(lightMode !== 'enabled'){
            enable();

        }else{
            disable()
        }

    })
})
