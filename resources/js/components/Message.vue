<template>
    <div>
        <li class="list-group-item" :class="className"><slot></slot>
        <span id="time">{{time}}</span></li>
        <small :class="badgeClass">{{user}}</small>
        <br><br>
</div>
</template>

<script>
    export default {
        props:[
            'color',
            'user',
            'time',
            'position'
        ],

        computed:{
            className(){
                return 'list-group-item-'+this.color
            },
            badgeClass(){
                return 'badge-'+this.color+ ' float-'+this.position
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>


<style scoped>
#time{
    font-size: 9px;
    margin-top: 10px;
    color: black;
}
</style>