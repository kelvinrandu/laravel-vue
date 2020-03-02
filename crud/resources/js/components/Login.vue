<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Login</div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right"> email </label>
                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email"  required autofocus>               
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label text-md-right">password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="description"  required autofocus>               
                            </div>
                        </div>
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary"  @click="login()">
                                    login
                                </button>
                            </div>   
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
