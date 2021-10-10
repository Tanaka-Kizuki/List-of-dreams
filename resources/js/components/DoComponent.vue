<template>
    <div class="list">
            <ul>
                <li v-for="item in items" v-bind:key=item.id>
                    <p>{{item.name}}</p>
                    <input type="text" v-bind:value="item.created_at">
                </li>
            </ul>
        </div>
</template>

<script>
import ListConponent from './ListComponent.vue';
export default {
    props :['items'],
}
</script>

<style>
    .list ul  {
        margin: 0;
        padding: 0;
    }
    .list ul li {
        list-style: none;
        margin: 20px 20px 10px 20px;
        padding: 0px 0px 10px 10px;
        border-bottom : 1px solid black;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .list ul li p {
        margin: 0;
        padding: 0;
    }

    .list ul li input{
        height: 20px;
        border: none;
        outline: none;

    }
</style>