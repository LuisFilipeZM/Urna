// Funções da urna

function displaynum(n1){

    display.resultado.value = (display.resultado.value + n1).substring(0, 2);

}

function clean(){

    display.resultado.value = "";

}

function branco(){

    display.resultado.value = "BRANCO";

}

 

//Validação login

(() => {

    const forms = document.querySelectorAll('.needs-validation')



    Array.from(forms).forEach(form => {

      form.addEventListener('submit', event => {

        if (!form.checkValidity()) {

          event.preventDefault()

          event.stopPropagation()

        }

  

        form.classList.add('was-validated')

      }, false)

    })

  })()// Funções da urna

function displaynum(n1){

    display.resultado.value = (display.resultado.value + n1).substring(0, 2);

}

function clean(){

    display.resultado.value = "";

}

function branco(){

    display.resultado.value = "BRANCO";

}



//Validação login

(() => {

    const forms = document.querySelectorAll('.needs-validation')



    Array.from(forms).forEach(form => {

      form.addEventListener('submit', event => {

        if (!form.checkValidity()) {

          event.preventDefault()

          event.stopPropagation()

        }

  

        form.classList.add('was-validated')

      }, false)

    })

  })()