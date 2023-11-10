Store = (url, method , form = {}, headers = {}) => {
    const ajax = new XMLHttpRequest();

    console.log()
    ajax.onreadystatechange = () => {
        if (ajax.readyState === 4) {
            // roles
        }
    }

    if (method === 'GET' || method === 'DELETE') {
        ajax.open(method, url, true);
        ajax.setRequestHeader("Accept", 'application/json');
        ajax.send();
    }else{
        ajax.open(method, url, true);
        ajax.setRequestHeader("Accept", 'application/json');
        ajax.send(form);
    }
}


newFormData = (data = {}, files = {} ) => {

    let form = new FormData ;

    for (param of Object.keys(data)){
        form.append(param , data[param]);
    }
    if (files){
    for (param of Object.keys(files)) {
        for (let i = 0; i < files[param].files.length; i++) {
            form.append(`${param}[]`, files[param].files[i])
        }
    }
    }

    return form ;
}
