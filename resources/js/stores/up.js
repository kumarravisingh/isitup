import axios from 'axios';


export default {
    state: {

    },
    mutations: {

    },
    actions: {
        getUpStatus({state,commit}, url){
            return axios.post('up/' + url)
                .then(function (response) {
                    return response
                })
                .catch(function (error) {
                    return error;
                });
        },
    }
}
