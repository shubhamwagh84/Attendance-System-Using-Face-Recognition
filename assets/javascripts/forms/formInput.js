function checkAlpha(inputValue){
    let regex = /^[a-zA-Z\s]+$/
    let isValid = regex.test(inputValue);
    if (isValid){
        return true;
    }
    else{
        return false;
    }
  }

  function checkEmpty(inputValue) {
    if (inputValue.length < 1){
        return false;
    }
    else{
        return true;
    }
    
}

function checkNumbers(inputValue){
    let regex = /^\d+$/
    let isValid = regex.test(inputValue);
    if(isValid){
        return true;
    }
    else{
        return false;
    }
}
