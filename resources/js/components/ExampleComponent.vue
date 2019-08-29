<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test</div>

                    <div class="card-body">
                        <form v-on:submit.prevent="formSubmit">
                            <textarea class="form-control"  v-model="textarea" row="10"></textarea>
                            <input class="btn btn-success" type="submit" value="Submit">
                        </form>
                        <div v-if="toLoop !== null">
                            <h5>Results:</h5>
                            <ul>
                                <doing-component v-for="(item, index) in toLoop" :item="item" :index="index" :last="toLoop.length - 1" v-bind:key="index"></doing-component>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                textarea: '',
                toLoop: []
            }            
        },
        
        methods: {
            formSubmit: function() {
                let $this = this;
                let data = this.textarea;
                $this.toLoop = [];
                axios.post('/sendForm', {
					data: data
				})
				.then(function (response) {
                    $this.toLoop = response.data;
				})
				.catch(function (error) {
				});
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
