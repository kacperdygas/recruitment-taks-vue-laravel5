<template>
    
    <li :class="class_name">{{index + '. ' + item}}</li>
    
</template>

<script>
    export default {
        props: {
            item: '',
            index: '',
            last: ''
        },
        data() {
            return {
                class_name: ''
            }
            
        },
        methods: {
            addClass() {
                if(this.index % 2 !== 0) {
                    this.class_name += 'yellow ';
                } 
                if(this.index % 3 === 0) {
                    this.class_name += 'green ';
                }
                if(this.index % 2 !== 0) {
                    this.class_name += 'yellow ';
                }
                if(this.index === this.last) {
                    this.class_name += 'red ';
                }
                if(this.index === 0) {
                    this.class_name += 'red ';
                }
            }
        },
        mounted() {
            this.class_name = '';
            this.addClass();
            console.log('DoingComponent mounted.')
        }
    }
</script>
<style>
    .red {
        color: #f00;
    }
    .green {
        background: #0f0;
    }
    .yellow {
        border: 1px solid #FFFF00;
    }
</style>
