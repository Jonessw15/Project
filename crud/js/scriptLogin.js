const container = document.querySelector('.container')
const btn = document.querySelector('.btn-input-log')
const btnCad = document.querySelector('.btn-input-cad')
const imgEstuda = document.querySelector('#estuda')
const imgProf = document.querySelector('#prof')

const passwordInput = document.querySelector('#pwd')
const eye = document.querySelector('#eye')
const eyeClose = document.querySelector('#eyeClose')

let box = document.querySelector('.box-login')
let boxCad = document.querySelector('.box-cadastro')
let esconder = document.querySelector('.esconder')

    btn.onclick = function(e) {
        e.preventDefault()
    }

    btn.addEventListener('click', function(evt) {
        if (box.style.display === 'block') {
            box.style.display = 'none'
        } else {
            box.style.display = 'block' 
        }
        esconder.style.display = 'none'
    })

    btnCad.onclick = function(e) {
        e.preventDefault()
    }

    btnCad.addEventListener('click', function(evt) {
        if (boxCad.style.display === 'block') {
            boxCad.style.display = 'none'
        } else {
            boxCad.style.display = 'block'
        }
        esconder.style.display = 'none'
    })

    imgEstuda.onclick = function(e) {
        e.preventDefault()
    }

    imgEstuda.addEventListener('click', function(evt) {
        if (box.style.display === 'block') {
            box.style.display = 'none'
        } else {
            box.style.display = 'block' 
        }
        esconder.style.display = 'none'
    })

    imgProf.onclick = function(e) {
        e.preventDefault()
    }

    imgProf.addEventListener('click', function(evt) {
        if (boxCad.style.display === 'block') {
            boxCad.style.display = 'none'
        } else {
            boxCad.style.display = 'block'
        }
        esconder.style.display = 'none'
    })

    
// SHOW PASSWORD & HIDE PASSWORD

        eye.addEventListener('click', function(e) {
            passwordInput === 'password'
            eye.style.display = 'none'
            eyeClose.style.display = 'block'
            showPassword()
        })
        
        eyeClose.addEventListener('click', function(e) {
            passwordInput === 'password'
            eyeClose.style.display = 'none'
            eye.style.display = 'block'
            hidePassword()
        })

        function showPassword() {
            passwordInput.setAttribute("type", "text")
        }
    
        function hidePassword() {
            passwordInput.setAttribute("type", "password")
        } 