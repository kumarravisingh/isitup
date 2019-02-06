import axios from 'axios';


export default {
    state: {
        data :{},

    },
    mutations: {

        SET_DATA(state, data) {
            state.data = data;
        }
    },
    actions: {
        getUserData({state,commit}){
            axios.post('/user-data')
                .then(function (response) {
                  //  vm.$Progress.finish();
                   // commit('SET_DATA',response.data);

                })
                .catch(function (error) {
                    vm.displayError(error);

                });
        },
    }
}
