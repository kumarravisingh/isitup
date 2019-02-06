import Vue from "vue";
import Vuex from "vuex";
import Form from "./form";


Vue.use(Vuex);

// const formPlugin = store => {
//     store.subscribe((mutation, state) => {
//         console.log(mutation);
//         //this.$vm.displayError();
        
//     })
// }

export default new Vuex.Store({
    modules: {
        Form: Form,
    }
});
