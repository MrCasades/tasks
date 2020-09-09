//Проверка данных
const ins_data = document.getElementById('ins_data')

const add = document.getElementById('add')

add.addEventListener('click', (event) => {
	
	const errAndWar = ins_data.value.split(' ', 2);

	console.log (errAndWar)
    
    switch (true) {
        case isNaN(errAndWar[0]):
             incorr.innerHTML = 'Вы ввели некорректные данные'
             event.preventDefault()
             break
			
		case isNaN(errAndWar[1]):
             incorr.innerHTML = 'Вы ввели некорректные данные'
             event.preventDefault()
             break

        case errAndWar[0] < 1:   
            incorr.innerHTML = 'Первое значение должно быть больше 1'
            event.preventDefault()
            break 
        
        case errAndWar[1] < 1:   
            incorr.innerHTML = 'Второе значение должно быть больше 1'
            event.preventDefault()
            break 
            
        case errAndWar[0] > 1000:   
            incorr.innerHTML = 'Первое значение должно быть меньше 1000'
            event.preventDefault()
            break 
			
		case errAndWar[1] > 1000:   
            incorr.innerHTML = 'Второе значение должно быть меньше 1000'
            event.preventDefault()
            break 
			
		case errAndWar[0] === '':   
            incorr.innerHTML = 'Вы ввели некорректные данные'
            event.preventDefault()
            break 
			
		case errAndWar[1] === '':   
            incorr.innerHTML = 'Вы ввели некорректные данные'
            event.preventDefault()
            break 
		
		default: incorr.innerHTML = ''
    }
})

