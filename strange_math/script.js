//Проверка данных
const ins_data = document.getElementById('ins_data')

const add = document.getElementById('add')

const lengarr = document.getElementById('lengarr')

add.addEventListener('click', (event) => {
 
    switch (true) {
        case isNaN(ins_data.value):
             incorr.innerHTML = 'Вы ввели некорректные данные'
             event.preventDefault()
             break
			
        case ins_data.value < 1:   
            incorr.innerHTML = 'Значение должно быть больше 1'
            event.preventDefault()
            break 
        
        case ins_data.value > parseInt(lengarr.value):   
            incorr.innerHTML = 'Значение должно быть меньше ' + (parseInt(lengarr.value) + 1)
            event.preventDefault()
            break 
		
		case ins_data.value === '':   
            incorr.innerHTML = 'Вы ввели некорректные данные'
            event.preventDefault()
            break 
			
		default: incorr.innerHTML = ''
    }
})