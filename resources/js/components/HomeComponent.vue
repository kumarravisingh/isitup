<template>
    <main class="align-middle h-100">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mt-2 row">
                                <div id="is" class="col-md-3 outside mt-1 align-content-center">
                                    <label>Is</label>
                                </div>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control search-box" name="email" value="" required autofocus>
                                </div>
                                <div id="up" class="col-md-3 outside  mt-1 align-content-center">
                                    <label>Up?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group text-center">
                                    <input type="button" class="btn btn-info align-content-center" value="Check Status">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

</script>
