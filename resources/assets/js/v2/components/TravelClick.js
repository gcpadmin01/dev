const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
const urlHost = 'https://api.travelclick.com/shop/v1/hotel/'

let token = ""

const peticions = [];

const getToken = () => {
    return new Promise(resolve => {
        if (token != "") {
            resolve(token);
        } else {

            fetch('/token', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
                .then(response => response.json())
                .then(response => {
                    token = response.token;
                    resolve(token)
                })
        }
    });
}

const startBasicAvail = async (params) => {
    const newPeticion = btoa(JSON.stringify(params));
    if (peticions[newPeticion]){
        return {
            result: peticions[newPeticion],
            request: params
        };
    }else {

        const token = await getToken();
        const result = await basicAvail(params, token);
        peticions[newPeticion] = JSON.parse(result);
        return {
            result: JSON.parse(result),
            request: params
        };

    }
}

const basicAvail = (params, tokenLoyalty) => {

    const {hotelCode} = params;
    const data = new URLSearchParams(params);

    const myHeaders = new Headers();
    myHeaders.append('Authorization', `Bearer ${tokenLoyalty}`);

    const requestOptions = {
        method: 'GET',
        headers: {
            'Authorization': `Bearer ${tokenLoyalty}`
        }
    };

    const url = `${urlHost}/${hotelCode}/basicavail?${data}`;

    return new Promise(resolve => {
        fetch(url, requestOptions)
            .then(response => {
                console.log(response);
                resolve(response.text())
            });

    })
}

export {
    startBasicAvail,
    getToken
}