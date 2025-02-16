let isReady = false;
let counterDescNumber = 10;
function Main(){
    handleCounter();
}

function handleCounter(){
    const counterElement = document.getElementById('counter');
    const buttonRedirecter = document.getElementById('btnGo');
    if(counterElement){
        setInterval(() => {
            if(counterDescNumber <= 10 && counterDescNumber > 0){
                counterDescNumber--;
                counterElement.innerHTML = counterDescNumber;

                if(counterDescNumber === 0){
                    counterElement.style.color = 'green';
                    buttonRedirecter.classList.remove('desactivated');
                }

            }
            
        }, 1000);
    }
}


addEventListener('DOMContentLoaded', Main);