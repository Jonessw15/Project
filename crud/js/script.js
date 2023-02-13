const modal = document.querySelector('.modal-container')

function pegarDados(id, nome) {
    document.querySelector('#nome_pessoa').innerHTML = nome
    document.querySelector('#nome_pessoa1').innerHTML = nome
    document.querySelector('#id').value = id
    modal.classList.add('active')
}

function closeModal() {
    modal.addEventListener("click", function(e) {
        e.preventDefault()
    })
    modal.classList.remove('active')
}

function closeModal1() {
    modal.classList.remove('active')
}