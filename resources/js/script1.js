function calc(cmd){
    const element = document.getElementById('output')
    const value = element.value

    if(cmd === '='){
        element.value  = eval(value)
    }else if(cmd === 'C'){
        element.value = '0'
    }else if(value === '0') {
        element.value = cmd
    }else{
        element.value += cmd
    }
}