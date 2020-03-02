<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Product Component</div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right"> name </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus>               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description"  required autofocus>               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="quantity" class="col-sm-4 col-form-label text-md-right">quantity</label>
                            <div class="col-md-6">
                                <input id="quantity" type="text" class="form-control" name="quantity"  required autofocus>              
                            </div>
                        </div>                    
                <button type="submit" class="btn btn-primary">
                    <a class="action-link" tabindex="-1" @click="login()">
                        Add
                    </a>
                </button>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
