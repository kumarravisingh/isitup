import Vue from "vue";
import Vuex from "vuex";
import Up from "./up";


Vue.use(Vuex);

// const formPlugin = store => {
//     store.subscribe((mutation, state) => {
//         console.log(mutation);
//         //this.$vm.displayError();
        
//     })
// }

export default new Vuex.Store({
    modules: {
        Up: Up,
    }
});
