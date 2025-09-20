document.addEventListener('DOMContentLoaded', () =>{
    const botao = document.querySelector('#gatilho')
    
    botao.addEventListener('click', buscarDados)
})
async function buscarDados(){
        const resultado =  await fetch('http://localhost:8000/evento', {
            mode: 'no-cors',
            headers: {'Accept': 'application/json'}
        })

        console.log(resultado)
    }